<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;
use Illuminate\Http\Request;


//use Modules\Blog\Http\Requests\Admin\CategoryRequest;
use App\Repositories\Admin\Interfaces\CategoryRepositoryInterface;

class Category extends Component
{

    private $categoryRepository;
    public $perPage= '10';
    public $data;
    

    public function mount(CategoryRepositoryInterface $categoryRepository) //phpcs:ignore
    {
       

        $this->data['currentAdminMenu'] = 'category';
        $this->categoryRepository = $categoryRepository;
    }

    public function render(Request $request)
    {

        $this->data['categories'] = $this->getCategories($request);
        $this->data['nestedCategories'] = $this->categoryRepository->findNestedList();
        return view('livewire.admin.blog.category',$this->data);
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

