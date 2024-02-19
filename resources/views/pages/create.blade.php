@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
<section class="bg-success">
    <div class="row justify-content-center align-items-center" style="width: 100%; height:100vh;">
        <div class="col bg-success">
            <h2>Inserisci Nuovo Fumetto</h2>
            <div class="card bg-success border-0">
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    @method('POST')

                    <p class="mt-3">Titolo</p>
                    <label for="title"></label>
                    <input style="width: 350px" type="text" class="ps-1" name="title">
                    @error('title')
                    <div class="alert text-white">{{ $message}}</div>  
                    @enderror

                    <p class="mt-2">Data di uscita</p>
                    <label for="release"></label>
                    <input style="width: 350px" type="text" class="ps-1" name="release">
                    @error('release')
                    <div class="alert text-white">{{ $message}}</div>  
                    @enderror

                    <p class="mt-2">Prezzo</p>
                    <label for="price"></label>
                    <input style="width: 350px" type="text" class="ps-1" name="price">
                    @error('price')
                    <div class="alert text-white">{{ $message}}</div>  
                    @enderror

                    <p class="mt-2">Codice a Barre</p>
                    <label for="barcode"></label>
                    <input style="width: 350px" type="text" class="ps-1" name="barcode">
                    @error('barcode')
                    <div class="alert text-white">{{ $message}}</div>  
                    @enderror

                    <p class="mt-2">Disponibilitá</p>
                    <label for="availability"></label>
                    <input style="width: 350px" type="number" name="availability"><br>
                   
                    <input class="mt-4 btn btn-primary" type="submit" value="Inserisci">
                </form>
            </div>   
        </div>
    </div>
</section>
@endsection
