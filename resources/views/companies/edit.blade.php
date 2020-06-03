@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-9">
			{!! Form::open(['action'=>['CompanyController@update',$company->id],'method'=>'PUT']) !!}
		<div class="form-group">
			{{ form::label('name','Name') }}
			{{ form::text('name',$company->name,['class'=>'form-control']) }}
		</div>
		<div class="form-group">
			{{ form::label('email','Email') }}
			{{ form::text('email',$company->email,['class'=>'form-control']) }}
		</div>
		<div class="form-group">
			{{ form::label('address','Address') }}
			{{ form::text('address',$company->address,['class'=>'form-control']) }}
		</div>
		<div class="form-group">
			{{ form::label('website','Website') }}
			{{ form::text('website',$company->website,['class'=>'form-control']) }}			
		</div>
		{{ form::submit('Update company',['class'=>' btn btn-primary']) }}
	{!! form::close() !!}

		</div>
	</div>
	

@endsection