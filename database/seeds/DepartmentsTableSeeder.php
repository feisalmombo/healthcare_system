<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $department = new Department();
            $department->department_name='Orthopedic';
            $department->save();
    
            $department = new Department();
            $department->department_name ='Neuro Surgery';
            $department->save();

            $department = new Department();
            $department->department_name ='Cardiology';
            $department->save();

            $department = new Department();
            $department->department_name ='Surgery';
            $department->save();

            $department = new Department();
            $department->department_name ='General';
            $department->save();

            $department = new Department();
            $department->department_name ='Pharmacy';
            $department->save();

            $department = new Department();
            $department->department_name ='Finance';
            $department->save();

            $department = new Department();
            $department->department_name ='Social Work';
            $department->save();

            $department = new Department();
            $department->department_name ='Radiotherapy';
            $department->save();

            $department = new Department();
            $department->department_name ='Patient Services';
            $department->save();

            $department = new Department();
            $department->department_name ='Medical Records';
            $department->save();

            $department = new Department();
            $department->department_name ='Maternity';
            $department->save();

            $department = new Department();
            $department->department_name ='Intensive Care Unit (ICU)';
            $department->save();

            $department = new Department();
            $department->department_name ='Health & Safety';
            $department->save();
    }
}
