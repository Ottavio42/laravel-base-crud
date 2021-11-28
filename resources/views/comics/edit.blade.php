@extends('layout.base')

@section('pageContent')

<h1>Modifica il fumetto: {{ $comic["title"]}}</h1>

<form action="{{route("comics.update", $comic["id"])}}" method="POST">
    @csrf
    @method("PUT")

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$comic["title"]}}" placeholder="Insersci titolo">
    </div>

    <div class="form-group">
        <label for="type">Tipo fumetto</label>
        <input type="text" class="form-control" id="type" name="type" value="{{$comic["type"]}}" placeholder="Insersci il tipo di fumetto">
    </div>

    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" value="{{$comic["series"]}}" placeholder="Insersci la serie">
    </div>

    <div class="form-group">
        <label for="description">Descrizione fumetto</label>
        <textarea class="form-control" name="description" value="{{$comic["description"]}}" id="description" cols="30" rows="10" placeholder="Insersci la descrizione"></textarea>
    </div>

    <div class="form-group">
        <label for="thumb">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic["thumb"]}}" placeholder="Insersci l'url dell'immagine">
    </div>

    <div class="form-group">
        <label for="sale_date">Data di uscita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic["sale_date"]}}" placeholder="Insersci la data di uscita">
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" value="{{$comic["price"]}}"  placeholder="Insersci il prezzo">
    </div>

    <button type="submit" class="btn btn-primary">Modifica</button>
</form>
@endsection