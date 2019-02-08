<?php

namespace App\Http\Controllers;

use App\Category;
use App\Goods;
use App\Order;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function test()
    {
//        $cat = Category::find(10);
//        $goods = $cat->goods;
//        dd($goods);

//        $goods = Goods::find(1);
//        $cat = $goods->category;
//        dd($cat);

//        $order = Order::find(3);
//        $goods = $order->goods;
//        dd($goods);

        $goods = Goods::find(27);
        $orders = $goods->orders;
        dd($orders);

    }
}
