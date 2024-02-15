@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Fumetti: {{count($comics)}}</h1>

    <ul>
        @foreach ($comics as $comic)
            <li>
                titolo: {{$comic->title}} <br>
               data di stampa: {{$comic ->release_year}} <br>
               prezzo: {{$comic -> price}} <br>
               bar-code: {{$comic -> barcode}} <br>
               copie disponibili: {{$comic -> disponibilità}}
            </li>
            <br>
        @endforeach
    </ul>
@endsection
