<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Auth;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissionCount = DB::select('SELECT COUNT(*) as "permissionCount" FROM permissions');

        $roleCount = DB::select('SELECT COUNT(*) as "roleCount" FROM roles');

        $userCount = DB::select('SELECT COUNT(*) as "userCount" FROM users');

        return view('home')
        ->with('permissionCount', $permissionCount)
        ->with('roleCount', $roleCount)
        ->with('userCount', $userCount);
    }

    public function dashboard(){
    }
}
