@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
<section class="bg-success">
    <div class="row justify-content-center align-items-center" style="width: 100%; height:100vh;">
        <div class="col">
            <div class="card py-2 bg-success border-0">
                <h2 class="">Titolo:</h2>
                <h2 class="text-white">{{$comic->title}}</h2>
                <hr>
                <h3 >Anno di Rilascio:</h3>
                <span class="text-white">{{$comic->release}}</span>
                <hr>
                <h3>Prezzo:</h3>
                <span class="text-white">{{$comic->price}} Euro</span> 
                <hr>
                <h3>Bar-code:</h3>
                <span class="text-white">{{$comic->barcode}} </span>
                <hr>
                <h3>Copie disponibili:</h3>
                <span class="text-white">{{$comic ->availability}}</span>
                <hr>
            </div>   
            <a href="{{route('comics.index')}}" class="btn btn-primary" style="width: 200px">Home</a>
        </div>
    </div>
</section>
@endsection
