<?php

namespace App\Http\Livewire\Admin\Biayapendaftaran;

use App\Models\Biayapendaftaran;
use Livewire\Component;

class Index extends Component
{
    public $perPage = '10';
    public $searchTerm;
    public $data;
    public $isModal = 0;
    public $hapus = 0;
    public $nama_biaya, $tahun_ajaran, $sekolah, $harga, $biaya_id;

    protected $rules = [
        'nama_biaya' => 'required',
        'tahun_ajaran' => 'required',
        'sekolah' => 'required',
        'harga' => 'required|integer',
    ];

    protected $messages = [
        'required' => ':attribute Harus diisi',
        'integer' => ':attribute Harus  Nominal'
    ];

    public function render()
    {
        $this->data['biaya'] = $this->getBiaya();
        return view('livewire.admin.biayapendaftaran.index', $this->data);
    }

    public function getBiaya()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $biaya = new Biayapendaftaran();

        if (!empty($searchTerm)) {
            $biaya = $biaya->where('nama_biaya', 'LIKE', $searchTerm);
        }

        return $biaya->get();
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function resetFields()
    {
        $this->nama_biaya = '';
        $this->tahun_ajaran = '';
        $this->sekolah = '';
        $this->harga = '';
    }

    public function store()
    {
        $this->validate([
            'nama_biaya' => 'required',
            'tahun_ajaran' => 'required',
            'sekolah' => 'required',
            'harga' => 'required|integer',
        ]);

        Biayapendaftaran::updateOrCreate(['id' => $this->biaya_id], [
            'nama_biaya' => $this->nama_biaya,
            'tahun_ajaran' => $this->tahun_ajaran,
            'sekolah' => $this->sekolah,
            'harga' => $this->harga,

        ]);
        
       
        $this->closeModal();
        $this->resetFields();
        session()->flash('success', 'Data berhasil Disimpan');
    }

    public  function edit($id){
        $biaya = Biayapendaftaran::findOrFail($id);
        $this->biaya_id = $id;
        $this->nama_biaya = $biaya->nama_biaya;
        $this->tahun_ajaran = $biaya->tahun_ajaran;
        $this->sekolah = $biaya->sekolah;
        $this->harga = $biaya->harga;

        $this->openModal();
    }

    public function confirmHapus($id){
        $biaya = Biayapendaftaran::findOrFail($id);
        $this->biaya_id = $id;
        $this->nama_biaya = $biaya->nama_biaya;
        $this->hapus = true;
    }

    public function batalHapus(){
        $this->hapus = false;
    }



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function delete($id)
    {
        $biaya = Biayapendaftaran::findOrFail($id);
        $biaya->delete(); //LALU HAPUS DATA
        $this->dispatchBrowserEvent(
            'alert', ['type' => 'success',  'message' => 'Saved']);
        $this->batalHapus();
    }
}
