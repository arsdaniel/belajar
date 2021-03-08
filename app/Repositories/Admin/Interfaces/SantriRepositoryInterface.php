<?php

namespace App\Repositories\Admin\Interfaces;

use App\Models\User;

interface SantriRepositoryInterface
{
    public function findAll($options = []);
    public function findById($id);
    public function create($params = []);
    public function update(User $user, $params = []);
    public function delete($id, $permanentDelete = false);
    public function getStatuses();
}
