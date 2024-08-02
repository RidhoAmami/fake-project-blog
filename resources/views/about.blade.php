@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <img src="img/{{ $source }}" alt="{{ $source }}" class="img-thumbnail rounded-circle">
@endsection