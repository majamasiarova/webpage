@extends('layouts.layout')

@section('content')
    <body>
    <div class="accordion">
        <div>
            <input type="checkbox" name="example_accordion" id="section1" class="accordion__input">
            <label for="section1" class="accordion__label">Ako pridať inzerát?</label>
            <div class="accordion__content">
                <p>Ako pridať inzerát?</p>
                <p>
                    Pre pridanie inzerátu sa potrebujete zaregistrovať a prihlásiť. Ak už ste zaregistrovaný, stačí sa prihlásiť.
                </p>
            </div>
        </div>
        <div>
            <input type="checkbox" name="example_accordion" id="section2" class="accordion__input">
            <label for="section2" class="accordion__label">Ako nahlásiť nevhodný inzerát?</label>
            <div class="accordion__content">
                <p>Ako nahlásiť nevhodný inzerát?</p>
                <p>
                    Napíšte nám na bazar@bazar.sk alebo kontaktujte administrátora.
                </p>
            </div>
        </div>
        <div>
            <input type="checkbox" name="example_accordion" id="section3" class="accordion__input">
            <label for="section3" class="accordion__label">Ako funguje bazár?</label>
            <div class="accordion__content">
                <p>Ako funguje bazár?</p>
                <p>
                    Bazár je internetová platforma na predávanie tovaru. Predajca ponúka tovar a kupujúci kupuje.
                    Obchod prebieha individuálne po dohode s predajcom.
                    Stránka slúži iba ako ponuka tovaru, samotný predaj nerieši.
                </p>
            </div>
        </div>
    </div>


    <div>

    </div>

    </body>
@endsection
