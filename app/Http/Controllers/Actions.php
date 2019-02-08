<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class Actions extends Controller
{
    public function __invoke(){
        $categories = Category::getAll();
        $active = 'actions';

        return view('actions', ['categories' => $categories, 'active' => $active]);
    }
}
