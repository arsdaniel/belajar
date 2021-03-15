<?php

namespace App\Http\Livewire\Admin\Santri;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $searchTerm;
    public $paginate = '10';

    public $statussekolah;
    public $perPage = 10;
    public $data;
    public $jenisKelamin;
    public $status = 2;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';



    public function render()
    {

        $this->data['santris'] = $this->getSantri();


        return view('livewire.admin.santri.index', $this->data);
    }

    public function getSantri()
    {
        $statussekolah = $this->statussekolah;
        $searchTerm = '%' . $this->searchTerm . '%';
        $jenisKelamin = $this->jenisKelamin;
        $status = $this->status;
        $orderByFields = 'ASC';

        $santri = (new User())->with('roles');


        // if ($orderByFields) {
        //     foreach ($orderByFields as $field => $sort) {
        //         $santri = $santri->orderBy($field, $sort);
        //     }
        // }


        if (!empty($searchTerm)) {
            $santri = $santri->where(function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', $searchTerm)
                    ->orwhere('nama_belakang', 'LIKE', $searchTerm)
                    ->orwhere('no_pendaftaran', 'LIKE', $searchTerm);
            });
        }

        if (!empty($jenisKelamin)) {
            $santri = $santri->where(function ($query) use ($jenisKelamin) {
                $query->where('jenis_kelamin', 'LIKE', $jenisKelamin);
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

    public function resetSearch(){
        $this->searchTerm ='';
        $this->jenisKelamin ='';
        $this->statussekolah ='';
    }
 
    public function updatingsearchTerm()
    {
        $this->resetPage();
    }
}
