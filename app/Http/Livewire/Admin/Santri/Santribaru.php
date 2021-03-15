<?php

namespace App\Http\Livewire\Admin\Santri;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Santribaru extends Component
{
    use WithPagination;
    public $searchTerm;
    public $statussekolah;
    public $endDate;
    public $startDate;
    public $statusdaftar;
    public $data;
    public $perPage = 10;
    protected $paginationTheme = 'bootstrap';



    public function render()

    {


        $this->data['santris'] = $this->getSantri();

        return view('livewire.admin.santri.santribaru', $this->data);
    }

    public function getSantri()
    {
        $statusdaftar = $this->statusdaftar;
        $statussekolah = $this->statussekolah;
        $startDate = $this->startDate;
        $endDate = $this->endDate;
        $searchTerm = '%' . $this->searchTerm . '%';
        $status =1;
        $orderByFields = 'ASC';

        $santri = (new User())->with('roles');

        
        // if ($orderByFields) {
        //     foreach ($orderByFields as $field => $sort) {
        //         $santri = $santri->orderBy($field, $sort);
        //     }
        // }

        if (!empty($startDate) && !empty($endDate)) {
            $startDate = Carbon::parse($startDate);
            $endDate = Carbon::parse($endDate);

            $santri = $santri->whereBetween(DB::raw('DATE(created_at)'), [$startDate, $endDate]);
        }
         if (!empty($searchTerm)) {
            $santri = $santri->where(function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', $searchTerm)
                    ->orwhere('nama_belakang', 'LIKE', $searchTerm)
                    ->orwhere('no_pendaftaran', 'LIKE', $searchTerm);
            });
        }

        if (!empty($statusdaftar)) {
            $santri = $santri->where(function ($query) use ($statusdaftar) {
                $query->where('statusdaftar', 'LIKE', $statusdaftar);
            });
        }

        if (!empty($statussekolah)) {
            $santri = $santri->where(function ($query) use ($statussekolah) {
                $query->where('sekolah', 'LIKE', $statussekolah);
            });
        }

       

        if (!empty($status)) {
            $santri = $santri->where('status', $status);
        }
        
        if ($this->perPage) {
            return $santri->paginate($this->perPage);
        }

        return $santri->get();
    }

    public function updatingSearchTerm()
    {
        $this->resetPage();
    }
}
