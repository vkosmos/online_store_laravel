<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
        return $this->belongsToMany(
            Order::class,
            'goods_order_connections',
            'goods_id',
            'order_id'
        );
    }

    public static function getAll()
    {
        return static::paginate(9);
        //return static::all();
    }

    public function getImage()
    {
        if (null == $this->image){
            //dd('here');
            return asset('/goods_images/no-image.jpg');
        }
        return '/goods_images/' .  $this->image;
    }
}
