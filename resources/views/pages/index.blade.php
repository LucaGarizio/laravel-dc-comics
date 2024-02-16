@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row">
            <h1 class="mt-4">Fumetti: {{count($comics)}}</h1>
            <div class="btn-container">
            <a href="{{route('comics.create')}}" class="btn btn-primary my-3">Inserisci nuovo fumetto</a>
            </div>
        
            @foreach ($comics as $comic)
            <div class="col-4 ">
                <div class="card bg-success mx-1 my-3">
                    <div class="card-body-top">
                        <h4 class="pt-3 text-warning">Titolo:</h4>
                        <a href="{{route('comics.show', $comic -> id)}}">
                            <p class="mb-1 text-white">{{$comic->title}} </p>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="{{route('comics.edit', $comic -> id)}}"><button class="btn btn-info">Aggiorna</button></a> 
                        <form class="d-inline-block" method="POST" action="{{ route('comics.destroy', $comic -> id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Rimuovi</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
