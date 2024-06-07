@extends('layout.app')

@section('content')
    @vite(['resources/css/trymejournal.css', 'resources/js/tryjournal.js'])
    <div class="mt-5 bg">
        <div class="col-12 pt-5">
            <div class="row">
                <div class="col-10">
                </div>
                <div class="col-2">
                    <a href="{{ route('trymejournal.create') }}">
                        <button class="btn btn-primary"> Write/Add new Journal</button>
                    </a>
                </div>
            </div>
            <div>
                <h2 class="text-center">All Journals</h2>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <div class="col-2">
                    <form action="{{ route('trymejournal') }}" method="GET" id="sortForm">
                        <div class="input-group">
                            <select class="form-select" name="sort" id="sort">
                                <option value="date_created" @if (request('sort') == 'date_created') selected @endif>Sort by date
                                </option>
                                <option value="mood" @if (request('sort') == 'mood') selected @endif>Sort by mood
                                </option>
                                <option value="title" @if (request('sort') == 'title') selected @endif>Sort by title
                                </option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table">
                <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col" class="col-1">Journal No</th>
                        <th scope="col" class="col-2">Title</th>
                        <th scope="col" class="col-2">Time Created</th>
                        <th scope="col" class="col-2">Mood</th>
                        <th scope="col" class="col-2">Tags</th>
                        <th scope="col" class="col-2">Location</th>
                        <th scope="col" class="col-3">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    {{-- foreach trymejournals with index --}}

                    @foreach ($trymejournals as $index => $trymejournal)
                        <tr>
                            <th scope="row" class="col-1">{{ $index + 1 }}</th>
                            <td class="col-2 text-truncate">{{ $trymejournal->title }}</td>
                            <td class="col-2 text-truncate">{{ $trymejournal->date_created }}</td>
                            <td class="col-2 text-truncate">{{ $trymejournal->mood }}</td>
                            <td class="col-2 text-truncate">{{ $trymejournal->tags }}</td>
                            <td class="col-2 text-truncate">{{ $trymejournal->location }}</td>
                            <td class="col-2">
                                <div class="col d-flex align-items-center">
                                    <div class="col-4">
                                        <a href="{{ route('trymejournal.show', ['tryjournal' => $trymejournal]) }}"
                                            class="btn btn-secondary ">See Journal</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="{{ route('trymejournal.edit', ['tryjournal' => $trymejournal]) }}"
                                            class="btn btn-warning ">Edit Journal</a>
                                    </div>
                                    <div class="col-4">
                                        <form action="{{ route('trymejournal.destroy', ['tj' => $trymejournal]) }}"
                                            method="POST" onsubmit="return confirm('Are you sure you want to delete this journal?')">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" id="delete"
                                                name='delete'>Delete Journal</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
