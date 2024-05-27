@extends('layout.app')

@section('content')
@vite('resources/css/app.css')
@include('HomeComponents.welcomepart')
@include('HomeComponents.part1')
@include('HomeComponents.part2')
@include('HomeComponents.part3')
@endsection
