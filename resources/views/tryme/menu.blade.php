@extends('layout.app')

@section('content')
    @vite('resources/css/tryme.css')
    <div class="container pt-5 bg-menu">
        <div class="col">
            <div class="row py-5">
                <div class="fs-2 text-center fw-bold text-white">
                    Try These Features
                </div>
            </div>
            <div class="row">

                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/Journal.jpeg') }}" alt="My Journal Image">
                        <div class="card-body">
                            <h3 class="card-title">My Journal</h3>
                            <a href="{{ route('trymejournal') }}" class="stretched-link"></a>
                            <p class="card-text">My Journal stores your personal journal online. Click this card to try.</p>
                        </div>
                    </div>

                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/Community.webp') }}" alt="My Journal Image">
                        <div class="card-body">
                            <h3 class="card-title">Forum</h3>
                            <a href="{{ route('forum') }}" class="stretched-link"></a>
                            <p class="card-text">Browse the Forum and meet other people online.</p>
                        </div>
                    </div>

                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/Psikolog.jpeg') }}" alt="My Psikolog Image">
                        <div class="card-body">
                            <h3 class="card-title">My Psikolog</h3>
                            <a href="{{ route('trymepsikolog') }}" class="stretched-link"></a>
                            <p class="card-text">Psikolog list to see all the psikolog who will help you.</p>
                        </div>
                    </div>
            </div>


            <div class="row py-5">
            </div>
        </div>
    </div>
@endsection
