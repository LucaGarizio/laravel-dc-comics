@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')

        <h2>Titolo: <br> {{$comic->title}}</h2>
        <h3>Anna di Rilascio: {{$comic->release}} </h3>
        <h3>Prezzo: {{$comic->price}} Euro</h3> 
        <h3>Bar-code: {{$comic->barcode}} </h3>
        <h3>Copie disponibili: {{$comic ->availability}}</h3>
@endsection
