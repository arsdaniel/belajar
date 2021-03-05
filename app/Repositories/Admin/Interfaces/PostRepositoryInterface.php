<?php

namespace App\Repositories\Admin\Interfaces;

use App\Models\Post;

interface PostRepositoryInterface
{
    public function findAll($options = []);
    public function findAllInTrash($options = []);
    public function findById($id);
    public function create($params = []);
    public function update(Post $post, $params = []);
    public function delete($id, $permanentDelete = false);
    public function restore($id);
    public function getStatuses();
}
