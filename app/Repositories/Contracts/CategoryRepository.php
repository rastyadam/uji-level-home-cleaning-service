<?php
namespace App\Repositories;

use App\Models\Servicescategories as Category;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getAllCategories()
    {
        return Category::latest()->get();
    }
}