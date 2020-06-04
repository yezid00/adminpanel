@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-8">
			{!! Form::open(['action'=>['EmployeeController@update',$employee->id],'method'=>'
			POST']) !!}

			<div class="row">
				<div class="col">
					<div class="form-group">
						{{ form::label('firstname','Firstname') }}
						{{ form::text('firstname',$employee->firstname,['class'=>'form-control']) }}
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						{{ form::label('lastname','Lastname') }}
						{{ form::text('lastname',$employee->lastname,['class'=>'form-control']) }}
					</div>
					
				</div>
			</div>

			<div class="row">
				<div class="col">
					<div class="form-group">
						{{ form::label('email','Email') }}
						{{ form::text('email',$employee->email,['class'=>'form-control']) }}
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						{{ form::label('phone','Phone') }}
						{{ form::text('phone',$employee->phone,['class'=>'form-control']) }}
					</div>
				</div>
			</div>
			
			<div class="form-group">
				{{ form::label('company_id','Company') }}
				<select class="form-control" name="company_id">
					@foreach($companies as $company)
						<option value="{{ $company->id }}">
							{{ $company->name }}
						</option>
					@endforeach
				</select>
			</div>
			{{ form::submit('Add employee',['class'=>'btn btn-primary']) }}
			{{ form::hidden('_method','PUT') }}			
			{!! form::close() !!}
		</div>
		
	</div>
@endsection