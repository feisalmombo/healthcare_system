<?php

use Illuminate\Database\Seeder;
use App\Specilization;

class SpecilizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specilization = new Specilization();
        $specilization->specilization_name='Gynecologist/Obstetrician';
        $specilization->save();
    
        $specilization = new Specilization();
        $specilization->specilization_name ='General Physician';
        $specilization->save();

        $specilization = new Specilization();
        $specilization->specilization_name ='Dermatologist';
        $specilization->save();

        $specilization = new Specilization();
        $specilization->specilization_name ='Homeopath';
        $specilization->save();

        $specilization = new Specilization();
        $specilization->specilization_name ='Dentist';
        $specilization->save();

        $specilization = new Specilization();
        $specilization->specilization_name ='Ear-Nose-Throat(Ent) Specialist';
        $specilization->save();

        $specilization = new Specilization();
        $specilization->specilization_name ='Bones Specialist';
        $specilization->save();

        $specilization = new Specilization();
        $specilization->specilization_name ='Dermatologist';
        $specilization->save();

        $specilization = new Specilization();
        $specilization->specilization_name ='Laboratory Technician';
        $specilization->save();
    }
}
