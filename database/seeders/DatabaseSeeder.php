<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();
        /DB::table('admin')->insert([
            'name' => "admin",
            'email' => 'admin@gmail.com',
            'password' => \Hash::make(123456),
            'created_at' =>'Y-m-d H:i;s'      
        ]
    }
}
