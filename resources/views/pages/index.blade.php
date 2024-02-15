@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Fumetti: {{count($comics)}}</h1>
    <a href="{{route('users.create')}}" class="btn btn-success">Inserisci nuovo fumetto</a>
    <ul>
        @foreach ($comics as $comic)
            <li>
                
               Titolo: <br> 
               <a href="{{route('users.show', $comic -> id)}}
                ">{{$comic->title}} 
                </a> 
            </li>
            <br>
        @endforeach
    </ul>
@endsection
