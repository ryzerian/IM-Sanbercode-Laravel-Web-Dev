@extends('layouts.master')

@section('judul','Edit Casts')

@section('content')
<form action="/cast/{{$castById->id}}" method="POST">
    @method('put')
    @csrf
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$castById->name}}">
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label>Age</label>
      <input type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{$castById->age}}">
      @error('age')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" cols="30" rows="10">{{$castById->bio}}</textarea>
        @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection