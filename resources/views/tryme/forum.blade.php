@extends('layout.app')



@section('content')
@vite('resources/css/forum.css')
<div class="row col-md-12 mt-5">
    <div class="col-md-2">
    </div>
    <div class="col-md-8 mt-5">
        <h1 class="text-center text-white mx-4">MindfullMood Forum</h1>
    </div>
    <div class="col-md-2 mt-5">
        <a href="{{ route('forum.create') }}" class="btn btn-primary float-right">Post a forum</a>
    </div>
</div>

<div class="container mt-5 pt-5">
    @foreach ($forums as $forum)
    <div>
        <div class="row my-4">
            <div class="col-md-12">
                <a href="{{ route('forum.show', ['forum' => $forum]) }}" class="text-decoration-none">
                    <div class="card shadowie py-5">
                        <div class="row no-gutters ">
                            <div class="col-md-4 p-3 ">
                                <div class="row d-flex justify-content-center">
                                    <img src="{{ asset('storage/' . $forum->pfp) }}" class="card-img w-75 rounded-circle py-2 overflow-hidden" alt="Profile Picture">
                                    <h3 class="card-text text-center">{{$forum->username}}</h3>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h3 class="card-title">{{$forum->title}}</h3>
                                    <p class="card-text">{{$forum->content}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection

