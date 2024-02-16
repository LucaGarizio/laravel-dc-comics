@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
<div class="row justify-content-center" style="width: 100%; height:100vh;">
    <div class="col bg-success">
        <h2 class="mt-4">Inserisci Nuovo Fumetto</h2>
        <div class="card bg-success border-0">
            <form action="{{route('comics.store')}}" method="POST">
                @csrf
                @method('POST')

                <p class="mt-4">Titolo</p>
                <label for="title"></label>
                <input type="text" name="title">

                <p>Data di uscita</p>
                <label for="release"></label>
                <input type="text" name="release">

                <p>Prezzo</p>
                <label for="price"></label>
                <input type="text" name="price">

                <p>Codice a Barre</p>
                <label for="barcode"></label>
                <input type="text" name="barcode">

                <p>Disponibilitá</p>
                <label for="availability"></label>
                <input type="number" name="availability"><br>

                <input class="mt-4 btn btn-primary" type="submit" value="Inserisci">
            </form>
        </div>   
    </div>
</div>

@endsection
