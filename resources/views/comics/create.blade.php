@extends('layout.base')

@section('pageContent')

<h1>Inserisci un nuovo fumetto</h1>

<form action="{{route("comics.store")}}" method="POST">
    @csrf

    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Insersci titolo">
    </div>

    <div class="form-group">
        <label for="type">Tipo fumetto</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Insersci il tipo di fumetto">
    </div>

    <div class="form-group">
        <label for="series">Serie</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Insersci la serie">
    </div>

    <div class="form-group">
        <label for="description">Descrizione fumetto</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Insersci la descrizione"></textarea>
    </div>

    <div class="form-group">
        <label for="thumb">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insersci l'url dell'immagine">
    </div>

    <div class="form-group">
        <label for="sale_date">Data di uscita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Insersci la data di uscita">
    </div>

    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Insersci il prezzo">
    </div>

    <button type="submit" class="btn btn-primary">Crea</button>
</form>
@endsection