@extends('layouts.master')

@section('judul','Edit Genre')

@section('content')
<form action="/genre/{{$genreById->id}}" method="POST">
    @method('put')
    @csrf
    <div class="form-group">
      <label>Genre</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$genreById->name}}">
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection