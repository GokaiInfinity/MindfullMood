@extends('layout.app')

@section('content')
{{-- Generate A Journal Detail --}}
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 py-5 my-5">
            <div class="card">
                <div class="card-header">
                    Journal Detail
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $tryjournal->title }}</h5>
                    <p class="card-text">{{ $tryjournal->content }}</p>
                    <p class="card-text"><small class="text-muted">Date: {{ $tryjournal->date }}</small></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
