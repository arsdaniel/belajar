<?php

namespace App\Repositories\Admin;

use App\Repositories\Admin\Interfaces\TagRepositoryInterface;
use App\Models\Tag;

class TagRepository implements TagRepositoryInterface
{
    public function findList()
    {
        return Tag::orderBy('name', 'ASC')->pluck('name', 'id');
    }

    public function findById($tagId)
    {
    }
}
