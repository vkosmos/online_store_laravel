<?php

namespace App\Http\Controllers;

use App\Goods_order_connection;
use Illuminate\Http\Request;

class Order extends Controller
{
    public function store()
    {
        $order = new \App\Order();
        $order->user_id = Auth()->user()->id;
        $order->ordered_at = date("Y-m-d H:i:s");
        $order->save();

        $goods = session('basket');

        foreach ($goods as $item){
            $temp = new Goods_order_connection();
            $temp->order_id = $order->id;
            $temp->goods_id = $item[0];
            $temp->count = $item[1];
            $temp->save();
        }

        return redirect(route('basket.index'));
    }
}
