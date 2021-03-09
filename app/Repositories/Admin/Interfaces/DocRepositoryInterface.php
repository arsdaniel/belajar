<?php

namespace App\Repositories\Admin\Interfaces;

interface DocRepositoryInterface
{
    public function findList();
    public function findById($DocId);
}
