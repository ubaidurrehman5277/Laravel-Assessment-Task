@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-header"><a href="{{route('api-data')}}">Api Data</a></div>

                    <div class="card-body">
                        <h2>User Profile</h2>
                        <p>Name: {{ auth()->user()->name }}</p>
                        <p>Email: {{ auth()->user()->email }}</p>

                        <h2>External API Data</h2>
                        {{-- Display data from the external API --}}
                        {{-- <pre>{{ json_encode($apiData, JSON_PRETTY_PRINT) }}</pre> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
