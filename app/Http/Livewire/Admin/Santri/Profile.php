<?php

namespace App\Http\Livewire\Admin\Santri;

use Livewire\Component;

class Profile extends Component
{
    public $name, $email, $nama_tengah, $nama_belakang, $alamat ;
    
    public function mount($user)
    {
        $this->name = $user->name;
        $this->nama_tengah = $user->nama_tengah;
        $this->nama_belakang = $user->nama_belakang;
        $this->alamat = $user->alamat;
        $this->email = $user->email;
    }
    public function render()
    {

        return view('livewire.admin.santri.profile');
    }
}
