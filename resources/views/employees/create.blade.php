@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-8">
			{!! Form::open(['action'=>'EmployeeController@store','method'=>'
			POST']) !!}

			<div class="row">
				<div class="col">
					<div class="form-group">
						{{ form::label('firstname','Firstname') }}
						{{ form::text('firstname',null,['class'=>'form-control']) }}
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						{{ form::label('lastname','Lastname') }}
						{{ form::text('lastname',null,['class'=>'form-control']) }}
					</div>
					
				</div>
			</div>

			<div class="row">
				<div class="col">
					<div class="form-group">
						{{ form::label('email','Email') }}
						{{ form::text('email',null,['class'=>'form-control']) }}
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						{{ form::label('phone','Phone') }}
						{{ form::text('phone',null,['class'=>'form-control']) }}
					</div>
				</div>
			</div>
			
			<div class="form-group">
				{{ form::label('company_id','Company') }}
				<select class="custom-select custom-select-lg" name='company_id'>
					@foreach($companies as $company)

						<option value="{{ $company->id }}">

							{{ $company->name }}

						</option>

					@endforeach
				</select>
			</div>
			{{ form::submit('Add employee',['class'=>'btn btn-primary']) }}			
			{!! form::close() !!}
		</div>
		
	</div>
@endsection