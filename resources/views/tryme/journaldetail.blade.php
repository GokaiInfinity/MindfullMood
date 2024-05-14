@extends('layout.app')

@section('content')
@vite('resources/css/try.css')
{{-- Generate A Journal Detail --}}
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 py-5 my-5">
            <a href="{{ route('trymejournal') }}" class="btn btn-primary mb-3">< Back</a>
            <div class="card">
                <div class="card-body">
                    <hr>
                    <h2>Title:</h2>
                    <h3 class="card-title" style="color: {{ $tryjournal->font_color }}; font-family: {{ $tryjournal->font_family }}; font-style: {{ $tryjournal->font_format }}; ">{{ $tryjournal->title }}</h3>
                    <hr>
                    <p class="card-text" style="color: {{ $tryjournal->font_color }}; font-family: {{ $tryjournal->font_family }}; font-style: {{ $tryjournal->font_format }}; ">{{ $tryjournal->content }}</p>
                    <hr>
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
