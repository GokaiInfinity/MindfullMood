@extends('layout.app')

@vite('resources/css/forum.css')

@section('content')
<div class="container mt-5 pt-5">
    <div class="container">
        <div class="row my-4">
            <div class="col-md-8  offset-md-2">
                <div class="card shadowie">
                    <div class="row no-gutters ">
                        <div class="col-md-4 p-3 ">
                            <div class="row d-flex justify-content-center">
                                <img src="{{ asset('storage/notfound.jpg') }}" class="card-img w-75 rounded-circle py-2" alt="..."> 
                                <h3 class="card-text text-center">Username</h3>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h3 class="card-title">Idk what to do anymore</h3>
                                <p class="card-text">I'm just a test subject</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-4">
            <div class="col-md-8  offset-md-2">
                <div class="card shadowie">
                    <div class="row no-gutters">
                        <div class="col-md-4 p-3 ">
                            <div class="row d-flex justify-content-center">
                                <img src="{{ asset('storage/notfound.jpg') }}" class="card-img w-75 rounded-circle py-2" alt="..."> 
                                <h3 class="card-text text-center">Username</h3>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <h3 class="card-title">Idk what to do anymore</h3>
                                <p class="card-text">I'm just a test subject</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection