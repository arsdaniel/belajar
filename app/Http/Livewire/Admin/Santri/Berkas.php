<?php

namespace App\Http\Livewire\Admin\Santri;

use Livewire\Component;

class Berkas extends Component
{

    public $user_id, $name, $konfirmasi;

    public function mount($user){
        $this->user_id = $user->id; 
        $this->name = $user->name; 
    }


    public function render()
    {
        return view('livewire.admin.santri.berkas');
    }
}
