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
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        
        $searchTerm ='%'.$this->searchTerm . '%';
        $santri = User::whereHas('status', function($q) use ($searchTerm){
                        $q->where('name', 'LIKE', $searchTerm);
                        })
                        ->with('status', function($q){
                            $q->where('status', '==','10');
                        })
                        ->orderBy('id', 'DESC')
                        ->paginate(10);  
                        dd($santri);
                        
        return view('livewire.santri.show', [
            'santris' => $santri
        ])->layout('layouts.dashboard.dashboard');
    }
}
