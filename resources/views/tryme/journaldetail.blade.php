@extends('layout.app')

@section('content')
{{-- Generate A Journal Detail --}}
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 py-5 my-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Title: {{ $tryjournal->title }}</h3>
                    <p class="card-text">{{ $tryjournal->content }}</p>
                    <p class="card-text"><strong>Mood:</strong> {{ $tryjournal->mood }}</p>
                    <p class="card-text"><strong>Tags:</strong> {{ $tryjournal->tags }}</p>
                    <p class="card-text"><strong>Location:</strong> {{ $tryjournal->location }}</p>
                    <p class="card-text"><small class="text-muted">Date Created: {{ $tryjournal->date_created }}</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
