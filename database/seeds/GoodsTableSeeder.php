<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Компьютеры

        $id = DB::table('categories')->where('name', '=', 'Компьютеры')->select('id')->get();
        $id = $id[0]->id;

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Компьютер 1',
                'description' => 'Отличный офисный компьютер',
                'image' => null,
                'price' => 17500,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Компьютер 2',
                'description' => 'Так себе компьютер',
                'image' => null,
                'price' => 22500,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Компьютер 3',
                'description' => 'Игровой компьютер',
                'image' => null,
                'price' => 31000,
                'amount' => 'шт'
            ]
        );

        //Смартфоны

        $id = DB::table('categories')->where('name', '=', 'Смартфоны')->select('id')->get();
        $id = $id[0]->id;

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Смартфон 1',
                'description' => 'Недорогой смартфон',
                'image' => null,
                'price' => 4000,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Смартфон 2',
                'description' => 'Средний смартфон',
                'image' => null,
                'price' => 11000,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Смартфон 3',
                'description' => 'Хороший смартфон',
                'image' => null,
                'price' => 22000,
                'amount' => 'шт'
            ]
        );

        //Стиральные машины

        $id = DB::table('categories')->where('name', '=', 'Стиральные машины')->select('id')->get();
        $id = $id[0]->id;

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Стиральная машина 1',
                'description' => 'Стиральная машина',
                'image' => null,
                'price' => 12500,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Стиральная машина 2',
                'description' => 'Стиральная машина так себе',
                'image' => null,
                'price' => 17900,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Стиральная машина 3',
                'description' => 'Хорошая Стиральная машина',
                'image' => null,
                'price' => 4740,
                'amount' => 'шт'
            ]
        );

        //Пылесосы

        $id = DB::table('categories')->where('name', '=', 'Пылесосы')->select('id')->get();
        $id = $id[0]->id;

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Пылесос 1',
                'description' => 'Недорогой Пылесос',
                'image' => null,
                'price' => 2500,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Пылесос 2',
                'description' => 'Средний Пылесос',
                'image' => null,
                'price' => 6900,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Пылесос 3',
                'description' => 'Хороший Пылесос',
                'image' => null,
                'price' => 1340,
                'amount' => 'шт'
            ]
        );

        //Телевизоры

        $id = DB::table('categories')->where('name', '=', 'Телевизоры')->select('id')->get();
        $id = $id[0]->id;

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Телевизор 1',
                'description' => 'Недорогой телевизор',
                'image' => null,
                'price' => 7700,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Телевизор 2',
                'description' => 'Средний Телевизор',
                'image' => null,
                'price' => 31500,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Телевизор 3',
                'description' => 'Хороший Телевизор',
                'image' => null,
                'price' => 54300,
                'amount' => 'шт'
            ]
        );

        //Перфораторы

        $id = DB::table('categories')->where('name', '=', 'Перфораторы')->select('id')->get();
        $id = $id[0]->id;

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Перфоратор 1',
                'description' => 'Недорогой Перфоратор',
                'image' => null,
                'price' => 3400,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Перфоратор 2',
                'description' => 'Средний Перфоратор',
                'image' => null,
                'price' => 9100,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Перфоратор 3',
                'description' => 'Хороший Перфоратор',
                'image' => null,
                'price' => 14300,
                'amount' => 'шт'
            ]
        );

        //Шуруповёрты

        $id = DB::table('categories')->where('name', '=', 'Шуруповёрты')->select('id')->get();
        $id = $id[0]->id;

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Шуруповёрт 1',
                'description' => 'Недорогой Шуруповёрт',
                'image' => null,
                'price' => 1900,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Шуруповёрт 2',
                'description' => 'Средний Шуруповёрт',
                'image' => null,
                'price' => 2700,
                'amount' => 'шт'
            ]
        );

        //Генераторы

        $id = DB::table('categories')->where('name', '=', 'Генераторы')->select('id')->get();
        $id = $id[0]->id;

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Генератор 1',
                'description' => 'Недорогой Генератор',
                'image' => null,
                'price' => 9700,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Генератор 2',
                'description' => 'Средний Генератор',
                'image' => null,
                'price' => 19100,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Генератор 3',
                'description' => 'Хороший Генератор',
                'image' => null,
                'price' => 24300,
                'amount' => 'шт'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Генератор 4',
                'description' => 'Хоть город топи',
                'image' => null,
                'price' => 77010,
                'amount' => 'шт'
            ]
        );

        //Фанера

        $id = DB::table('categories')->where('name', '=', 'Фанера')->select('id')->get();
        $id = $id[0]->id;

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Фанера 1',
                'description' => 'Фанера, сорт С',
                'image' => null,
                'price' => 550,
                'amount' => 'м2'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Фанера 2',
                'description' => 'Фанера, сорт В',
                'image' => null,
                'price' => 640,
                'amount' => 'м2'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Фанера 3',
                'description' => 'Фанера, сорт А',
                'image' => null,
                'price' => 730,
                'amount' => 'м2'
            ]
        );

        DB::table('goods')->insert(
            [
                'created_at' => date('Y-m-d H:i:s',time()),
                'updated_at' => date('Y-m-d H:i:s',time()),
                'category_id' => $id,
                'name' => 'Фанера 4',
                'description' => 'Фанера, сорт Экстра',
                'image' => null,
                'price' => 900,
                'amount' => 'м2'
            ]
        );



    }
}
