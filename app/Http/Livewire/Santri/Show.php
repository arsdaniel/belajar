<?php

namespace App\Http\Livewire\Santri;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use PhpParser\Node\Expr\FuncCall;

class Show extends Component
{
    public $searchTerm;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        
        $searchTerm ='%'.$this->searchTerm . '%';
        $santri = User::where(function ($query) use ($searchTerm){
                        $query->where ('name', 'LIKE', $searchTerm)
                        ->orwhere('nama_belakang', 'LIKE', $searchTerm);
                        })->where(function ($query){
                        $query->where('status', 1 )->orwhere('status', 2 );})
                        ->orderBy('id', 'DESC')
                        ->paginate(10);  
                     
                        
        return view('livewire.santri.show', [
            'santris' => $santri
        ])->layout('layouts.dashboard.app');
    }

    public function updatingSearchTerm(){
        $this->resetPage();
    }
}
