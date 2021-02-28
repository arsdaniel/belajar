<?php

namespace App\Http\Livewire\Santri;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $searchTerm;
    use WithPagination;

    
    public function render()
    {
       
        $status = Auth::user()->status->status;
        
        $searchTerm ='%'.$this->searchTerm . '%';
        $santri = User::where('name', 'LIKE', $searchTerm)->orderBy('id', 'DESC')->paginate(10);    
        return view('livewire.santri.index', [
            'santris' => $santri,
            'status' => $status
        ]);
    }
}
