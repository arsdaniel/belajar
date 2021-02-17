<?php

namespace App\Http\Livewire\Santri;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Index extends Component
{
    public $response;
    public function render()
    {
        $response = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
        $data = $response->json( 'provinsi');
        //dd($data);
        return view('livewire.santri.index',compact('data'));
    }
}
