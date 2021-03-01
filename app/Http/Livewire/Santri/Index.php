<?php

namespace App\Http\Livewire\Santri;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $user_id;
    public $searchTerm;
    use WithPagination;

    
    public function render()
    {
       
        $status = Auth::user()->status->status;
        
       
        return view('livewire.santri.index', [
        
            'status' => $status
        ]);
    }

    public function edit()
    {
        // $user_id = Auth::user()->id;
        // $User = User::findOrFail($id);
        // $this->user_id = $user_id;
        
    }
}
