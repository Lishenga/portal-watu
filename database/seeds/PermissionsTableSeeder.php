<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            array('id' => '1','name' => 'CREATE_USER','display_name' => 'Create New User','description' => 'This permission allows a user to create another portal user','created_at' => '2018-06-10 16:44:06','updated_at' => '2018-06-10 16:44:06'),
            array('id' => '2','name' => 'EDIT_USER','display_name' => 'Editing an already existing portal user','description' => 'This permission allows a portal user to edit another portal user','created_at' => '2018-06-10 16:45:41','updated_at' => '2018-06-10 16:45:41'),
            array('id' => '3','name' => 'DELETE_USER','display_name' => 'Delete a User','description' => 'This permission allows a portal user to delete another portal user.','created_at' => '2018-06-10 16:47:04','updated_at' => '2018-06-10 16:47:04'),
            array('id' => '4','name' => 'CUSTOMER_QUERIES_ANSWERING','display_name' => 'Answer Customer Queries','description' => 'This permission allows a portal user to answer and attend any customer queries','created_at' => '2018-06-10 16:50:55','updated_at' => '2018-06-10 16:50:55'),
            array('id' => '5','name' => 'SET_TARIFFS','display_name' => 'Setting of Tariffs','description' => 'This permission allows a portal user to set the tariffs for the application','created_at' => '2018-06-10 16:51:44','updated_at' => '2018-06-10 16:51:44'),
            array('id' => '6','name' => 'SET_RATES','display_name' => 'Setting of Rates','description' => 'This permission allows a portal user to set rates for the application.','created_at' => '2018-06-10 16:52:27','updated_at' => '2018-06-10 16:52:27'),
            array('id' => '7','name' => 'VIEW_TRANSACTIONS','display_name' => 'Viewing all transactions','description' => 'This permission allows a portal user to view a customers\' transactions.','created_at' => '2018-06-10 16:57:43','updated_at' => '2018-06-10 16:57:43'),
            array('id' => '8','name' => 'VIEW_CUSTOMERS','display_name' => 'Viewing all customers','description' => 'This permission allows a portal user to view customers','created_at' => '2018-06-10 16:59:04','updated_at' => '2018-06-10 16:59:04'),
            array('id' => '9','name' => 'CUSTOMER_CARE','display_name' => 'Enter Customer care page','description' => 'This permission allows a portal user to enter the customer care page.','created_at' => '2018-06-10 17:00:31','updated_at' => '2018-06-10 17:00:31'),
            array('id' => '10','name' => 'VIEW_USERS','display_name' => 'Enter Users\' page','description' => 'This permission allows a portal user to view the portal users\' page.','created_at' => '2018-06-10 17:02:12','updated_at' => '2018-06-10 17:02:12'),
            array('id' => '11','name' => 'SET_COUNTRIES','display_name' => 'Setting of Countries','description' => 'This permission allows a portal user to set countries for the application.','created_at' => '2018-06-10 17:13:09','updated_at' => '2018-06-10 17:13:09'),
            array('id' => '12','name' => 'COUNTRIES_PAGE','display_name' => 'View Countries Page','description' => 'This permission allows a portal user to view the countries page.','created_at' => '2018-06-10 17:13:57','updated_at' => '2018-06-10 17:13:57'),
            array('id' => '13','name' => 'DELETE_COUNTRIES','display_name' => 'Delete Application Countries','description' => 'This permission allows a portal user to delete a country of the application.','created_at' => '2018-06-10 17:16:45','updated_at' => '2018-06-10 17:16:45'),
            array('id' => '14','name' => 'EDIT_COUNTRY','display_name' => 'Edit a country for the application','description' => 'This permission allows a portal user to edit a country of the application.','created_at' => '2018-06-10 17:18:18','updated_at' => '2018-06-10 17:18:18'),
            array('id' => '15','name' => 'DELETE_RATE','display_name' => 'Deleting of rate','description' => 'This permission allows a portal user to delete rates of the application.','created_at' => '2018-06-11 10:56:30','updated_at' => '2018-06-11 10:56:30'),
            array('id' => '16','name' => 'DELETE_TARIFF','display_name' => 'Deleting of a tariff','description' => 'This permission allows a portal user to delete tariffs of the application.','created_at' => '2018-06-11 10:57:14','updated_at' => '2018-06-11 10:57:14'),
            array('id' => '17','name' => 'VIEW_TARIFFS','display_name' => 'View tariff page','description' => 'This permission allows a portal user to view the tariffs oage of the application.','created_at' => '2018-06-11 10:58:34','updated_at' => '2018-06-11 10:58:34'),
            array('id' => '18','name' => 'VIEW_RATES','display_name' => 'View rates page','description' => 'This permission allows a portal user to view the rates page of the application.','created_at' => '2018-06-11 10:59:19','updated_at' => '2018-06-11 10:59:19'),
            array('id' => '19','name' => 'VIEW_CUSTOMER_CARE_PAGE','display_name' => 'Viewing of customer care page','description' => 'This permission allows a portal user to view the customer care page of the application.','created_at' => '2018-06-11 11:01:51','updated_at' => '2018-06-11 11:01:51'),
            array('id' => '20','name' => 'VIEW_ROLES','display_name' => 'Viewing of roles page','description' => 'This permission allows a portal user to view the roles page rates of the application.','created_at' => '2018-06-11 11:05:22','updated_at' => '2018-06-11 11:05:22'),
            array('id' => '21','name' => 'EDIT_ROLES','display_name' => 'Editing roles','description' => 'This permission allows a portal user to edit the roles of the application.','created_at' => '2018-06-11 11:05:51','updated_at' => '2018-06-11 11:05:51'),
            array('id' => '22','name' => 'DELETE_ROLE','display_name' => 'Deleting of roles','description' => 'This permission allows a portal user to delete roles of the application.','created_at' => '2018-06-11 11:06:46','updated_at' => '2018-06-11 11:06:46'),
            array('id' => '23','name' => 'CREATE_ROLE','display_name' => 'Creating of a role','description' => 'This permission allows a portal user to create a role of the application.','created_at' => '2018-06-11 11:07:47','updated_at' => '2018-06-11 11:07:47'),
            array('id' => '24','name' => 'EDIT_RATES','display_name' => 'Editing of rates','description' => 'This permission allows a portal user to edit rates of the application.','created_at' => '2018-06-11 11:09:27','updated_at' => '2018-06-11 11:09:27'),
            array('id' => '25','name' => 'EDIT_TARIFFS','display_name' => 'Editing of tariffs','description' => 'This permission allows a portal user to edit tariffs of the application.','created_at' => '2018-06-11 11:10:10','updated_at' => '2018-06-11 11:10:10'),
            array('id' => '26','name' => 'VIEW_PARTICULAR_CUSTOMER','display_name' => 'Viewing of a particular customer','description' => 'This permission allows a portal user to view the details of a particular customer of the application.','created_at' => '2018-06-11 11:12:33','updated_at' => '2018-06-11 11:12:33'),
            array('id' => '27','name' => 'REVERSE_TRANSACTIONS','display_name' => 'Reversing transactions','description' => 'This permission allows a portal user to reverse a transaction of the application.','created_at' => '2018-06-11 11:13:59','updated_at' => '2018-06-11 11:13:59'),
            array('id' => '28','name' => 'DISBURSE_MONEY','display_name' => 'Disbursing money','description' => 'This permission allows a portal user to disburse funds that has been withheld due to circumstances that are not because of the application.','created_at' => '2018-06-11 11:18:17','updated_at' => '2018-06-11 11:18:17'),
            array('id' => '29','name' => 'BLOCK_CUSTOMER','display_name' => 'Blocking of a customer','description' => 'This permission allows a portal user to block a customer.','created_at' => '2018-06-11 11:19:09','updated_at' => '2018-06-11 11:19:09'),
            array('id' => '30','name' => 'FLAGGING_FRAUD','display_name' => 'Flag frausters','description' => 'This permission allows a portal user to enlist a customer as being a possible fraudster.','created_at' => '2018-06-11 11:24:09','updated_at' => '2018-06-11 11:24:09'),
            array('id' => '31','name' => 'UNBLOCK_CUSTOMER','display_name' => 'Unblocking a customer','description' => 'This permission allows a portal user to unblock a customer who has been blocked.','created_at' => '2018-06-11 11:25:19','updated_at' => '2018-06-11 11:25:19'),
            array('id' => '32','name' => 'VIEW_SETTINGS_PAGE','display_name' => 'View the settings page','description' => 'This permission allows a portal user to view the settings page.','created_at' => '2018-06-11 14:09:00','updated_at' => '2018-06-11 14:09:00'),
            array('id' => '33','name' => 'VIEW_PARTICULAR_ROLE','display_name' => 'View particular role page','description' => 'This permission allows a portal user to view particular role page.','created_at' => '2018-06-11 17:13:47','updated_at' => '2018-06-11 17:13:47')      
        ]);
    }
}
