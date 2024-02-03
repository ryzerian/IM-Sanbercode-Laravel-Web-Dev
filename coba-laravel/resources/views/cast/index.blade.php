@extends('layouts.master')

@section('judul','Casts')

@section('content')
<a href="/cast/create" class="btn btn-primary btn-sm">Add Cast</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $keys => $item)
        <tr>
            <th scope="row">{{$keys + 1}}</th>
            <td>{{$item->name}}</td>
            <td>
                <form action="/cast/{{$item->id}}" method="post">
                  @csrf
                  @method('delete')
                  <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                  <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Update</a>
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @empty
          <tr colspan="3">
            <td>No data</td>
          </tr>   
        @endforelse
    </tbody>
  </table>
@endsection