<?php

namespace App\Http\Livewire\Santri;

use App\Models\Doc;
use App\Models\StatusUser;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadDoc extends Component
{

    public $kk, $ijazah ,$spSantri, $spWsantri, $spiQabul;
    use WithFileUploads;

    public function render()
    {
        return view('livewire.santri.upload-doc')->layout('layouts.dashboard.dashboard');
    }
    protected $rules = [
        'kk' => 'file|mimes:pdf|max:1024',
        'ijazah' => 'file|mimes:pdf|max:1024', // 1MB Max
        'spSantri' => 'file|mimes:pdf|max:1024', // 1MB Max
        'spWsantri' => 'file|mimes:pdf|max:1024', // 1MB Max
        'spiQabul' => 'file|mimes:pdf|max:1024', // 1MB Max
    ];

    protected $messages = [
        'mimes' => 'File harus dalam format PDF',
        
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    

    public function save()
    {

        $this->validate([
            'kk' => 'file|mimes:pdf|max:1024', // 1MB Max
            'ijazah' => 'file|mimes:pdf|max:1024', // 1MB Max
            'spSantri' => 'file|mimes:pdf|max:1024', // 1MB Max
            'spWsantri' => 'file|mimes:pdf|max:1024', // 1MB Max
            'spiQabul' => 'file|mimes:pdf|max:1024', // 1MB Max
        ]);
        $user = auth()->user()->id;
        $idStatus = auth()->user()->status->id;
        $nkk = md5($this->kk . microtime()).'.'.$this->kk->extension();
        $nijazah = md5($this->ijazah . microtime()).'.'.$this->ijazah->extension();
        $nspsantri = md5($this->spSantri . microtime()).'.'.$this->spSantri->extension();
        $nspwsantri = md5($this->spWsantri . microtime()).'.'.$this->spWsantri->extension();
        $nspijab = md5($this->spiQabul . microtime()).'.'.$this->spiQabul->extension();

        $this->kk->storeAs('doc', $nkk);
        $this->ijazah->storeAs('doc', $nijazah);
        $this->spSantri->storeAs('doc', $nspsantri);
        $this->spWsantri->storeAs('doc', $nspwsantri);
        $this->spiQabul->storeAs('doc', $nspijab);

        Doc::create([
            'user_id' => $user,
            'nama_berkas' => 'KK',
            'alamat_berkas' => $nkk,
        ]);

        Doc::create([
            'user_id' => $user,
            'nama_berkas' => 'Ijazah',
            'alamat_berkas' => $nijazah,
        ]);

        Doc::create([
            'user_id' => $user,
            'nama_berkas' => 'Surat Pernyataan Santri',
            'alamat_berkas' => $nspsantri,
        ]);

        Doc::create([
            'user_id' => $user,
            'nama_berkas' => 'Surat Pernyataan Wali Santri',
            'alamat_berkas' => $nspwsantri,
        ]);

        Doc::create([
            'user_id' => $user,
            'nama_berkas' => 'Surat Ijab Qabul',
            'alamat_berkas' => $nspijab,
        ]);

        $statusUser =  StatusUser::find($idStatus);
        
        $statusUser->update([
            'status' => '3'
        ]);
        
        session()->flash('success', 'Data berhasil Disimpan');
        return redirect()->route('santri.dashboard');


        
    }
}
