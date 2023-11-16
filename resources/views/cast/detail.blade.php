@extends('layout.master')

@section('judul')
Detail Cast
@endsection

@section('content')
<h1>{{$cast->nama}}</h1>
<p>{{$cast->umur}}</p>
<p>{{$cast->bio}}</p>

<a href="/cast" type="submit" class="btn btn-primary btn-sm">Kembali</a>
@endsection