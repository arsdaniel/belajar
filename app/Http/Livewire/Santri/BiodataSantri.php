<?php

namespace App\Http\Livewire\Santri;

use App\Models\BiodataSantri as ModelsBiodataSantri;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class BiodataSantri extends Component
{
    public $no_pendaftaran, $nis, $nisn, $no_ijazah, $nama_depan, $nama_tengah, $nama_belakang;
    public $jenis_kelamin, $tempat_lahir, $alamat, $kabupaten, $kode_pos, $sekolah_asal;
    public $foto, $wni, $status,$tgl_lahir, $sekolah_sekarang;
    public $updateMode = false;
    public $provinsi;
    public $kotas=[];

    private function mount()
    {
        
    }
    public function store()
    {
        $id = auth()->user()->id;
        ModelsBiodataSantri::create([
            'user_id' => $id,
            'no_pendaftaran'=> 'asdsdff',
            'nis'=> $this->nis,
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
            'provinsi' => $this->provinsi,
            'kode_pos' => $this->kode_pos,
            'sekolah_asal' => $this->sekolah_asal,
            'sekolah_sekarang' => $this->sekolah_sekarang,
            'wni' => $this->wni,
            'status' => '1',
            
        ]);
        $this->resetInput();
    }

  

    

    public function render()
    {   
        $getkota = Http::get('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='. $this->provinsi);
        $ambilkota =  $getkota->json('kota_kabupaten');
      
        
        
        if(!empty($this->provinsi)) {
            $this->kotas = $ambilkota;
       
         
        }
        $respo = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
        $listprovinsi = $respo->json('provinsi');
        
        return view('livewire.santri.biodata-santri', compact('listprovinsi'));
    }

    
}
