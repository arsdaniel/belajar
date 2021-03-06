<?php

namespace App\Http\Livewire\Santri;

use App\Models\User;
use Livewire\Component;

class Ubahdata extends Component
{
    public $nisn, $no_ijazah, $name, $nama_tengah, $nama_belakang;
    public $jenis_kelamin, $tempat_lahir, $alamat, $kabupaten, $sekolah_asal;
    public  $wni, $tgl_lahir, $sekolah_sekarang;

    public $provinsi, $provinsiId, $kecamatan;
    public $kotas=[];
    public $kecamatans=[];

    
    public function mount(){
       
        $this->edit();
    }

    public function render()
    {   
       
         
        $this->getKota();

        $this->getKecamatan();

        return view('livewire.santri.ubahdata');
    }

    protected $rules = [
        'name' => 'required',
        'nisn' => 'required',
        'no_ijazah' => 'required',
        'jenis_kelamin' => 'required',
        'tempat_lahir' => 'required',
        'tgl_lahir' => 'required|date_format:Y-m-d|before:2015-01-01|after:1995-01-01',
        'alamat' => 'required',
        'provinsiId' => 'required',
        'sekolah_asal' => 'required',
        'sekolah_sekarang' => 'required',
        'wni' => 'required',
];

    protected $messages = [
        
        
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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

    public function edit(){
        $id = auth()->user()->id;
       
        $User = User::find($id); 
        $this->id = $id;
        $this->nisn = $User->nisn;
        $this->no_ijazah = $User->no_ijazah;
        $this->name = $User->name;
        $this->nama_tengah = $User->nama_tengah;
        $this->nama_belakang = $User->nama_belakang;
        $this->jenis_kelamin = $User->jenis_kelamin;
        $this->tempat_lahir = $User->tempat_lahir;
        $this->tgl_lahir = $User->tgl_lahir;
        $this->alamat = $User->alamat;
        $this->provinsiId = $User->provinsiId;
        $this->sekolah_asal = $User->sekolah_asal;
        $this->sekolah_sekarang = $User->sekolah_sekarang;
        $this->wni = $User->wni;
       

       
    }



    public function store()
    {
        $this->validate([
            'name' => 'required',
            'nisn' => 'required',
            'no_ijazah' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date_format:Y-m-d|before:2015-01-01|after:1995-01-01',
            'alamat' => 'required',
            'provinsiId' => 'required',
            'sekolah_asal' => 'required',
            'sekolah_sekarang' => 'required',
            'wni' => 'required',
            
            
        ]);

        $id = auth()->user()->id;
        $User = User::find($id);
        
        $User->update([
            'nis' => '',
            'nisn'=> $this->nisn,
            'no_ijazah' => $this->no_ijazah,
            'name' => $this->name,
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
            'status' => '2',
            
        ]);


        session()->flash('success', 'Data berhasil Disimpan');
        return redirect()->route('santri.dashboard');

    }


}

    
   

