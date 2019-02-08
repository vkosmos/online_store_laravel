<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'created_at' => date('Y-m-d H:i:s',time()),
            'updated_at' => date('Y-m-d H:i:s',time()),
            'name' => 'Первый пользователь',
            'email' => 'first@test.ru',
            'email_verified_at' => date('Y-m-d H:i:s',time()),
            'password' => '123456'
        ]);

    }
}
