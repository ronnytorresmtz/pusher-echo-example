<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'rolando torres',
            'email' => 'ronnytorresmtz@gmail.com',
            'password' => bcrypt('ronnytorresmtz'),
        ]);

        DB::table('orders')->insert([
            'order_id' => 1,
            'user_id' => 1,
        ]);
    }
}
