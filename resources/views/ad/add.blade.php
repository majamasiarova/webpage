@extends('layouts.layout')

@section('content')
    <div class="m-5">
        <h1>Pridávanie inzerátu</h1>
        <form action="{{route('ad.create')}}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-2">
                    <label for="inputPopis">Popis:</label>
                    <textarea rows="4" name="popis" cols="50" placeholder="Sem napíšte inzerát..."> </textarea>
                </div>
            </div>

                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="inputNazov">Názov:</label>
                            <input type="text" name="nazov" class="form-control" id="inputNazov"
                                   placeholder="Vyplňte názov produktu">
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="inputCena">Cena:</label>
                            <input type="number" name="cena" class="form-control" id="inputCena"
                                   placeholder="Vyplňte cenu v eurách">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="inputLokalita">Lokalita:</label>
                            <input type="text" name="lokalita" class="form-control" id="inputLokalita"
                                   placeholder="Napíšte lokalitu">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="inputkategoria">kategória:</label>

                            <select class="form-control form-control-lg" name="kategoria">
                                <option value="auta">Autá</option>
                                <option value="oblecenie"> Oblečenie</option>
                                <option value="elektronika">Elektronika</option>
                                <option value="dom a zahrada"> Dom a záhrada</option>
                                <option value="reality">Reality, Byty, Domy</option>
                                <option value="stroje">Stroje</option>
                                <option value="mobily">Mobily</option>
                                <option value="motorky">Motorky</option>
                                <option value="praca">Práca</option>
                                <option value="pocitace">Počítače</option>
                                <option value="hudba">Hudba</option>
                                <option value="zvierata">Zvieratá</option>
                                <option value="ostatne">Ostatné</option>
                                <option value="sluzby">Služby</option>
                                <option value="knihy">Knihy</option>
                                <option value="nabytok">Nábytok</option>
                                <option value="sportove potreby">Športové potreby</option>
                                <option value="zdravie a krasa">Zdravie a krása</option>
                                <option value="deti a detske potreby"> Deti a detské potreby</option>
                            </select>

                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" value="Pridať inzerát"/>

@endsection
