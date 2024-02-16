@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Fumetti: {{count($comics)}}</h1>
    <a href="{{route('users.create')}}" class="btn btn-success my-3">Inserisci nuovo fumetto</a>
    <ul>
        @foreach ($comics as $comic)
            <li>
                
               <h4>Titolo:</h4>
               <a href="{{route('users.show', $comic -> id)}}
                "><p class="mb-4">{{$comic->title}} </p>
                </a> 
            </li>
            
        @endforeach
    </ul>
@endsection
