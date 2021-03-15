<?php

namespace App\Http\Livewire\Santri;

use App\Models\User;
use App\Repositories\Admin\Interfaces\SantriRepositoryInterface;
use Livewire\Component;
use Livewire\WithPagination;
use PhpParser\Node\Expr\FuncCall;

class Show extends Component
{
    private $SantriRepository;
    public $searchTerm;
    public $paginate = '10';
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount(SantriRepositoryInterface $SantriRepository) //phpcs:ignore
    {
     
        $this->SantriRepository = $SantriRepository;

    }
    public function render()
    {
        
        // $searchTerm ='%'.$this->searchTerm . '%';
        // $santri = User::where(function ($query) use ($searchTerm){
        //                 $query->where ('name', 'LIKE', $searchTerm)
        //                 ->orwhere('nama_belakang', 'LIKE', $searchTerm);
        //                 })->where(function ($query){
        //                 $query->where('status', 1 )
        //                 ->orwhere('status', 2 )
        //                 ->orwhere('status', 3 );})
        //                 ->orderBy('status', 'DESC')
        //                 ->paginate(10);  
        $options = ['searchTerm' => $this->searchTerm, 'paginate' => $this->paginate];
        $santri = $this->SantriRepository->findById($options);
                        
        return view('livewire.santri.show', [
            'santris' => $santri
        ])->layout('layouts.dashboard.app');
    }

    public function updatingSearchTerm(){
        $this->resetPage();
    }
}
