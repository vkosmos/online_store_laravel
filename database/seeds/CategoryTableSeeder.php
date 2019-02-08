<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->delete();
        DB::table('categories')->delete();

        $id1 = DB::table('categories')->insertGetId(['created_at' => date('Y-m-d H:i:s',time()),'updated_at' => date('Y-m-d H:i:s',time()), 'name' => 'Электроника', 'parent_id' => null, 'link' => 952734]);

        DB::table('categories')->insert(['created_at' => date('Y-m-d H:i:s',time()),'updated_at' => date('Y-m-d H:i:s',time()), 'name' => 'Компьютеры', 'parent_id' => $id1, 'link' => 512356]);
        DB::table('categories')->insert(['created_at' => date('Y-m-d H:i:s',time()),'updated_at' => date('Y-m-d H:i:s',time()), 'name' => 'Смартфоны', 'parent_id' => $id1, 'link' => 237892]);

        $id2 = DB::table('categories')->insertGetId(['created_at' => date('Y-m-d H:i:s',time()),'updated_at' => date('Y-m-d H:i:s',time()), 'name' => 'Бытовая техника', 'parent_id' => null, 'link' => 100015]);

        DB::table('categories')->insert(['created_at' => date('Y-m-d H:i:s',time()),'updated_at' => date('Y-m-d H:i:s',time()), 'name' => 'Пылесосы', 'parent_id' => $id2, 'link' => 738102]);
        DB::table('categories')->insert(['created_at' => date('Y-m-d H:i:s',time()),'updated_at' => date('Y-m-d H:i:s',time()), 'name' => 'Стиральные машины', 'parent_id' => $id2, 'link' => 815681]);
        DB::table('categories')->insert(['created_at' => date('Y-m-d H:i:s',time()),'updated_at' => date('Y-m-d H:i:s',time()), 'name' => 'Телевизоры', 'parent_id' => $id2, 'link' => 908071]);

        $id3 = DB::table('categories')->insertGetId(['created_at' => date('Y-m-d H:i:s',time()),'updated_at' => date('Y-m-d H:i:s',time()), 'name' => 'Строительные товары', 'parent_id' => null, 'link' => 253160]);

        DB::table('categories')->insert(['created_at' => date('Y-m-d H:i:s',time()),'updated_at' => date('Y-m-d H:i:s',time()), 'name' => 'Перфораторы', 'parent_id' => $id3, 'link' => 859173]);
        DB::table('categories')->insert(['created_at' => date('Y-m-d H:i:s',time()),'updated_at' => date('Y-m-d H:i:s',time()), 'name' => 'Шуруповёрты', 'parent_id' => $id3, 'link' => 678318]);
        DB::table('categories')->insert(['created_at' => date('Y-m-d H:i:s',time()),'updated_at' => date('Y-m-d H:i:s',time()), 'name' => 'Генераторы', 'parent_id' => $id3, 'link' => 183655]);
        DB::table('categories')->insert(['created_at' => date('Y-m-d H:i:s',time()),'updated_at' => date('Y-m-d H:i:s',time()), 'name' => 'Фанера', 'parent_id' => $id3, 'link' => 301035]);

    }
}
