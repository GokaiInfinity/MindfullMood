@extends('layout.app')

@section('content')
@vite(['resources/css/donate.css','resources/js/donatescript.js'])
@include('DonateComponents.body')
@endsection
