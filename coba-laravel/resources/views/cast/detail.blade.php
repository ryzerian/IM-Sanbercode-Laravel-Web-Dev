@extends('layouts.master')

@section('judul','Casts Detail')

@section('content')
    <h1 class="text-primary"> {{$castById->name}} </h1>
    <h2 class="text-secondary">Age: {{$castById->age}}</h2>
    <p>{{$castById->bio}}</p>
@endsection