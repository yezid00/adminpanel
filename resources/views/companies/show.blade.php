@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-9">
			<h2>Welcome to {{ $company->name }}</h2>
			<div>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Firstname</th>
							<th scope="col">Lastname</th>
							<th scope="col">Email</th>
							<th scope="col">Phone</th>
							<th></th>
						</tr>
						<tbody>
							@foreach($company->employees as $employee)
								<tr>
									<th scope="row">{{ $employee->id }}</th>
									<td>{{ $employee->firstname }}</td>
									<td>{{ $employee->lastname }}</td>
									<td>{{ $employee->email }}</td>
									<td>{{ $employee->phone }}</td>
									<td>
										<div class="row">
											<div class="col">
												<a href="{{ route('employees.edit',$employee->id) }}" class="btn btn-primary btn-sm">Edit</a>
											</div>
											
											<div class="col">
												{!! Form::open(['action'=>['EmployeeController@destroy',$employee->id],'method'=>'DELETE']) !!}
													{{ form::submit('Delete',['class'=>'btn btn-danger btn-sm']) }}
												{!! form::close() !!}
											</div>
											
										</div>
									</td>
								</tr>
							@endforeach
						</tbody>
					</thead>
				</table>
			</div>
		</div>
		
	</div>	
@endsection