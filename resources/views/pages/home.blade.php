@extends('layouts.main-layout')

@section('content')
    <ul>
        @foreach ($heroes as $hero)
            <li>Nome: {{ $hero -> first_name}} {{ $hero -> last_name}} <br>
            Data di nascita: {{ $hero -> date_of_birth}} <br>
            Altezza: {{ $hero -> heigth}}</li>
        @endforeach
    </ul>
@endsection