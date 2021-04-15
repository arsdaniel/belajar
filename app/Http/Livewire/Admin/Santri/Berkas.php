<?php

namespace App\Http\Livewire\Admin\Santri;

use App\Models\Biayapendaftaran;
use App\Models\Detailpembayaran;
use App\Models\Pembayaran;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Spatie\MediaLibrary\Support\MediaStream;

class Berkas extends Component
{

    public $user_id, $name, $konfirmasi, $statusDaftar;
    public $doc = [];

    public function mount($user)
    {
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->doc = $user->Doc;
        $this->statusDaftar = $user->statusdaftar;
    }


    public function render()
    {
        return view('livewire.admin.santri.berkas');
    }

    public function savekonfirmasi()
    {
        $User = User::find($this->user_id);
        if ($this->konfirmasi == '1') {
            $this->getBayar();

            $User->update([
                'status' => '3',
            ]);
        } else {
            $User->update([
                'status' => '4',
            ]);
        }
    }

    public function getBayar()
    {
        $Biayapendaftaran = Biayapendaftaran::where('tahun_ajaran', '2021')
            ->where('sekolah', '1')
            ->get();

        
        DB::beginTransaction();

        try
        {
            $pembayaran = new Pembayaran;
            $pembayaran->no_pembayaran = getnoPembayaran();
            $pembayaran->user_id = $this->user_id;
            $pembayaran->total_bayar = '0';
            $pembayaran->jumlah_dibayar = '0';
            $pembayaran->save();

            foreach ($Biayapendaftaran as $a) {
                Detailpembayaran::create([
                    'pembayaran_id' => $pembayaran->id,
                    'nama_biaya' => $a['nama_biaya'],
                    'harga' => $a['harga'],

                ]);
            }
            DB::commit();
        }
        catch (Exception $e)
        {
            DB::rollBack();
        }

    }

    
}
