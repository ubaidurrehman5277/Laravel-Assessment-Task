@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Display data from the external API</div>
                    <div class="card-header"><a href="{{route('home')}}">Dashboard</a></div>

                    <div class="card-body">

                        <h2>External API Data Fake Posts</h2>
                        {{-- Display data from the external API --}}
                         <table border="1" class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <td>User ID</td>
                                    <td>ID</td>
                                    <td>Post Title</td>
                                    <td>Post Body</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post['userId']}}</td>
                                        <td>{{$post['id']}}</td>
                                        <td> {{$post['title']}} </td>
                                        <td> {{ $post['body'] }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
