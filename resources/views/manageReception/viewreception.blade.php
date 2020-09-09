@extends('layouts.app')

@section('title', 'Receptions')

@section('content')

{{-- @if($count2==1) --}}
<div class="col-lg-12">
	<h3>All Receptions</h3>
	<hr/>
</div>

<div class="page-header">
	<div class="container row">
		<div class="col-lg-10">
		<div class="col-lg-4">
			<form action="{{url('search-incidents-atm')}}" method="POST"> 
				{{ csrf_field() }}
				<div class="row">
					<div class="col-xs-12">
						<div class="input-group">
							<!-- <input type="text" class="form-control" placeholder="Search by ATM" id="txtSearch"/> -->
							<select class="form-control"  required="required" name="atm">
								<option value="e">--Search Specilization Type--</option>
								{{-- @foreach($search_atm as $role)
								<option value="{{ $role->atm_id }}">{{ $role->atm_id }}</option>
								@endforeach  --}}
							</select>
							<input type="text" hidden="hidden" value="1" name="check">
							<div class="input-group-btn">
								<button class="btn btn-primary" name="submit" type="submit">
									<span class="fa fa-search fa-fw"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-4 col-md-4">
			<form action="{{url('search-incidents')}}" method="POST"> 
				{{ csrf_field() }}
				<div class="row">
					<div class="col-xs-12">
						<div class="input-group">
							<!-- <input type="text" class="form-control" placeholder="Search by Incident" id="txtSearch"/> -->
							<select class="form-control"  required="required" name="inc">
								<option value="e">--Search by Department Type--</option>
								{{-- @foreach($search_incident as $detail)
								<option value="{{ $detail->id }}">{{  $detail->slug  }}</option>
								@endforeach  --}}
							</select>
							<input type="text" hidden="hidden" value="2" name="check">
							<div class="input-group-btn">
								<button class="btn btn-primary"name="submit" type="submit">
									<span class="fa fa-search fa-fw"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-4">
			<form action="{{url('/search-incidents-engineer')}}" method="POST"> 
				{{ csrf_field() }}
				<div class="row">
					<div class="col-xs-12">
						<div class="input-group">
							<!-- <input type="text" class="form-control" placeholder="Search by Engineer" id="txtSearch"/> -->
							<select class="form-control"  required="required" name="eng">
								<option value="#">--Search Incident by Doctor--</option>
								{{-- @foreach($search_eng as $role)
								<option value="{{ $role->id }}">{{ "Eng. ".$role->first_name." ".$role->last_name }}</option>
								@endforeach  --}}
							</select>
							<input type="text" hidden="hidden" value="3" name="check">
							<div class="input-group-btn">
								<button class="btn btn-primary" type="submit" name="submit">
									<span class="fa fa-search fa-fw"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	</div>
</div>
{{-- @else --}}
<div class="col-lg-12">
	<h3>Search Result(s)</h3>
	<hr/>
</div>
{{-- @endif --}}

<div class="row">
	<div class="col-lg-12"> 
		@include('msgs.success')
		<div class="panel panel-default">
			<div class="panel-heading">
				
				@if(str_contains(url()->current(), '/search-incidents-atm'))
				Incidence by ATM ID
				@elseif(str_contains(url()->current(), '/search-incidents-engineer'))
				Incidence by Engineer
				@elseif(str_contains(url()->current(), '/search-incidents'))
				Incidence by Incident Type
				@else

				Receptions
				@endif

				{{-- @if($count2==1) --}}
				<a href="{{ url('/view-receptions/create') }}" class="col-2 pull-right" style="text-decoration: none;"><i class="fa fa-plus"></i>&nbsp;Add Incident</a>
				{{-- @else --}}
				{{-- <a href="{{ url('/incidents') }}" class="col-2 pull-right" style="text-decoration: none;"><i class="fa fa-arrow-left"></i>&nbsp;Back</a> --}}
				{{-- @endif --}}
			</div>

			<!-- /.panel-heading -->
			<div class="panel-body">
				@if(count($details)>0)
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>S/N</th>
							<th>Problem Description</th>
							<th>Patient Name</th>
							<th>Patient Email</th>
							<th>Patient Phonenumber</th>
							{{-- <th>Patient Age</th> --}}
							{{-- <th>Status</th>
							<th>Ticket Number</th>
							<th>Department</th>
							<th>Specilization</th> --}}
							<th>Doctor Name</th>
							<th>Edit</th>
							<th>Show</th>
							<th>Delete</th>
							<th>Created at</th>
							</tr>
						</tr>
					</thead>
					<tbody>

						@foreach($details as $key=>$detail)
						<tr class="odd gradeX">
							<td>
                                {{ $key + 1 }}
                            </td>
							<td>
								{{ $detail->problem_description }}
							</td>
							<td>
								{{ "Patient. ".$detail->first_name." ".$detail->last_name }}
							</td>
							<td>
                               {{ $detail->email }}
                            </td>
							<td class="center">
								{{ $detail->phone_number }}
							</td>
							{{-- <td class="center">
                                {{ $detail->age }}
                            </td> --}}
							{{-- <td class="center">
                                {{ $detail->status }}
                            </td>
							<td class="center">
                                {{ $detail->ticket_number }}
                            </td>

                            <td class="center">
                                {{ $detail->department_name }}
                            </td>

                            <td class="center">
                                {{ $detail->specilization_name }}
                            </td> --}}

                            <td class="center">
								{{ "Doctor. ".$detail->doctorFirstname." ".$detail->doctorLastname }}
                            </td>

                            <td class="center">
                               Edit
                            </td>

                            <td class="center">
                               Show
                            </td>

                            <td class="center">
                                Delete
                            </td>

                            <td class="center">
                                {{date("F jS, Y", strtotime($detail->created_at))}}
                            </td>
						</tr>
                        @endforeach
                        
					</tbody>
				</table>


				<div class="row">
					<div class="pull-left col-lg-8">
						<div class="col-lg-2">
							<form action="{{url('/incidents/report/pdf/downloadPdf')}}" method="POST"> 
								{{ csrf_field() }}
								<input type="text" hidden="hidden" value="" name="tad">
								<div class="col-lg-9">
									<button class="btn btn-info" type="submit" name="submit">
										<span class="fa fa-file-pdf-o" aria-hidden="true"> Download PDF</span>
									</button>
								</div>
								<!-- <a type="button" class="btn btn-info" href="{{-- url(''.)--}}"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download PDF</a> -->	
							</form>
						</div>	
						<div class="col-lg-1"></div>
						<div class="col-lg-2">
							<form action="{{url('/incidents/report/excel/downloadExcel')}}" method="POST"> 
								{{ csrf_field() }}
								<input type="text" hidden="hidden" value="" name="taad">
								<div class="col-lg-9">
									<button class="btn btn-success" type="submit" name="submit">
										<span class="fa fa-file-excel-o" aria-hidden="true"> Download Excel</span>
									</button>
								</div>
							</form>
							<!-- <a type="button" class="btn btn-success" href="{{-- url('/incidents/report/excel/downloadExcel') --}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Download Excel</a> -->
						</div>
					</div>
				</div>
				@else
				<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>No New Reception Records Found</strong>
				</div>
				@endif


			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection