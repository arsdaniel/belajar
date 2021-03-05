<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;

use Illuminate\Http\Request;

use App\Http\Controllers\BlogController;
use App\Http\Requests\PostRequest;

use App\Repositories\Admin\Interfaces\PostRepositoryInterface;
use App\Repositories\Admin\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Admin\Interfaces\TagRepositoryInterface;

class Post extends Component
{
    private $postRepository;
    private $categoryRepository;
    private $tagRepository;

    public function __construct(PostRepositoryInterface $postRepository, CategoryRepositoryInterface $categoryRepository, TagRepositoryInterface $tagRepository) //phpcs:ignore
    {
        parent::__construct();

        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
        $this->tagRepository = $tagRepository;

        $this->data['categories'] = $this->categoryRepository->findList();
        $this->data['statuses'] = $this->postRepository->getStatuses();
        $this->data['viewTrash'] = false;
    }
    public function render()
    {
        
        return view('livewire.blog.post');
    }
}
