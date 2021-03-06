<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.index')->layout('layouts.dashboard.app');
    }
}
