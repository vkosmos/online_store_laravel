<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Static_;

class Category extends Model
{

    public function goods()
    {
        return $this->hasMany(Goods::class);
    }

    public static function getAll()
    {
        $categories = static::where('parent_id', null)->orderby('name')->get();

        //Получаем коллекцию со всеми категориями. 2 уровня вложенности
        $categories->each(function ($item, $key) {
            $data = static::where('parent_id', $item->id)->orderby('name')->get();
            $item->childs = $data;
        });

        return $categories;
    }

    public static function getGoods($link)
    {
        $category = static::where('link', $link)->first();

        if ($category->parent_id === null){//Это корневой элемент, есть вложенные

            //Строим список вложенных подразделов
            $childCats = static::where('parent_id', $category->id)->get();

            $catIds = collect();
            foreach ($childCats as $cat){
                $catIds->push($cat->id);
            }
            $goods = Goods::whereIn('category_id', $catIds)->paginate(9);

        }else{//Это лист (у нас сейчас работает только 2-х уровневый каталог)
            $goods = $category->goods()->orderby('name')->paginate(9);
        }

        return $goods;
    }
}
