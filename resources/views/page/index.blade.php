@extends('layouts.layout')
@section('content')
    <div class="content-wrapper">
        <div class="portfolio-items-wrapper">
            <a href="{{route('ad.view',['kategoria' =>'auto'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/car.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                        </div>
                        <div class="subtitle">AUTO</div>
                    </div>
                </div>

            </a>

            <a href="{{route('ad.view',['kategoria' =>'oblecenie'])}}">
                <div class="portfolio-item-wrapper">

                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/clothes.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic4.jpg" alt="">
                        </div>

                        <div class="subtitle">Oblečenie.</div>
                    </div>
                </div>
            </a>

            <a href="{{route('ad.view',['kategoria' =>'elektronika'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/elec.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic5" alt="">
                        </div>

                        <div class="subtitle">Elektronika</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'dom a zahrada'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/garden.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic7.jpg" alt="">
                        </div>

                        <div class="subtitle">DOM A ZÁHRADA</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'reality'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/house.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic7.jpg" alt="">
                        </div>

                        <div class="subtitle">REALITY</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'stroje'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/machine.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic8.jpg" alt="">
                        </div>

                        <div class="subtitle">STROJE</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'mobily'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/mobile.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic9.jpg" alt="">
                        </div>

                        <div class="subtitle">MOBILY</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'motorky'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/moto.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic10.jpg" alt="">
                        </div>

                        <div class="subtitle">MOTORKY</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'praca'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/work.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic11.jpg" alt="">
                        </div>

                        <div class="subtitle">PRÁCA</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'pocitace'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/laptop.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic11.jpg" alt="">
                        </div>

                        <div class="subtitle">POČÍTAČE</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'hudba'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/music.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic12.jpg" alt="">
                        </div>

                        <div class="subtitle">Hudba.</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'zvierata'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/dog.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic11.jpg" alt="">
                        </div>

                        <div class="subtitle">Zvieratá.</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'ostatne'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/ticket.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic1.jpg"
                                 alt="">
                        </div>

                        <div class="subtitle">OSTATNÉ</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'sluzby'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/service.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid" src="pictures/pic2.jpg"
                                 alt="">
                        </div>

                        <div class="subtitle">SLUŽBY</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'knihy'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/books.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid"
                                 src="pictures/pic2.jpg" alt="">
                        </div>
                        <div class="subtitle">Knihy.</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'nabytok'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/furniture.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid"
                                 src="pictures/pic2.jpg" alt="">
                        </div>
                        <div class="subtitle">Nábytok.</div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'sportove potreby'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/bicycle.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid"
                                 src="pictures/pic2.jpg" alt="">
                        </div>
                        <div class="subtitle">Športové
                            potreby.
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'zdravie a krasa'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/health.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid"
                                 src="pictures/pic2.jpg"
                                 alt="">
                        </div>
                        <div class="subtitle">Zdravie a
                            krása.
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'pocitace'])}}">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img-background"
                         style="background-image:url({{asset('pictures/laptop.jpg')}})"></div>
                    <div class="img-text-wrapper">
                        <div class="logo-wrapper">
                            <img class="img-fluid"
                                 src="pictures/pic2.jpg"
                                 alt="">
                        </div>
                        <div class="subtitle">Počítače a
                            notebooky.
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route('ad.view',['kategoria' =>'deti a detske potreby'])}}">
                <div class="portfolio-img-background"
                     style="background-image:url({{asset('pictures/kids.jpg')}})"></div>
                <div class="img-text-wrapper">
                    <div class="logo-wrapper">
                        <img class="img-fluid"
                             src="pictures/pic2.jpg"
                             alt="">
                    </div>
                    <div class="subtitle">Deti a detské
                        potreby.
                    </div>
                </div>

            </a>
        </div>
    </div>
    <script>
        const portfolioItems = document.querySelectorAll('.portfolio-item-wrapper');

        portfolioItems.forEach(portfolioItem => {
            portfolioItem.addEventListener('mouseover', () => {
                console.log(portfolioItem.childNodes[1].classList)
                portfolioItem.childNodes[1].classList.add('image-blur');
            });

            portfolioItem.addEventListener('mouseout', () => {
                console.log(portfolioItem.childNodes[1].classList)
                portfolioItem.childNodes[1].classList.remove('image-blur');
            });
        });

    </script>
@endsection
