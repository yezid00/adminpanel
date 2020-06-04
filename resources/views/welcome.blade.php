@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container wrapper">
            <h2 class="display-4">Admin Panel</h2>
            <p class="lead">Built with Laravel</p>
            <p>By Yezid</p>
        </div>
        <hr> 
        <div class="container">
            <div class="row">
                <div class="col cp-col">
                    <p class="lead">Click below to see all companies</p>
                    <a href="{{ route('companies.index') }}" class="btn btn-primary btn-lg cp">List of companies</a>
                </div>
                
            </div>
            
            
        </div>
    </div>

@endsection
