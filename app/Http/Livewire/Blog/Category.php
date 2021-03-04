<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;

class Category extends Component
{

    public $data;
    public function render(Request $request)
    {

        $this->data['categories'] = $this->getCategories($request);
        $this->data['nestedCategories'] = $this->categoryRepository->findNestedList();
        return view('livewire.blog.category');
    }
}
