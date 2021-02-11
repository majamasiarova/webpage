@extends('layouts.layout')

@section('content')
    <h1>Pridávanie inzerátu</h1>
    <form action="{{route('ad.create')}}" method="POST">
        @csrf

        <label for="pridavanie">Pridávanie inzerátu</label>
        <textarea id="pridavanie" name="textField" rows="10" cols="50">
  Sem napíšte text inzerátu.
  </textarea> <br><br>

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputNazov">Názov:</label>
                <input type="text" name="nazov" class="form-control" id="inputNazov" placeholder="Vyplňte názov">
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputCena">Cena:</label>
                    <input type="number" name="cena" class="form-control" id="inputCena" placeholder="Vyplňte cenu">
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputLokalita">Lokalita:</label>
                        <input type="text" name="lokalita" class="form-control" id="inputLokalita" placeholder="Napíšte lokalitu">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputLokalita">Kategória:</label>
                            <input type="text" name="kategoria" class="form-control"  id="inputLokalita" placeholder="Napíšte
                            kategóriu">
                        </div>

                        <br><br>
                        <input type="submit" value="Uložiť">

    <p>Po kliknutí tlačidla uložiť sa inzerát uloží a pridá k ostatným.</p>


@endsection
