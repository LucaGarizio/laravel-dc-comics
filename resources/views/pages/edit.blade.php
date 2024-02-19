@extends('layouts.main-layout')
@section('head')
    <title>Edit</title>
@endsection
@section('content')
<section class="bg-success">
    <div class="row justify-content-center align-items-center" style="width: 100%; height:100vh;">
        <div class="col">
            <div class="card bg-success border-0">
                <h2>Modifica Dati Fumetto</h2>
                <form action="{{route('comics.update', $comic -> id)}}" 
                    method="POST">
                    @csrf
                    @method('PUT')

                    <p class="mt-4"> ID: {{$comic -> id}} <br> Titolo</p>
                    <label for="title"></label>
                    <input style="width: 350px" class="ps-1" type="text" name="title" value="{{$comic -> title}}">
                    @error('title')
                    <div class="alert text-white">{{ $message}}</div>  
                    @enderror

                    <p>Data di uscita</p>
                    <label for="release"></label>
                    <input style="width: 350px" class="ps-1" type="text" name="release" value="{{$comic -> release}}">
                    @error('release')
                    <div class="alert text-white">{{ $message}}</div>  
                    @enderror

                    <p>Prezzo</p>
                    <label for="price"></label>
                    <input style="width: 350px" class="ps-1" type="text" name="price" value="{{$comic -> price}}">
                    @error('price')
                    <div class="alert text-white">{{ $message}}</div>  
                    @enderror

                    <p>Codice a Barre</p>
                    <label for="barcode"></label>
                    <input style="width: 350px" class="ps-1" type="text" name="barcode" value="{{$comic -> barcode}}">

                    <p>Disponibilitá</p>
                    <label for="availability"></label>
                    <input style="width: 350px" class="ps-1" type="number" name="availability" value="{{$comic ->availability}}"> <br>
                    @error('barcode')
                    <div class="alert text-white">{{ $message}}</div>  
                    @enderror

                    <input class="mt-2 btn btn-primary" type="submit" value="Aggiorna">
                    
                </form>
            </div>   
        </div>
    </div>
</section>
@endsection
