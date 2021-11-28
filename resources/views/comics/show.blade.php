@extends('layout.base')

@section('pageContent')

<h1>{{$comic["title"]}}</h1>
<h2>Serie: {{$comic["series"]}}</h2>
<p>{{$comic["description"]}}</p>
<p>Prezzo: {{$comic["price"]}} €</p>
<p>Data di uscita: {{$comic["sale_date"]}}</p>

@endsection