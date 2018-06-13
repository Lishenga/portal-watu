<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            array('id' => '1','name' => 'Super Admin','display_name' => 'Super administrator','permission' => '["1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32","33"]','description' => 'This admin can view everything on the portal.','created_at' => '2018-06-11 12:05:03','updated_at' => '2018-06-11 16:34:38'),
            array('id' => '2','name' => 'Finance admin','display_name' => 'Finance administrator','permission' => '["5","6","7","15","16","17","18","24","25","27","28","30"]','description' => 'This admin can only view finance side of the portal and make changes','created_at' => '2018-06-11 12:07:06','updated_at' => '2018-06-11 12:07:06'),
            array('id' => '3','name' => 'Customer Care','display_name' => 'Customer Care Attendants','permission' => '["4","7","8","9","10","19","26"]','description' => 'These admins attend to customer queries and pass the queries to their relevant departments','created_at' => '2018-06-11 12:10:14','updated_at' => '2018-06-11 12:10:14'),
            array('id' => '4','name' => 'Settings Admin','display_name' => 'Settings Administrator','permission' => '["5","6","11","12","13","14","15","16","17","18","24","25","32"]','description' => 'This admin is concerned with the rates, countries and tariffs that are set in the application,','created_at' => '2018-06-11 12:13:03','updated_at' => '2018-06-11 16:58:47'),
            array('id' => '5','name' => 'Transactions Admin','display_name' => 'Transactions administrator','permission' => '["7","8","26","27","28","29","30","31"]','description' => 'This admin overseas all the transactions that take place in the application','created_at' => '2018-06-11 12:14:21','updated_at' => '2018-06-11 12:14:21')        
        ]);
    }
}
