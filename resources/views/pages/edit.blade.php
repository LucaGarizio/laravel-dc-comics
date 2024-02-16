@extends('layouts.main-layout')
@section('head')
    <title>Edit</title>
@endsection
@section('content')
<div class="row justify-content-center">
    <h2 class="mt-4">Modifica Dati Fumetto</h2>
    <div class="col-5 bg-success">
        <div class="card bg-success border-0">
            <form action="{{route('comics.update', $comic -> id)}}" 
                method="POST">
                @csrf
                @method('PUT')

                <p class="mt-4"> ID: {{$comic -> id}} -- Titolo</p>
                <label for="title"></label>
                <input type="text" name="title" value="{{$comic -> title}}">

                <p>Data di uscita</p>
                <label for="release"></label>
                <input type="text" name="release" value="{{$comic -> release}}">

                <p>Prezzo</p>
                <label for="price"></label>
                <input type="text" name="price" value="{{$comic -> price}}">

                <p>Codice a Barre</p>
                <label for="barcode"></label>
                <input type="text" name="barcode" value="{{$comic -> barcode}}">

                <p>Disponibilitá</p>
                <label for="availability"></label>
                <input type="number" name="availability" value="{{$comic ->availability}}"> <br>

                <input class="mt-2 btn btn-primary" type="submit" value="Aggiorna">
                
               </form>
        </div>   
    </div>
</div>
@endsection
