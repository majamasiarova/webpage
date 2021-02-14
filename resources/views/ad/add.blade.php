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
                    <textarea rows="4" name="popis" cols="50" placeholder="Sem napíšte inzerát..."
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

                    <select class="form-control form-control-lg" name="kategoria" required>
                        @if (old('kategoria') == "Autá")
                            <option value="Autá" selected>Autá</option>
                        @else
                            <option value="Autá">Autá</option>
                        @endif
                        @if (old('kategoria') == "Oblečenie")
                            <option value="Oblečenie" selected>Oblečenie</option>
                        @else
                            <option value="Oblečenie">Oblečenie</option>
                        @endif
                        @if (old('kategoria') == "Elektronika")
                            <option value="Elektronika" selected>Elektronika</option>
                        @else
                            <option value="Elektronika">Elektronika</option>
                        @endif
                        @if (old('kategoria') == "Dom a záhrada")
                            <option value="Dom a záhrada" selected>Dom a záhrada</option>
                        @else
                            <option value="Dom a záhrada">Dom a záhrada</option>
                        @endif
                        @if (old('kategoria') == "Reality, Byty, Domy")
                            <option value="Reality, Byty, Domy" selected>Reality, Byty, Domy</option>
                        @else
                            <option value="Reality, Byty, Domy">Reality, Byty, Domy</option>
                        @endif
                        @if (old('kategoria') == "Stroje")
                            <option value="Stroje" selected>Stroje</option>
                        @else
                            <option value="Stroje">Stroje</option>
                        @endif
                        @if (old('kategoria') == "Mobily")
                            <option value="Mobily" selected>Mobily</option>
                        @else
                            <option value="Mobily">Mobily</option>
                        @endif
                        @if (old('kategoria') == "Motorky")
                            <option value="Motorky" selected>Motorky</option>
                        @else
                            <option value="Motorky">Motorky</option>
                        @endif

                        @if (old('kategoria') == "Práca")
                            <option value="Práca" selected>Práca</option>
                        @else
                            <option value="Práca">Práca</option>
                        @endif
                        @if (old('kategoria') == "Počítače")
                            <option value="Počítače" selected>Počítače</option>
                        @else
                            <option value="Počítače">Počítače</option>
                        @endif
                        @if (old('kategoria') == "Hudba")
                            <option value="Hudba" selected>Hudba</option>
                        @else
                            <option value="Hudba">Hudba</option>
                        @endif
                        @if (old('kategoria') == "Zvieratá")
                            <option value="Zvieratá" selected>Zvieratá</option>
                        @else
                            <option value="Zvieratá">Zvieratá</option>
                        @endif
                        @if (old('kategoria') == "Ostatné")
                            <option value="Ostatné" selected>Ostatné</option>
                        @else
                            <option value="Ostatné">Ostatné</option>
                        @endif
                        @if (old('kategoria') == "Služby")
                            <option value="Služby" selected>Služby</option>
                        @else
                            <option value="Služby">Služby</option>
                        @endif
                        @if (old('kategoria') == "Knihy")
                            <option value="Knihy" selected>Knihy</option>
                        @else
                            <option value="Knihy">Knihy</option>
                        @endif
                        @if (old('kategoria') == "Nábytok")
                            <option value="Nábytok" selected>Nábytok</option>
                        @else
                            <option value="Nábytok">Nábytok</option>
                        @endif
                        @if (old('kategoria') == "Športové potreby")
                            <option value="Športové potreby" selected>Športové potreby</option>
                        @else
                            <option value="Športové potreby">Športové potreby</option>
                        @endif
                        @if (old('kategoria') == "Zdravie a krása")
                            <option value="Zdravie a krása" selected>Zdravie a krása</option>
                        @else
                            <option value="Zdravie a krása">Zdravie a krása</option>
                        @endif
                        @if (old('kategoria') == "Deti a detské potreby")
                            <option value="Deti a detské potreby" selected> Deti a detské potreby</option>
                        @else
                            <option value="Deti a detské potreby"> Deti a detské potreby</option>
                        @endif

                    </select>

                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Pridať inzerát"/>
        </form>

@endsection
