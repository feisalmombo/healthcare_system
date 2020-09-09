<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;
use App\MaritalStatus;
use App\Specilization;
use App\Department;
use DB;
use App\User;
use App\Patient;
use App\Detail;
use App\Duty;

class ReceptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware(function ($request, $next) {
            if (\Auth::user()->can('view_reception')) {
                return $next($request);
            }
            return redirect()->back();
        });

        $patientsData = DB::table('patients')
        ->join('genders','patients.gender_id','=','genders.id')
        ->join('marital_statuses','patients.maritalstatus_id','=','marital_statuses.id')
        ->select('patients.id as ParentID','genders.gender_name','marital_statuses.maritalstatus_name')
        ->get();
        // return $patientsData; 

        $details = DB::table('details')
        ->join('duties','details.id','=','duties.detail_id')
        ->join('patients','details.patient_id','=','patients.id')
        ->join('users','duties.doctor_id','=','users.id')
        ->join('specilizations','details.specilization_id','=','specilizations.id')
        ->join('departments','details.department_id','=','departments.id')
        ->select('details.id as detailId',
        'details.problem_description',
        'details.patient_id as patentId',
        'details.specilization_id as specilizationId',
        'details.department_id as departmentId',
        'details.receptionFee',
        'patients.first_name',
        'patients.middle_name',
        'patients.last_name',
        'patients.email',
        'patients.phone_number',
        'patients.age','details.ticket_number',
        'duties.status','departments.department_name',
        'duties.doctor_id as doctorId',
        'specilizations.specilization_name',
        'users.id as doctorId',
        'users.first_name as doctorFirstname',
        'users.middle_name as doctorMiddlename',
        'users.last_name as doctorLastname',
        'details.created_at')
        ->latest()
        ->get();
        //return $details;
        return view('manageReception.viewreception')->with('details', $details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware(function ($request, $next) {
            if (\Auth::user()->can('create_reception')) {
                return $next($request);
            }
            return redirect()->back();
        });

        $userData  = DB::table('users')
        ->join('users_roles', 'users.id', '=', 'users_roles.user_id')
        ->join('roles', 'users_roles.role_id', '=', 'roles.id')
        ->join('roles_permissions', 'roles.id', '=', 'roles_permissions.role_id')
        ->join('permissions', 'roles_permissions.permission_id', '=', 'permissions.id')
        ->where('permissions.slug', '=', 'create_reception')
        ->select('users.id', 'users.first_name', 'users.middle_name', 'users.last_name', 'users_roles.role_id')
        ->get();
        // return $userData;

        $gender = Gender::all();
        //return $gender;

        $maritalstatus = MaritalStatus::all();
        // return $maritalstatus;

        $specialization = Specilization::all();
        // return $specialization;

        $department = Department::all();
        // return $department;

        return view('manageReception.addreception')
        ->with('genders', $gender)
        ->with('maritalstatuses', $maritalstatus)
        ->with('specializations', $specialization)
        ->with('departments', $department)
        ->with('users', $userData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->middleware(function ($request, $next) {
            if (\Auth::user()->can('create_reception')) {
                return $next($request);
            }
            return redirect()->back();
        });

        $this->validate(request(), [
            'first_name'=> 'required',
            'last_name'=> 'required',
            'phone_number'=> 'required',
            'gender_id'=> 'required',
            'location'=> 'required',
            'age'=> 'required',
            'maritalstatus_id'=> 'required',
            'specilization_id'=> 'required',
            'department_id'=> 'required',
            'receptionFee'=> 'required',
            'doctor_id'=> 'required',
            'time_allocated' => 'required',
            'status'=> 'required',
            'problem_description'=> 'required',
        ]);

        $patient = new Patient();

        $detail = new Detail();

        $duty = new Duty();

        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $ticket = substr(str_shuffle($chars), 0, 8);

        $patientEmail = $request->email;
        $patient->first_name = $request->first_name;
        $patient->middle_name = $request->middle_name;
        $patient->last_name = $request->last_name;
        $patient->email = $patientEmail;
        $patient->phone_number = $request->phone_number;
        $patient->gender_id = $request->gender_id;
        $patient->location = $request->location;
        $patient->age = $request->age;
        $patient->maritalstatus_id = $request->maritalstatus_id;
        // return $patient;

        $st = $patient->save();

        if ($st) {

            $patientId  = DB::table('patients')->select('id')->where('first_name', '=', $request->first_name)->value('id');
            // return $patientId;
   
            $detail->problem_description = $request->problem_description;
            $detail->ticket_number = $ticket; 
            $detail->patient_id = $patientId;
            $detail->specilization_id = $request->specilization_id;
            $detail->department_id = $request->department_id;
            $detail->receptionFee = $request->receptionFee;
            // return $detail
            $st2 = $detail->save();
   
            if ($st2) {
               $detailId  = DB::table('details')->select('id')
               ->where('problem_description', '=', $request->problem_description)
               ->where('patient_id', '=', $patientId)
               ->where('specilization_id', '=', $request->specilization_id)
               ->where('department_id', '=', $request->department_id)
               ->where('receptionFee', '=', $request->receptionFee)
               ->value('id');
   
               $duty->detail_id = $detailId;
               $duty->time_allocated = $request->time_allocated;
               $duty->doctor_id = $request->doctor_id;
               $duty->status = $request->status;
               // return $duty;

               $st3 = $duty->save();
   
   
               if (!$st3) {
                 return redirect()->back()->with('message', 'Failed to insert patient data');
             }else{
              
                   return redirect()->back()->with('message', 'Successfully inserted with a Ticket Number: '.$ticket);
             }
         }
     }





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
