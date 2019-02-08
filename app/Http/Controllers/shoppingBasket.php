<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class shoppingBasket extends Controller
{
    public function index()
    {
        $categories = Category::getAll();
        $basket = session('basket', false);
        $active = 'basket';

        $goods = [];

        if (false !== $basket){
            foreach ($basket as $item){
                $temp = [];
                $product = \App\Goods::find($item[0]);
                $temp[] = $product;
                $temp[] = $item[1];

                $goods[] = $temp;
            }
        }
        //dd($goods);

        return view('basket', ['categories' => $categories, 'active' => $active, 'goods' => $goods]);
    }

    public function store(Request $request)
    {
        $new = [(int)$request->get('id'), (int)$request->get('cnt')];
        $basket = session('basket');

        //Ищем $new в $data
        $flag = false;
        if ($basket){
            foreach($basket as &$item) {
                if ($item[0] == $new[0]) {
                    $item[1] = ($item[1] + $new[1]);
                    $flag = true;
                }
            }
        }
        if (false == $flag){
            $basket[] = $new;
        }

        session()->forget('basket');
        session()->put('basket', $basket);

        return Redirect::back();
    }

    public function delete(Request $request, $id)
    {
        //Удаляем из сессии переданный id
        $basket = session('basket');
        $id = (int)$id;

        if (false != $basket){
            $newBasket = [];

            foreach ($basket as $item){

                if ($item[0] == $id){
                    continue;
                }
                $newBasket[] = $item;
            }
        }

        session()->forget('basket');
        session()->put('basket', $newBasket);

        return Redirect::back();
    }

}
