@extends('layout.app')

@section('content')
    @vite('resources/css/tryme.css')
    <div class="container pt-5">
        <div class="col">
            <div class="row py-5">
            </div>
            <div class="row">

                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="URL_OF_YOUR_IMAGE_1" alt="My Journal Image">
                        <div class="card-body">
                            <h3 class="card-title">My Journal</h3>
                            <a href="{{ route('trymejournal') }}" class="stretched-link"></a>
                            <p class="card-text">My Journal stores your personal journal online. Click this card to try.</p>
                        </div>
                    </div>

                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top" src="URL_OF_YOUR_IMAGE_2" alt="My Psikolog Image">
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
