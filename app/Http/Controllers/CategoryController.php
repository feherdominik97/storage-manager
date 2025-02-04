<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class CategoryController extends Controller
{
    private string $storage_type;

    public function  __construct()
    {
        $this->storage_type = config('app.storage_type', '');
    }

    public function index(): Factory|View|Application
    {
        $categories = Category::query()->withCount(['products' => function ($query) {
            $query->where('storage_type', $this->storage_type);
        }])->get()->toArray();

        return view('home', compact('categories'));
    }


    public function show(Category $category): Factory|View|Application
    {
        $products = $category->products()
            ->where('storage_type', $this->storage_type)
            ->get()
            ->toArray();

        return view('category', compact('category', 'products'));
    }
}
