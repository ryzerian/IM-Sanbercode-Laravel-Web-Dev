@extends('layouts.master')

@section('judul','Add Films')

@section('content')
<form action="" method="POST">
    @csrf
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
      @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label>Release Year</label>
      <input type="text" class="form-control @error('release_year') is-invalid @enderror" name="release_year">
      @error('release_year')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
        <label>Casts</label>
        <input type="text" class="form-control @error('release_year') is-invalid @enderror" name="release_year">
        @error('release_year')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
    <div class="form-group">
        <label>Synopsis</label>
        <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" cols="30" rows="10"></textarea>
        @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection