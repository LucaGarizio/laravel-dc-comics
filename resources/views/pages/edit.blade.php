@extends('layouts.main-layout')
@section('head')
    <title>Edit</title>
@endsection
@section('content')
   <form action="{{route('comics.update', $comic -> id)}}" 
    method="POST">
    @csrf
    @method('PUT')
   
    <p class="mt-4"> ID: {{$comic -> id}} -- Titolo</p>
    <label for="title"></label>
    <input type="text" name="title" value="{{$comic -> title}}"><br>

    <p>Data di uscita</p>
    <label for="release"></label>
    <input type="text" name="release" value="{{$comic -> release}}"> <br>

    <p>Prezzo</p>
    <label for="price"></label>
    <input type="text" name="price" value="{{$comic -> price}}"> <br>

    <p>Codice a Barre</p>
    <label for="barcode"></label>
    <input type="text" name="barcode" value="{{$comic -> barcode}}"> <br>

    <p>Disponibilitá</p>
    <label for="availability"></label>
    <input type="number" name="availability" value="{{$comic -> availability}}"> <br>

    <input class="mt-2" type="submit" value="Aggiorna">
    
   </form>
@endsection
