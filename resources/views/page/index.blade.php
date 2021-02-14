@extends('layouts.layout')
@section('content')
    <div class="content-wrapper">
        <div class="portfolio-items-wrapper">

            <a href="{{route('ad.view',['kategoria' =>'Autá'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/car.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">AUTO</div>
                    </div>
                </div>
            </a>

            <a href="{{route('ad.view',['kategoria' =>'Oblečenie'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/clothes.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">OBLEČENIE</div>
                    </div>
                </div>
            </a>

            <a href="{{route('ad.view',['kategoria' =>'Elektronika'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/elec.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">ELEKTRONIKA</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Dom a záhrada'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/garden.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">DOM A ZÁHRADA</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Reality,Byty,Domy'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/house.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">REALITY</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Stroje'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/machine.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">STROJE</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Mobily'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/mobile.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">MOBILY</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Motorky'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/moto.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">MOTORKY</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Práca'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/work.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">PRÁCA</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Počítače'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/laptop.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">POČÍTAČE</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Hudba'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/music.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">HUDBA</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Zvieratá'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/dog.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">ZVIERATÁ</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Ostatné'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/ticket.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">OSTATNÉ</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Služby'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/service.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">SLUŽBY</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Knihy'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/books.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">KNIHY</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Nábytok'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/furniture.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">NÁBYTOK</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Športové potreby'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/bicycle.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">ŠPORTOVÉ POTREBY</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'Zdravie a krása'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/health.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">ZDRAVIE A KRÁSA</div>
                    </div>
                </div>
            </a>

            <a href="{{route('ad.view',['kategoria' =>'Deti a detské potreby'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/kids.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="subtitle">DETI A DETSKÉ POTREBY</div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <script>
        const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');

        portfolioItems.forEach(portfolioItem => {
            portfolioItem.addEventListener('mouseover', () => {
                portfolioItem.childNodes[1].classList.add('image-blur');
            });

            portfolioItem.addEventListener('mouseout', () => {
                portfolioItem.childNodes[1].classList.remove('image-blur');
            });
        });

    </script>
@endsection
