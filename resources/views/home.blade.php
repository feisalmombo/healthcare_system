@extends('layouts.app')

@section('title', 'Home')

@section('content')


<div class="col-lg-12">
    <h1 class="page-header">Dashboard</h1>
</div>

<div class="row">
   <div class="col-lg-12">

   
<div class="col-lg-4">
        <a href="{{ url('/settings/manage_users/permissions') }}" style="text-decoration: none;">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">
                    <h3>System Permission</h3>
                </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-9 text-left">
                        <div><i class="fa fa-check fa-5x"></i></div>
                    </div>
                    <div class="huge">{{ $permissionCount[0]->permissionCount }}</div>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="col-lg-4">
        <a href="{{ url('/settings/manage_users/roles') }}" style="text-decoration: none;">
            <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">
                    <h3>System Roles</h3>
                </h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-9 text-left">
                        <div><i class="fa fa-comment fa-5x"></i></div>
                    </div>
                    <div class="huge">{{ $roleCount[0]->roleCount }}</div>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="col-lg-4">
 <a href="{{ url('/view-users') }}" style="text-decoration: none;">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">
            <h3>System Users</h3>
        </h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-9 text-left">
                <div><i class="fa fa-times fa-5x"></i></div>
            </div>
            <div class="huge">{{ $userCount[0]->userCount }}</div>
        </div>
    </div>
</div>
</a>
</div> 



</div> 
</div>
@endsection
