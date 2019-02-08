<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class Contacts extends Controller
{
    public function __invoke()
    {
        $categories = Category::getAll();
        $active = 'contacts';

        return view('contacts', ['categories' => $categories, 'active' => $active]);
    }
}
