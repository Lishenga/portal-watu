<?php

use Illuminate\Database\Seeder;

class Permission_RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_role')->insert([
            array('id' => '1','permission_id' => '["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32"]','role_id' => '1','created_at' => '2018-06-11 16:34:38','updated_at' => '2018-06-11 16:34:38'),
            array('id' => '2','permission_id' => '["5","6","11","12","13","14","15","16","17","18","24","25","32"]','role_id' => '4','created_at' => '2018-06-11 16:58:47','updated_at' => '2018-06-11 16:58:47')          
        ]);
    }
}
