<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function __invoke()
    {
        $categories = Category::where('parent_id', null)->orderby('name')->get();

        //Получаем коллекцию со всеми категориями. 2 уровня вложенности
        $categories->each(function ($item, $key) {
            $data = Category::where('parent_id', $item->id)->orderby('name')->get();
            $item->childs = $data;
        });

        $active = 'home';

        return view('index', ['categories' => $categories, 'active' => $active]);
    }

}
