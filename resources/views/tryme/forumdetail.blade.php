@extends('layout.app')

@section('content')
<div class="container">
    <div class="card mt-5 pt-5">
        <div class="card-body pt-5">
            <h1 class="card-title">{{$forum->title}}</h1>
            <div class="media">
                <img src="profile-picture.jpg" class="mr-3 my-5" alt="Profile Picture" style="width: 64px; height: 64px;">
                <div class="media-body">
                    <h5 class="mt-0 my-5">By: {{$forum->username}}</h5>
                    <br>
                    <small>Date Created: {{$forum->date_created}}</small>
                    <br>
                    <small>Date Modified: {{$forum->date_modified}}</small>
                </div>
                <div class="my-5 ml-3 fs-3">
                {{$forum->content}}
                </div>
            </div>
            <div class="mt-3">
                <span class="badge badge-secondary">Tag1</span>
                {{-- <span class="badge badge-secondary">Tag2</span>
                <span class="badge badge-secondary">Tag3</span> --}}
            </div>
        </div>
    </div>
</div>

@endsection
