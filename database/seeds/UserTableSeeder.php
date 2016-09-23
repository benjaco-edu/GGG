<?php
/**
 * Created by PhpStorm.
 * User: Benjamin
 * Date: 23-09-2016
 * Time: 10:47
 */

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table("users")->delete();

        $users = array(
            array(
                'username'=>'Gert',
                'password'=>Hash::make("1234"),
                'role'=>'Admin'
            )
        );

        DB::table("users")->insert($users);
    }

}