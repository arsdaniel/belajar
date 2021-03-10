<?php

namespace App\Http\Livewire\Admin\Santri;

use App\Models\User;
use App\Repositories\Admin\Interfaces\SantriRepositoryInterface;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Santribaru extends Component
{
    public $searchTerm;
    use WithPagination;
    private $SantriRepository;
    public $data;
    public $perPage = 10;
    public $start_date, $endDate;
    protected $paginationTheme = 'bootstrap';

    public function mount(SantriRepositoryInterface $SantriRepository) //phpcs:ignore
    {
     

        $this->SantriRepository = $SantriRepository;
    }

    public function render()
    
    {
        
       
        $this->data['santris'] = $this->getSantri();
                     
        return view('livewire.admin.santri.santribaru', $this->data);
    }

    private function getSantri(){
        $params = [
            'start_date' => $this->start_date, 
            'end_date' => $this->endDate,
            'searchTerm' =>$this->searchTerm];

        $options = [
            'per_page' => $this->perPage,
            'order' => [
                'created_at' => 'desc',
            ],
            'filter' => $params,
        ];

        if (!empty($params['start_date']) && !empty($params['end_date'])) {
            $startDate = Carbon::parse($params['start_date']);
            $endDate = Carbon::parse($params['end_date']);

            if ($endDate < $startDate) {
                return redirect('admin/users')->with('error', __('general.invalid_date_range'));
            }
        }


        return $this->SantriRepository->findAll($options);

    }

    public function updatingSearchTerm(){
        $this->resetPage();
    }
}
