<?php

namespace App\Http\Livewire\Santri;

use App\Models\BiodataSantri as ModelsBiodataSantri;
use App\Models\StatusUser;
use Livewire\Component;


class BiodataSantri extends Component
{
    public $nisn, $no_ijazah, $nama_depan, $nama_tengah, $nama_belakang;
    public $jenis_kelamin, $tempat_lahir, $alamat, $kabupaten, $sekolah_asal;
    public  $wni, $tgl_lahir, $sekolah_sekarang;

    public $provinsi, $provinsiId, $kecamatan;
    public $kotas=[];
    public $kecamatans=[];

    

    public function render()
    {   
       
        $this->getKota();
        $this->getKecamatan();
 
        return view('livewire.santri.biodata-santri');
    }
    public function getKota(){
        
         if(!empty($this->provinsiId)) {
            $provinsi = $this->provinsiId;
            
            $this->kotas = getKota($provinsi);
        }

    }

    public function getKecamatan(){
        
        if(!empty($this->kabupaten)) {
           $kabupaten = $this->kabupaten;
          
           
           $this->kecamatans = getKecamatan($kabupaten);
       }

   }

   

    public function store()
    {
        $this->validate([
            'nama_depan' => 'required',
            'nisn' => 'required',
            'no_ijazah' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'provinsiId' => 'required',
            'sekolah_asal' => 'required',
            'sekolah_sekarang' => 'required',
            'wni' => 'required',
            
        ]);

        $id = auth()->user()->id;
        $idStatus = auth()->user()->status->id;
        $no_pendaftaran = getnoPendaftaran();
       
        ModelsBiodataSantri::create([
            'user_id' => $id,
            'no_pendaftaran'=> $no_pendaftaran,
            'nis' => '',
            'nisn'=> $this->nisn,
            'no_ijazah' => $this->no_ijazah,
            'nama_depan' => $this->nama_depan,
            'nama_tengah' => $this->nama_tengah,
            'nama_belakang' => $this->nama_belakang,
            'jenis_kelamin' => $this->jenis_kelamin,
            'tempat_lahir'=> $this->tempat_lahir,
            'tgl_lahir' => $this->tgl_lahir,
            'alamat' => $this->alamat,
            'kabupaten' => $this->kabupaten,
            'provinsi' => $this->provinsiId,
            'kode_pos' => '',
            'sekolah_asal' => $this->sekolah_asal,
            'sekolah_sekarang' => $this->sekolah_sekarang,
            'foto' => '',
            'wni' => $this->wni,
            'status' => '1',
            
        ]);

        
        $statusUser =  StatusUser::find($idStatus);
        
        $statusUser->update([
            'status' => '2'
        ]);


        session()->flash('success', 'Data berhasil Disimpan');
        return redirect()->route('santri.dashboard');

    }

  

    

    
    
}
