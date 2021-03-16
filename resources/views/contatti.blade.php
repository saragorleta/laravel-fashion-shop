@extends('layouts.app')

@section ('titolo', 'homepage')

@section ('content')
<h1>Pagina dei contatti</h1>
<p>{{$email}}, {{$tel}}</p>
@endsection