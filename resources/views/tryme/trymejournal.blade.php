@extends('layout.app')

@section('content')
    @vite('resources/css/trymejournal.css')
    <div class="mt-5">
        <div class="col-12 pt-5">
            <div class="row">
                <div class="col-10">
                </div>
                <div class="col-2">
                    <a href="{{ route('addtrymejournal') }}">
                        <button class="btn btn-primary"> Write/Add new Journal</button>
                    </a>
                </div>
            </div>
            <div>
                <h2 class="text-center">My Journals</h2>
            </div>
            <table class="table">
                <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col" class="col-1">Journal No</th>
                        <th scope="col" class="col-2">Title</th>
                        <th scope="col" class="col-4">Content</th>
                        <th scope="col" class="col-2">Date</th>
                        <th scope="col" class="col-3">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    {{-- foreach trymejournals with index --}}

                    @foreach ($trymejournals as $index => $trymejournal)
                        <tr>
                            <th scope="row" class="col-1">{{ $index + 1 }}</th>
                            <td class="col-2 text-truncate">{{ $trymejournal->title }}</td>
                            <td class="col-4 text-truncate">
                                {{ $trymejournal->content }}
                            </td>
                            <td class="col-2 text-truncate">{{ $trymejournal->date }}</td>
                            <td class="col-3 text-truncate">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="{{ route('trymejournal.show', ['tryjournal' => $trymejournal]) }}" class="btn btn-secondary">See Journal</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="{{ route('trymejournal.edit', ['tryjournal' => $trymejournal]) }}" class="btn btn-warning">Edit Journal</a>
                                    </div>
                                    <div class="col-4">
                                        <form action="{{ route('trymejournal.destroy', ['tj' => $trymejournal]) }}" method="POST" style="display: inline-block;">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" id="delete" name='delete'>Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
</div>
