<?php

use Illuminate\Database\Seeder;

class Role_UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->insert([
            array('id' => '1','user_id' => '1','role_id' => '1','created_at' => '2018-06-11 12:26:07','updated_at' => '2018-06-11 12:26:07'),
            array('id' => '2','user_id' => '2','role_id' => '3','created_at' => '2018-06-11 12:40:09','updated_at' => '2018-06-11 13:52:11'),
            array('id' => '3','user_id' => '3','role_id' => '4','created_at' => '2018-06-11 13:27:25','updated_at' => '2018-06-11 13:27:25'),
            array('id' => '4','user_id' => '4','role_id' => '5','created_at' => '2018-06-11 18:28:20','updated_at' => '2018-06-11 18:29:46'),
            array('id' => '5','user_id' => '4','role_id' => '3','created_at' => '2018-06-11 18:29:24','updated_at' => '2018-06-11 18:29:24'),
            array('id' => '6','user_id' => '5','role_id' => '4','created_at' => '2018-06-12 03:50:37','updated_at' => '2018-06-12 03:50:37'),
            array('id' => '7','user_id' => '5','role_id' => '5','created_at' => '2018-06-12 03:50:37','updated_at' => '2018-06-12 03:50:37'),
            array('id' => '8','user_id' => '5','role_id' => '4','created_at' => '2018-06-12 03:52:53','updated_at' => '2018-06-12 03:52:53'),
            array('id' => '9','user_id' => '5','role_id' => '5','created_at' => '2018-06-12 03:52:53','updated_at' => '2018-06-12 03:52:53'),
            array('id' => '10','user_id' => '5','role_id' => '4','created_at' => '2018-06-12 03:55:55','updated_at' => '2018-06-12 03:55:55'),
            array('id' => '11','user_id' => '5','role_id' => '5','created_at' => '2018-06-12 03:55:55','updated_at' => '2018-06-12 03:55:55'),
            array('id' => '12','user_id' => '5','role_id' => '4','created_at' => '2018-06-12 03:59:10','updated_at' => '2018-06-12 03:59:10'),
            array('id' => '13','user_id' => '5','role_id' => '5','created_at' => '2018-06-12 03:59:10','updated_at' => '2018-06-12 03:59:10')         
        ]);
    }
}
