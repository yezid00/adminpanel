@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="{{ route('companies.create') }}" class="btn btn-primary btn-lg">Create new company</a>
                        </div>
                        <div class="col">
                            <a href="{{ route('companies.index') }}" class="btn btn-primary btn-lg">View lists of company</a>
                        </div>
                    </div>
                    
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
