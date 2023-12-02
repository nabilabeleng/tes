@extends('layout.master')

@section('judul')
Buat Data Pemain Film Baru!
@endsection

@section('content')
<form action="/cast" method="POST">
    @csrf
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="name" class="form-control">
    </div>
    @error('name')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label>Umur</label>
        <input type="text" name="umur" class="form-control">
    </div>
    @error('umur')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
    </div>
    @error('bio')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection