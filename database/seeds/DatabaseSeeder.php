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
    	$this->call(PermissionTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    	$this->call(UsersTableSeeder::class);
    	$this->call(DepartmentsTableSeeder::class);
    	$this->call(SpecilizationsTableSeeder::class);
    	$this->call(ReceptionFeesTableSeeder::class);
    	$this->call(GendersTableSeeder::class);
    	$this->call(MaritalStatusesTableSeeder::class);
    }
}
