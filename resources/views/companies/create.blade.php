@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-9">
			{!! Form::open(['action'=>'CompanyController@store','method'=>'POST']) !!}
		<div class="form-group">
			{{ form::label('name','Name') }}
			{{ form::text('name',null,['class'=>'form-control']) }}
		</div>
		<div class="form-group">
			{{ form::label('email','Email') }}
			{{ form::text('email',null,['class'=>'form-control']) }}
		</div>
		<div class="form-group">
			{{ form::label('address','Address') }}
			{{ form::text('address',null,['class'=>'form-control']) }}
		</div>
		<div class="form-group">
			{{ form::label('website','Website') }}
			{{ form::text('website',null,['class'=>'form-control']) }}			
		</div>
		{{ form::submit('Add company',['class'=>' btn btn-primary']) }}
	{!! form::close() !!}

		</div>
	</div>
	

@endsection