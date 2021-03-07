<?php

namespace App\Http\Livewire\Admin\Santri;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
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
                        $query->where('status', 1 )
                        ->orwhere('status', 2 )
                        ->orwhere('status', 3 );})
                        ->orderBy('status', 'DESC')
                        ->paginate(10);  
                     
                        
        return view('livewire.admin.santri.index', [
            'santris' => $santri
        ]);
    }

    public function updatingSearchTerm(){
        $this->resetPage();
    }
}
