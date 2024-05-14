@extends('layout.app')

@section('content')
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Journal Entry</div>

                    <div class="card-body">
                        <form action="{{ route('trymejournal.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="date_created">Date Created:</label>
                                <input type="datetime-local" class="form-control" id="date_created" name="date_created"
                                    value="{{ old('date_created') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="content">Content:</label>
                                <textarea class="form-control" id="content" name="content" rows="6" required>{{ old('content') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="mood">Mood:</label>
                                <input type="text" class="form-control" id="mood" name="mood"
                                    value="{{ old('mood') }}">
                            </div>

                            <div class="form-group">
                                <label for="tags">Tags:</label>
                                <input type="text" class="form-control" id="tags" name="tags"
                                    value="{{ old('tags') }}">
                            </div>

                            <div class="form-group">
                                <label for="location">Location:</label>
                                <input type="text" class="form-control" id="location" name="location"
                                    value="{{ old('location') }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Save Journal Entry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
