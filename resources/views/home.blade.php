@extends('layout.base')

@section('content')
    <h1>Home</h1>
    <ul>
        <li>
            <a href="{{route('home')}}">Home</a>
        </li>
        <li>
            <a href="{{route('about')}}">About Us</a>
        </li>
        <li>
            <a href="{{route('contact')}}">Contact Us</a>
        </li>
    </ul>
@endsection