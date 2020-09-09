<?php

use Illuminate\Database\Seeder;
use App\MaritalStatus;

class MaritalStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maritalStatus = new MaritalStatus();
        $maritalStatus->maritalstatus_name='Married';
        $maritalStatus->save();
    
        $maritalStatus = new MaritalStatus();
        $maritalStatus->maritalstatus_name ='Single';
        $maritalStatus->save();

        $maritalStatus = new MaritalStatus();
        $maritalStatus->maritalstatus_name ='Divorced';
        $maritalStatus->save();

        $maritalStatus = new MaritalStatus();
        $maritalStatus->maritalstatus_name ='Other';
        $maritalStatus->save();
    }
}
