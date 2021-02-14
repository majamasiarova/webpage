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
                        <option value="Autá">Autá</option>
                        <option value="Oblečenie">Oblečenie</option>
                        <option value="Elektronika">Elektronika</option>
                        <option value="Dom a záhrada">Dom a záhrada</option>
                        <option value="Reality, Byty, Domy">Reality, Byty, Domy</option>
                        <option value="Stroje">Stroje</option>
                        <option value="Mobily">Mobily</option>
                        <option value="Motorky">Motorky</option>
                        <option value="Práca">Práca</option>
                        <option value="Počítače">Počítače</option>
                        <option value="Hudba">Hudba</option>
                        <option value="Zvieratá">Zvieratá</option>
                        <option value="Ostatné">Ostatné</option>
                        <option value="Služby">Služby</option>
                        <option value="Knihy">Knihy</option>
                        <option value="Nábytok">Nábytok</option>
                        <option value="Športové potreby">Športové potreby</option>
                        <option value="Zdravie a krása">Zdravie a krása</option>
                        <option value="Deti a detské potreby"> Deti a detské potreby</option>
                    </select>

                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Pridať inzerát"/>
        </form>

@endsection
