<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class Goods extends Controller
{
    public function __invoke($id)
    {
        $categories = Category::getAll();
        $product = \App\Goods::find($id);
        $active = 'catalog';

        return view('goods', ['categories' => $categories, 'product' => $product , 'active' => $active]);
    }
}
