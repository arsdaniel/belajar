<?php

namespace App\Http\Livewire\Admin\Santri;

use App\Models\Biayapendaftaran;
use App\Models\User;
use Livewire\Component;
use Spatie\MediaLibrary\Support\MediaStream;

class Berkas extends Component
{

    public $user_id, $name, $konfirmasi, $statusDaftar;
    public $doc=[];

    public function mount($user){
        $this->user_id = $user->id; 
        $this->name = $user->name; 
        $this->doc = $user->Doc;
        $this->statusDaftar = $user->statusdaftar;
    }


    public function render()
    {   
        dd($this->pembayaran());
        return view('livewire.admin.santri.berkas');
    }

    public function savekonfirmasi(){
        $User = User::find($this->user_id);
        if ($this->konfirmasi == '1'){
            $User->update([
                'status' => '3',
            ]);
        }else
        {
            $User->update([
                'status' => '4',]);
        }

    }

    public function getBayar(){
        $Biayapendaftaran = Biayapendaftaran::where('tahun_ajaran', '2021')
                            ->where('sekolah', '1')
                            ->get();
        
        return $Biayapendaftaran;

    }

    public function pembayaran(){
        $harga_daftar = $this->getBayar();
        
    }

   
}
