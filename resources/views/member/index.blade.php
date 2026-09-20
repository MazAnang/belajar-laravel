@extends('layouts.app')

@section('content')

    <h1>{{ $title }}</h1>

    <ul>
        @foreach ($members as $member)
            <li>{{ $member }}</li>
        @endforeach
    </ul>

@endsection