@extends('layout.app')

@section('content')
@vite('resources/css/profile.css')
<div class="container mt-5 py-4 bg">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card profilecard-top">
                <div class="card-header fw-bold">User Profile</div>
                <div class="card-body profilecard-body text-center px-3 py-3">
                <img src="{{ asset('storage/' . $user->pfp) }}" class="mx-auto my-5 rounded-circle" alt="Profile Picture" style="width: 128px; height: 128px;"><br>
                    Nothing to see here yet, {{$user->name}}, so have a safe space.
                </div>
            </div>
        </div>
    </div>
</div>

@endsection