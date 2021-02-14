@extends('layouts.layout')

@section('content')
    <div class="m-5">
        <h1>Pridávanie inzerátu</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('ad.create')}}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-2">
                    <label for="inputPopis">Popis:</label>
                    <textarea id="inputPopis" rows="4" name="popis" cols="50" placeholder="Sem napíšte inzerát..."
                              required>{{ old('popis') }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-2">
                    <label for="inputNazov">Názov:</label>
                    <input type="text" name="nazov" class="form-control" id="inputNazov"
                           placeholder="Vyplňte názov produktu" value="{{ old('nazov') }}" required>
                </div>
            </div>


            <div class="row">
                <div class="form-group col-md-2">
                    <label for="inputCena">Cena:</label>
                    <input type="number" name="cena" class="form-control" id="inputCena"
                           placeholder="Vyplňte cenu v eurách" value="{{ old('cena') }}" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-2">
                    <label for="inputLokalita">Lokalita:</label>
                    <input type="text" name="lokalita" class="form-control" id="inputLokalita"
                           placeholder="Napíšte lokalitu" value="{{ old('lokalita') }}" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-2">
                    <label for="inputkategoria">kategória:</label>

                    <select id="inputkategoria" class="form-control form-control-lg" name="kategoria">
                        @foreach($categories as $category)
                            @if (old('kategoria') == $category)
                                <option value="{{$category}}" selected>{{$category}}</option>
                            @else
                                <option value="{{$category}}">{{$category}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Pridať inzerát"/>
        </form>
    </div>
@endsection
