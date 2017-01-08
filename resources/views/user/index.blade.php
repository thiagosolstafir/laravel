@extends('user.base')
@section('title', 'Bar page')

@section('container')
    <h2>Bar</h2>

    <ul>
        @foreach($users as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endsection