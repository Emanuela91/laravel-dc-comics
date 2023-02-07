@extends('layouts.main-layout')

@section('content')
    <a href="{{ route('hero.create') }}">CREATE NEW HERO</a>
    <ul>
        @foreach ($heroes as $hero)
            <li>
                Nome: {{ $hero -> first_name}} {{ $hero -> last_name}} <br>
                Data di nascita: {{ $hero -> date_of_birth}} <br>
                Altezza: {{ $hero -> heigth}}
                <br>
                <a href="{{ route('hero.delete', $hero) }}">Cancel</a>
            </li>
        @endforeach
    </ul>
@endsection