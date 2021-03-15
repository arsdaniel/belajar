<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Category as ModelsCategory;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class Category extends Component
{

    public $perPage= '10';
    public $searchTerm;
    public $data;
    public $isModal = 0;
    public $parentId, $name, $categoriesId;
    

    

    public function render()
    {

        $this->data['categories'] = $this->getCategories();
        $this->data['nestedCategories'] = $this->findNestedList();

            return view('livewire.admin.blog.category',$this->data);
    }

    private function getCategories()
    {
        $perPage = $this->perPage;
        $searchTerm = $this->searchTerm;
        // $orderByFields = $options['order'] ?? [];

        $categories = (new ModelsCategory())->with('parent');

        // if ($orderByFields) {
        //     foreach ($orderByFields as $field => $sort) {
        //         $categories = $categories->orderBy($field, $sort);
        //     }
        // }

        if (!empty($searchTerm)) {
            $categories = $categories->where(function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', "%{$searchTerm}%");
            });
        }

        if ($perPage) {
            return $categories->paginate($perPage);
        }
        
        return $categories->get();
    }

    public function findNestedList($exceptCategoryId = null)
    {
        $categories = ModelsCategory::with('children')
            ->whereNull('parent_id')
            ->where('id', '!=', $exceptCategoryId)
            ->orderBy('name', 'asc')->get();

        $nestedCategories = [];
        foreach ($categories as $category) {
            $nestedCategories[$category->id] = $category->name;
            $nestedCategories = array_merge($nestedCategories, $this->getChildren($category, 0, $exceptCategoryId));
        }

        return $nestedCategories;
    }

    private function getChildren($category, $level = 0, $exceptCategoryId = null)
    {
        $nestedCategories = [];
        if ($category->children->count()) {
            $level++;
            foreach ($category->children as $child) {
                if ($child->id != $exceptCategoryId) {
                    $nestedCategories[$child->id] = str_repeat('-', $level * 2) . ' ' . $child->name;
                    $nestedCategories = array_merge($nestedCategories, $this->getChildren($child, $level));
                }
            }
        }
       
        return $nestedCategories;
    }

    public function create(){
        $this->resetFields();
        $this->openModal();

    }

    public function closeModal(){
        $this->isModal = false;

    }

    public function openModal(){
        $this->isModal = true;

    }

    public function resetFields(){
        $this->name = '';
        $this->categoriesId= '';
    }

    public function store(){
        $this->validate([
            'name' => 'required',
        ]);
        $slug = isset($this->name) ? Str::slug('name') : null;

        ModelsCategory::updateOrCreate(['id' => $this->categoriesId],[
            'parent_id' => $this->parentId,
            'name' => $this->name,
            'slug' => $slug,
            
        ]);

        $this->closeModal();
        $this->resetFields();
    }

}

