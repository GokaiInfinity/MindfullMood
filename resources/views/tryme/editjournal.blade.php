@extends('layout.app')

@section('content')
@vite(['resources/js/tryjournal.js', 'resources/css/trymejournal.css'])
    <div class="container my-5 py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card custom-card">
                    <div class="card-header fs-3 text-center">Edit Journal Entry</div>
                    <div class="card-body">
                        <form action="{{ route('trymejournal.update', $tryjournal) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="date_created">Date Created:</label>
                                <input type="datetime-local" class="form-control" id="date_created" name="date_created" value="{{ old('date_created', $tryjournal->date_created ? $tryjournal->date_created->format('Y-m-d\TH:i') : '') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $tryjournal->title) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="content">Content:</label>
                                <textarea class="form-control" id="content" name="content" rows="6" required>{{ old('content', $tryjournal->content) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="font_color">Font Color:</label>
                                <input type="color" class="form-control" id="font_color" name="font_color"
                                    value="{{ old('font_color', '#' . $tryjournal->font_color) }}">
                            </div>

                            <div class="form-group">
                                <label for="font_format">Font Format:</label>
                                <select class="form-control" id="font_format" name="font_format">
                                    <option value="normal" {{ old('font_format') === 'normal' ? 'selected' : '' }}>Normal</option>
                                    <option value="italic" {{ old('font_format') === 'italic' ? 'selected' : '' }}>Italic</option>
                                    <option value="bold" {{ old('font_format') === 'bold' ? 'selected' : '' }}>Bold</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="font_family">Font Family:</label>
                                <select class="form-control" id="font_family" name="font_family">
                                    <option value="Arial" {{ old('font_family') === 'Arial' ? 'selected' : '' }}>Arial</option>
                                    <option value="Calibri" {{ old('font_family') === 'Calibri' ? 'selected' : '' }}>Calibri</option>
                                    <option value="Comic Sans MS" {{ old('font_family') === 'Comic Sans MS' ? 'selected' : '' }}>Comic Sans MS</option>
                                    <option value="Courier New" {{ old('font_family') === 'Courier New' ? 'selected' : '' }}>Courier New</option>
                                    <option value="Georgia" {{ old('font_family') === 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                    <option value="Tahoma" {{ old('font_family') === 'Tahoma' ? 'selected' : '' }}>Tahoma</option>
                                    <option value="Times New Roman" {{ old('font_family') === 'Times New Roman' ? 'selected' : '' }}>Times New Roman</option>
                                    <option value="Verdana" {{ old('font_family') === 'Verdana' ? 'selected' : '' }}>Verdana</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="mood">Mood:</label>
                                <input type="text" class="form-control" id="mood" name="mood" value="{{ old('mood', $tryjournal->mood) }}">
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags:</label>
                                <input type="text" class="form-control" id="tags" name="tags" value="{{ old('tags', $tryjournal->tags) }}">
                            </div>
                            <div class="form-group">
                                <label for="location">Location:</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $tryjournal->location) }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Journal Entry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


