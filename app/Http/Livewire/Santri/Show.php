<?php

namespace App\Http\Livewire\Santri;

use App\Models\User;
use App\Models\BiodataSantri;
use Livewire\Component;
use Livewire\WithPagination;


class Show extends Component
{
    public $searchTerm;
    use WithPagination;
    public function render()
    {
        
        $searchTerm ='%'.$this->searchTerm . '%';
        $santri = User::where('name', 'LIKE', $searchTerm)->orderBy('id', 'DESC')->paginate(10);    
        return view('livewire.santri.show', [
            'santris' => $santri
        ]);
    }
}
