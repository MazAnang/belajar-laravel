@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>

    <ul>
        @foreach ($categories as $category)
            <li>{{ $category }}</li>
        @endforeach
    </ul>

@endsection