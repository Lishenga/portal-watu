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
        // $this->call(UsersTableSeeder::class);
        $this->call([
            UsersTableSeeder::class,
            Permission_RoleTableSeeder::class,
            PermissionsTableSeeder::class,
            Role_UserTableSeeder::class,
            RolesTableSeeder::class,
        ]);
    }
}
