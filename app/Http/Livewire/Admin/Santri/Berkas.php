<?php

namespace App\Http\Livewire\Admin\Santri;

use App\Models\User;
use Livewire\Component;
use Spatie\MediaLibrary\Support\MediaStream;

class Berkas extends Component
{

    public $user_id, $name, $konfirmasi;
    public $doc=[];

    public function mount($user){
        $this->user_id = $user->id; 
        $this->name = $user->name; 
        $this->doc = $user->Doc;
    }


    public function render()
    {   
        return view('livewire.admin.santri.berkas');
    }

    public function savekonfirmasi(){
        $User = User::find($this->user_id);
        if ($this->konfirmasi == '1'){
            $User->update([
                'status' => '3',
            ]);
        }else
        {
            $User->update([
                'status' => '4',]);
        }

    }

   
}
