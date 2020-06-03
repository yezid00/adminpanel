@extends('layouts.app')

@section('content')
    <div>
        <a href="{{ route('home') }}" class="btn btn-primary">Dashboard</a>
    </div>
    
    <br>
    <div>
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
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->address }}</td>
                                    <td><a href="{{ $company->website }}">{{ $company->website }}</a></td>
                                    <td>{{ $company->email }}</td>
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