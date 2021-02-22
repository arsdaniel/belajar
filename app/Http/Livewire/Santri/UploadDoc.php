<?php

namespace App\Http\Livewire\Santri;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadDoc extends Component
{

    public $kk, $ijazah ,$spSantri, $spWsantri, $spiQabul;
    use WithFileUploads;

    public function render()
    {
        return view('livewire.santri.upload-doc');
    }

    public function save()
    {
        $this->validate([
            'kk' => 'image|max:1024', // 1MB Max
        ]);

        $this->kk->storeAs('kk', 'kk');
    }
}
