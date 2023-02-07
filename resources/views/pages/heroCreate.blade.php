@extends('layouts.main-layout')

{{-- form per creare il nuovo eroe --}}
@section('content')
    
    <h1>New hero</h1>
    <form method="POST" action="{{ route('hero.store') }}">
        @csrf
        <label for="first_name">Name</label>
        <input type="text" name="first_name">
        <br>
        <label for="last_name">Cognome</label>
        <input type="text" name="last_name">
        <br>
        <label for="date_of_birth">Data di Nascita</label>
        <input type="date" name="date_of_birth">
        <br>
        <label for="heigth">Altezza</label>
        <input type="number" name="heigth">
        <br>
        <input type="submit" value="CREATE NEW HERO">
    </form>

@endsection