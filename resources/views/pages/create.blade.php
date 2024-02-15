@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
   <form action="{{route('users.store')}}" method="POST">
    @csrf
    @method('POST')

    <p>Titolo</p>
    <label for="title"></label>
    <input type="text" name="title"><br>

    <p>Data di uscita</p>
    <label for="release"></label>
    <input type="text" name="release"> <br>

    <p>Prezzo</p>
    <label for="price"></label>
    <input type="text" name="price"> <br>

    <p>Codice a Barre</p>
    <label for="barcode"></label>
    <input type="text" name="barcode"> <br>

    <p>Disponibilitá</p>
    <label for="availability"></label>
    <input type="number" name="availability"> <br>

    <input class="mt-2" type="submit" value="Inserisci">
    
   </form>
@endsection
