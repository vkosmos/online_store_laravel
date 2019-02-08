<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['user_id', 'ordered_ar'];

    public function goods()
    {
        return $this->belongsToMany(
            Goods::class,
            'goods_order_connections',
            'order_id',
            'goods_id'
        );
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function setGoods($ids)
    {
        if (null == $ids)
        {
            return false;
        }
        $this->goods()->sync($ids);
        $this->save();
    }

    public function add($fields)
    {
        $order = new static;
        $order->fill($fields);
//        $order->user_id = 0;
        $order->save();
        return $order;
    }
}
