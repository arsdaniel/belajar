<?php

namespace App\Repositories\Admin;

use App\Repositories\Admin\Interfaces\SantriRepositoryInterface;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SantriRepository implements SantriRepositoryInterface
{
    public function findAll($options = []){
        $perPage = $options['per_page'] ?? null;
        $orderByFields = $options['order'] ?? [];

        $users = (new User())->with('roles');

        if ($orderByFields) {
            foreach ($orderByFields as $field => $sort) {
                $users = $users->orderBy($field, $sort);
            }
        }

        if (!empty($options['filter']['start_date']) && !empty($options['filter']['end_date'])) {
            $startDate = Carbon::parse($options['filter']['start_date']);
            $endDate = Carbon::parse($options['filter']['end_date']);

            $users = $users->whereBetween(DB::raw('DATE(created_at)'), [$startDate, $endDate]);
        }

        if (!empty($options['filter']['searchTerm'])) {
            $users = $users->where('name', 'LIKE', "%{$options['filter']['searchTerm']}%")
                ->orWhere('email', 'LIKE', "%{$options['filter']['searchTerm']}%");
                
        }

        if ($perPage) {
            return $users->paginate($perPage);
        }
        
        return $users->get();


    }

    public function  findById($id){

    }

    public function create($params = []){

    }

    public function update(User $user, $params = []){

    }

    public function delete($id, $permanentDelete = false){

    }

    public function getStatuses(){

    }


    
    
}
