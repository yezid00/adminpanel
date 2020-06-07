@extends('layouts.app')

@section('content')
     
    <h4 class="lead">List of companies</h4>
    <div class="table-wrapper">
        @if(count($companies)>0)
            <table class="table">
                <caption>Companies list</caption>

                <thead>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Website</th>
                    <th>Email</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                        <tr>
                        <td><a href="{{ route('companies.show',$company->id) }}">{{ $company->name }}</a></td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->website }}</td>
                        <td>{{ $company->email }}</td>
                        @if(!Auth::guest())
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('companies.edit',$company->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                                <div class="col">
                                    {!! Form::open(['action'=>['CompanyController@destroy',$company->id],'method'=>'DELETE']) !!}
                            {{ form::submit('Delete',['class'=>'btn btn-danger btn-sm']) }}
                            {!! form::close() !!}
                                </div>
                            </div>
                            
                            
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $companies->links() }}
        @else
            <h2>No Companies on ground</h2>
        @endif    
   
    </div>
         
	
@endsection