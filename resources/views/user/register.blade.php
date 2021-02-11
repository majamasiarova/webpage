@extends('layouts.layout')

@section('content')
    <h1>Registrácia</h1>
    <form action="{{route('user.create')}}" method="POST">
        @csrf


<div class="form-row">
    <div class="form-group col-md-12">
        <label for="inputnazov">Meno:</label>
        <input type="text" name="meno" class="form-control" id="inputnazov" placeholder="Vyplňte meno">
    </div>


    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputsurname">Priezvisko:</label>
            <input type="text" name="priezvisko" class="form-control" id="inputsurname" placeholder="Vyplňte priezvisko">
        </div>


        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputemail">Email:</label>
                <input type="email" name="email" class="form-control" id="inputemail" placeholder="Vyplňte email">
            </div>


            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputocation">Lokalita:</label>
                    <input type="text" name="lokalita" class="form-control" id="inputocation" placeholder="Vyplňte lokalitu">
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputphone">Telefónne číslo:</label>
                        <input type="tel" name="cislo" class="form-control" id="inputphone" placeholder="Vyplňte telefónne číslo">
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputpassword">Heslo:</label>
                            <input type="password" name="heslo" class="form-control" id="inputpassword" placeholder="Vyplňte heslo">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputpasswordtwo">Potvrď heslo:</label>
                                <input type="password" name="heslotwo" class="form-control" id="inputpasswordtwo" placeholder="Vyplňte heslo">
                            </div>

                    <br><br>
                    <input type="submit" value="Uložiť">
                    </form>

                    <p>Po kliknutí tlačidla uložiť sa uložia zmeny.</p>

@endsection
