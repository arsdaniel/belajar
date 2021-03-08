<?php

namespace App\Http\Livewire\Admin\Santri;

use Livewire\Component;

class Profile extends Component
{
    public $name, $email, $nama_tengah, $nama_belakang, $alamat, $status, $no_pendaftaran, $nisn, $sekolah_asal;
    
    public function mount($user)
    {
        $this->name = $user->name;
        $this->nama_tengah = $user->nama_tengah;
        $this->nama_belakang = $user->nama_belakang;
        $this->alamat = $user->alamat;
        $this->email = $user->email;
        $this->status = $user->status;
        $this->nisn = $user->nisn;
        $this->sekolah_asal = $user->sekolah_asal;
        $this->no_pendaftaran = $user->no_pendaftaran;
    }
    public function render()
    {

        return view('livewire.admin.santri.profile');
    }

    
}
