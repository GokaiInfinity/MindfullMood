@extends('layout.app')

@section('content')
    <div class="container">
        <div class="card mt-5 pt-5">
            <div class="card-body pt-5">
                <h1 class="card-title">{{ $forum->title }}</h1>
                <div class="media">
                    <img src="{{ asset('storage/' . $forum->pfp) }}" class="mr-3 my-5 rounded-circle" alt="Profile Picture"
                        style="width: 128px; height: 128px;">
                    <div class="media-body">
                        <h5 class="mt-0 my-5">By: {{ $forum->username }}</h5>
                        <br>
                        <small>Date Created: {{ $forum->date_created }}</small>
                        <br>
                        <small>Date Modified: {{ $forum->date_modified }}</small>
                    </div>
                    <div class="my-5 ml-3 fs-3">
                        {{ $forum->content }}
                    </div>
                    @if ($forum->attachments)
                        <p><strong>Attachment:</strong></p>
                        @php
                            $filename = pathinfo($forum->attachments, PATHINFO_FILENAME);
                            $extension = pathinfo($forum->attachments, PATHINFO_EXTENSION);
                            $imageExtensions = ['jpeg', 'jpg', 'png', 'gif', 'svg'];
                        @endphp



                        @if (in_array($extension, $imageExtensions))
                            <img src="{{ asset('storage/' . $forum->attachments) }}" alt="Attachment" class="img-fluid">
                            <p>{{ $filename }}.{{ $extension }}</p>
                        @elseif($extension === 'pdf')
                            <p>{{ $filename }}.{{ $extension }}</p>
                            <a href="{{ asset('storage/' . $forum->attachments) }}" target="_blank">View PDF</a>
                        @else
                            <p>{{ $filename }}.{{ $extension }}</p>
                            <a href="{{ asset('storage/' . $forum->attachments) }}" download>Download Attachment</a>
                        @endif
                    @endif
                </div>
                <div class="mt-3">
                    <span class="badge badge-secondary">{{ $forum->tag }}</span>
                    {{-- <span class="badge badge-secondary">Tag2</span>
                <span class="badge badge-secondary">Tag3</span> --}}
                </div>
            </div>
        </div>
    </div>

@endsection
