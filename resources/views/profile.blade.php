@extends('layout.app')

@section('content')
@vite('resources/css/profile.css')
<div class="container mt-5 bg">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card profilecard-top">
                <div class="card-header">User Profile</div>

                <div class="card-body profilecard-body">
                    Nothing to see here yet, {{$user->name}}.
                </div>
            </div>
        </div>
    </div>
</div>

@endsection