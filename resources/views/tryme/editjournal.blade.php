@extends('layout.app')

@section('content')
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Journal Entry</div>
                    <div class="card-body">
                        <form action="{{ route('trymejournal.update', $tryjournal) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $tryjournal->date) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $tryjournal->title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content:</label>
                                <textarea class="form-control" id="content" name="content" rows="6" required>{{ old('content', $tryjournal->content) }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Journal Entry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
