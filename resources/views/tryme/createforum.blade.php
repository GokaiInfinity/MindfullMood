@extends('layout.app')

@section('content')
<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card custom-card">
                <div class="card-header fs-4 text-center">Create Forum</div>

                <div class="card-body">
                    <form action="{{ route('forum.store') }}" method="POST">
                        @csrf

                        <div class="form-group ">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title') }}" required placeholder="What are you thinking today?">
                        </div>

                        <div class="form-group ">
                            <label for="content">Content:</label>
                            <textarea class="form-control" id="content" name="content" rows="6" required placeholder="What do you want to say?">{{ old('content') }}</textarea>
                        </div>


                        <div class="form-group ">
                            <label for="mood">Mood:</label>
                            <input type="text" class="form-control" id="mood" name="mood" placeholder="How are you feeling today?">
                            <emoji-picker id="emoji-picker"></emoji-picker>
                        </div>

                        <div class="form-group">
                            <label for="tags">Tags:</label>
                            <input type="text" class="form-control" id="tags" name="tags"
                                value="{{ old('tags') }}" placeholder="Enter tags separated by commas(Optional)">
                        </div>

                        <button type="submit" class="btn btn-primary my-3">Post Forum</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
