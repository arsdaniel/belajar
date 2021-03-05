<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Illuminate\Http\Request;


//use Modules\Blog\Http\Requests\Admin\CategoryRequest;
use App\Repositories\Admin\Interfaces\CategoryRepositoryInterface;

class Category extends Component
{

    private $categoryRepository;
    public $perPage= '10';
    public $data;

    public function __construct(CategoryRepositoryInterface $categoryRepository) //phpcs:ignore
    {
        parent::__construct();

        $this->categoryRepository = $categoryRepository;
    }

    public function render(Request $request)
    {

        $this->data['categories'] = $this->getCategories($request);
        $this->data['nestedCategories'] = $this->categoryRepository->findNestedList();
        return view('livewire.blog.category',$this->data);
    }

    private function getCategories($request = null)
    {
        $params = !empty($request) ? $request->all() : [];

        $options = [
            'per_page' => $this->perPage,
            'order' => [
                'name' => 'asc',
            ],
            'filter' => $params,
        ];

        return $this->categoryRepository->findAll($options);
    }
}
