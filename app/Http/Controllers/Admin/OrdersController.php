<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        //var_dump($orders[0]->users );
        //var_dump( User::where('id', $orders[0]->user_id)->first() );

        return view('admin.orders.index', ['orders' => $orders]);
    }

    public function delete()
    {
        dd('delete');
    }
}
