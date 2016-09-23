<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        require "UserTableSeeder.php";

        $this->call(UserTableSeeder::class);
    }
}
