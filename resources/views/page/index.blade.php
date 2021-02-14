@extends('layouts.layout')
@section('content')
    <div class="content-wrapper">
        <div class="portfolio-items-wrapper">

            @foreach($categories as $category)
                <a href="{{route('ad.view',['kategoria' => $category])}}">
                    <div class="portfolio-item-wrapper">
                        <div class="portfolio-img-background"
                             style="background-image:url({{asset($images[$category])}})"></div>
                        <div class="img-text-wrapper">
                            <div class="subtitle">{{$category}}</div>
                        </div>
                    </div>
                </a>
            @endforeach
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
