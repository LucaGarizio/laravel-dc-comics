@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-5 bg-success mt-5">
        <div class="card bg-success border-0">
            <h2 class="mt-3">Titolo:</h2>
            <h2 class="text-white">{{$comic->title}}</h2>
            <hr>
            <h3 >Anna di Rilascio: {{$comic->release}} </h3>
            <hr>
            <h3>Prezzo: {{$comic->price}} Euro</h3> 
            <hr>
            <h3>Bar-code: {{$comic->barcode}} </h3>
            <hr>
            <h3>Copie disponibili: {{$comic ->availability}}</h3>
        </div>   
    </div>
</div>

<a href="{{route('comics.index')}}" class=" mt-4 btn btn-primary">Home</a>
@endsection
