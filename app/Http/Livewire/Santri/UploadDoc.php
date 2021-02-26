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
            'kk' => 'file|mimes:pdf|max:1024', // 1MB Max
            'ijazah' => 'file|mimes:pdf|max:1024', // 1MB Max
            'spsantri' => 'file|mimes:pdf|max:1024', // 1MB Max
            'spWsantri' => 'file|mimes:pdf|max:1024', // 1MB Max
            'spiQabul' => 'file|mimes:pdf|max:1024', // 1MB Max
        ]);

        $this->kk->storeAs('kk', 'kk');
    }
}
