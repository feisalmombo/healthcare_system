@extends('layouts.app')

@section('title', 'Reception Form')

@section('content')
<div class="col-lg-12">
	<h1 class="page-header">Reception Form</h1>
</div>

<div class="row">
	<div class="col-lg-12">
		@include('msgs.success')
		<div class="panel panel-default">
			<div class="panel-heading">
				
				Reception Panel<a href="{{ url('/view-receptions') }}" class="col-2 pull-right" style="text-decoration: none;"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
				
			</div>
			<div class="panel-body">
				<div class="row">

					<form role="form" action="{{ url('/view-receptions') }}" method="POST">
		 					{{ csrf_field() }} 
						<div class="col-lg-6">
							<h2>Patient Information</h2>
							<div class="form-group">
								<label>First Name: </label>
								<input class="form-control" name="first_name" required="required"  placeholder="eg: Thobias">
                            </div>

                            <div class="form-group">
								<label>Middle Name (Option): </label>
								<input class="form-control" name="middle_name" placeholder="eg: Peter">
                            </div>
                            
                            <div class="form-group">
								<label>Last Name: </label>
								<input class="form-control" name="last_name" required="required"  placeholder="eg: Kazeli">
                            </div>
                            
                            <div class="form-group">
								<label>Email (Option):</label>
								<input type="email" class="form-control" name="email"placeholder="eg: thobias.kazeli@gmail.com">
							</div>
							<div class="form-group">
								<label>Phone Number:</label>
								<input type="tel" class="form-control" required="required"  name="phone_number" placeholder="eg: +255 789 981 300">
							</div>
							<div class="form-group">
								<label>Gender</label>
								<select class="form-control"  required="required" name="gender_id" id="gender_id">
								<option value="#">---Select Gender---</option>
									@foreach($genders as $gender)
									<option value="{{ $gender->id }}">{{ $gender->gender_name }}</option>
									@endforeach
								</select>
                            </div>
                            
                            <div class="form-group">
								<label>Location:</label>
								<input class="form-control" required="required"  name="location" placeholder="eg: Buguruni Sheli">
                            </div>
                            
                            <div class="form-group">
								<label>Age:</label>
								<input type="number" class="form-control" required="required"  name="age" placeholder="eg: 44 years">
                            </div>

                            <div class="form-group">
								<label>Marital Status</label>
								<select class="form-control"  required="required" name="maritalstatus_id" id="maritalstatus_id">
								<option value="#">---Select Marital Status---</option>
									@foreach($maritalstatuses as $maritalstatus)
									<option value="{{ $maritalstatus->id }}">{{ $maritalstatus->maritalstatus_name }}</option>
									@endforeach
								</select>
                            </div>
							
						</div>

						<div class="col-lg-6">
							<h2>Dispensary Information</h2>
                            <div class="form-group">
								<label>Specialization</label>
								<select class="form-control"  required="required" name="specilization_id" id="specilization_id">
								<option value="#">---Select Specialization---</option>
                                    @foreach($specializations as $specialization)
									<option value="{{ $specialization->id }}">{{ $specialization->specilization_name }}</option>
									@endforeach
								</select>
                            </div>

                            <div class="form-group">
								<label>Department</label>
								<select class="form-control"  required="required" name="department_id" id="department_id">
								<option value="#">---Select Department---</option>
									@foreach($departments as $department)
									<option value="{{ $department->id }}">{{ $department->department_name }}</option>
									@endforeach
								</select>
                            </div>

                            <div class="form-group">
								<label>Fee</label>
								<select class="form-control"  required="required" name="receptionFee">
									<option value="">-- Select Fee --</option>
									<option value="2000">2000</option>
								</select>
                            </div>

							<div class="form-group">
								<label>Assigned Doctor: </label>
								<select class="form-control"  required="required" name="doctor_id">
									<option value="#">---Select Doctor---</option>
									@foreach($users as $user)
									<option value="{{ $user->id }}">{{ $user->first_name." ".$user->last_name }}</option>
									@endforeach
								</select>
                            </div>
                            

							<div class="form-group">
								<label>Time Allocated</label>
								<input type="date" class="form-control"  required="required" name="time_allocated">
                            </div>
                            
							<div class="form-group">
								<label>Status</label>
								<select class="form-control"  required="required" name="status">
									<option value="">-- Select status --</option>
									<option value="Appointment">Appointment</option>
								</select>
                            </div>

                            <div class="form-group" id="incident">
								<label>Problem Details</label>
								<textarea class="form-control" required="required"  rows="7" name="problem_description" placeholder="eg: My stomach hurt for three days, I want to know what is the problem"></textarea>
							</div>
                            
						</div>
						<div class="form-group">
							<button type="submit" style="margin-left:auto;margin-right:auto;display:block;margin-top:22%;margin-bottom:0%" class="btn btn-primary">
								Save
							</button> 
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection