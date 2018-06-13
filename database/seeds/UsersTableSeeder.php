<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            array('id' => '1','name' => 'Lishenga Leon','email' => 'lishengaleon@gmail.com','phone_number' => '791172530','role' => '["1"]','password' => '$2y$10$1I16nhVMKzFminpSXeyEfuvg7xQ8dV06AldFXAZhn8DLAPPoSK5cC','status' => '1','remember_token' => 'tbSWw6o2goWlO5FRCZYGRp71rDnMkM30eyCfdcii3gETEo2YFmhJzwKntlcA','created_at' => '2018-06-10 16:42:00','updated_at' => '2018-06-11 13:52:39'),
            array('id' => '2','name' => 'Adams Okode','email' => 'adamsokode@gmail.com','phone_number' => '702759950','role' => '["3"]','password' => '$2y$10$Eupt8XGdZKN8KWraGhNNOuRE09cU9BVaprLWTVDYTfHwSpYSotzra','status' => '1','remember_token' => 'KGlLGskkmoVa1lsYmBvHwBxksLetX6SDjJgnaazvMTi0Tt4Pt0zcvaF3xnyk','created_at' => '2018-06-11 12:40:00','updated_at' => '2018-06-11 13:52:11'),
            array('id' => '3','name' => 'Kevin Lishenga','email' => 'lishengak@gmail.com','phone_number' => '16127016636','role' => '["4"]','password' => '$2y$10$kgx/uAXipdBxE0pJlf69f.RL2ORji/k4Rzo730rXwCtz98maj3.jS','status' => '1','remember_token' => 'XGpuUKBRcBqrc2nthqRFywamXFfhPuvGLxA7C8wtRdWlFMqJYSoJwwtU05kY','created_at' => '2018-06-11 13:16:22','updated_at' => '2018-06-11 13:59:48'),
            array('id' => '4','name' => 'Anyungu Wanyungu','email' => 'anyungu@gmail.com','phone_number' => '0722173654','role' => '["5"]','password' => '$2y$10$58v5ZIk7h55Km8IGoASj8.v4ag2ZP0yFLbHC/zboH5rm1OOqFRZly','status' => '1','remember_token' => NULL,'created_at' => '2018-06-11 18:28:09','updated_at' => '2018-06-11 18:29:46'),
            array('id' => '5','name' => 'Fanice Lishenga','email' => 'fanice58@gmail.com','phone_number' => '0723300743','role' => '["4","5"]','password' => '$2y$10$ZeYML2bMCzfbX961hn9sHe/MZ4xi4hA0Auq8LR/rcAFXKy3XQytvu','status' => '1','remember_token' => NULL,'created_at' => '2018-06-12 03:50:23','updated_at' => '2018-06-12 03:59:10')
        ]);
    }
}
