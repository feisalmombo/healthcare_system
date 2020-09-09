<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;
use App\Role;
use App\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $dev_role = Role::where('slug','developer')->first();
        $finance_role = Role::where('slug', 'finance')->first();
        $dev_perm = Permission::where('slug','create')->first();
        $finance_perm = Permission::where('slug','edit')->first();

        $developer = new User();
        $developer->first_name = 'Feisal';
        $developer->middle_name = 'Suleiman';
        $developer->last_name = 'Mombo';
        $developer->email = 'feisal.mombo@helis.co.tz';
        $developer->phone_number = '+255684456287';
        $developer->password = bcrypt('123456');
        $developer->created_at = Carbon::now();
        $developer->updated_at = Carbon::now();
        $developer->save();
        $developer->roles()->attach($dev_role);
        $developer->permissions()->attach($dev_perm);


        $finance = new User();
        $finance->first_name = 'Thobias';
        $finance->middle_name = 'Peter';
        $finance->last_name = 'Kazeli';
        $finance->email = 'thobias.peter@helis.co.tz';
        $finance->phone_number = '+255688129023';
        $finance->password = bcrypt('123456');
        $finance->created_at = Carbon::now();
        $finance->updated_at = Carbon::now();
        $finance->save();
        $finance->roles()->attach($finance_role);
        $finance->permissions()->attach($finance_perm);
        
        
    }
}
