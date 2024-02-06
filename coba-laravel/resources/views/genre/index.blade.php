@extends('layouts.master')

@section('judul','Genres')

@section('content')
<a href="/genre/create" class="btn btn-primary btn-sm">Add Genre</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Genre</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($genre as $keys => $item)
        <tr>
            <th scope="row">{{$keys + 1}}</th>
            <td>{{$item->name}}</td>
            <td>
                <form action="/genre/{{$item->id}}" method="post">
                  @csrf
                  @method('delete')
                  <a href="/genre/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @empty
          <tr colspan="3">
            <td>No genre data</td>
          </tr>   
        @endforelse
    </tbody>
  </table>
@endsection