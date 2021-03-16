@extends('layouts.app')

@section ('titolo', 'Shop')

@section ('content')
<h1>Shop Dresses</h1>
<p>
    @foreach ($vestiti as $vestito)
    <h4>Id capo {{$vestito->Id}}</h4>
    <ul>
        <li>{{$vestito->codice_articolo}}</li>
        <li>{{$vestito->composizione}}</li>
        <li>{{$vestito->dettagli_prodotto}}</li>
        <li>{{$vestito->taglia}}</li>
    </ul>
</p>
@endsection