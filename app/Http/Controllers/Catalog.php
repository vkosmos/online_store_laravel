<?php

namespace App\Http\Controllers;

use App\Category;
use App\Goods;
use Illuminate\Http\Request;

class Catalog extends Controller
{
    public function index()
    {
        $breadCrumbs = 'Каталог';
        $categories = Category::getAll();
        $goods = Goods::getAll();//Возвращает с пагинацией

        $active = 'catalog';

        return view('catalog', ['categories' => $categories, 'goods' => $goods, 'breadCrumbs' => $breadCrumbs, 'active' => $active]);
    }

    public function childs($link)
    {
//        $parentCat = static::where('id', $category->parent_id)->first();
//        $breadCrumbs .= ' / ' . $parentCat->name;
//        $breadCrumbs .= ' / ' . $category->name;

        $breadCrumbs = 'Каталог';
        $categories = Category::getAll();
        $goods = Category::getGoods($link);

        $active = 'catalog';

        return view('catalog', ['categories' => $categories, 'goods' => $goods, 'breadCrumbs' => $breadCrumbs, 'active' => $active]);
    }

}
