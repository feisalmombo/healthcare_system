<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Role;
use App\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$dev_permission = Permission::where('slug','create')->first();
        $finance_permission = Permission::where('slug', 'edit')->first();
        $admin_permission = Permission::where('slug', 'manage_users')->first();

        //RoleTableSeeder.php
        $dev_role = new Role();
        $dev_role->slug = 'developer';
        $dev_role->name = 'Developer';
        $dev_role->save();
        $dev_role->permissions()->attach($dev_permission);

        $finance_role = new Role();
        $finance_role->slug = 'doctor';
        $finance_role->name = 'Doctor';
        $finance_role->save();
		$finance_role->permissions()->attach($finance_permission);
		
        $admin=new Role();
    	$admin->slug = 'receptionist';
    	$admin->name = 'Receptionist';
    	$admin->save();
		$admin->permissions()->attach($admin_permission);

		$admin=new Role();
    	$admin->slug = 'lab technician';
    	$admin->name = 'Lab Techinian';
    	$admin->save();
		$admin->permissions()->attach($dev_permission);

		$admin=new Role();
    	$admin->slug = 'nurse';
    	$admin->name = 'Nurse';
    	$admin->save();
        $admin->permissions()->attach($dev_permission);
        
        $admin=new Role();
    	$admin->slug = 'finance';
    	$admin->name = 'Finance';
    	$admin->save();
		$admin->permissions()->attach($dev_permission);

		$admin=new Role();
    	$admin->slug = 'administrator';
    	$admin->name = 'Administrator';
    	$admin->save();
		$admin->permissions()->attach($dev_permission);
    	
    }
}
