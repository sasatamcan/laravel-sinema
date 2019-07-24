@extends('layouts.app')

@section('title', 'main page')

@section('content')



    <!-- Swiper -->
    <div class="homeslider">
        <div class="swiper-container">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/slider/poster2.jpg">
                    <div class="caption">
                        <div class="captioninside">
                            <h3>Movie Title</h3>
                            <p>Lorem ipsum dolor siamet</p>
                            <a href="single.html" class="playbutton">Play</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/slider/poster1.jpg">
                    <div class="caption">
                        <div class="captioninside">
                            <h3>Movie Title 2</h3>
                            <p>Lorem ipsum dolor siamet</p>
                            <a href="single.html" class="playbutton">Play</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="images/slider/poster2.jpg">
                    <div class="caption">
                        <div class="captioninside">
                            <h3>Movie Title 3</h3>
                            <p>Lorem ipsum dolor siamet</p>
                            <a href="single.html" class="playbutton">Play</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <main class="content">
    <section class="panel">
            <h2>Recently Added2</h2>
            <div class="recentslider">
                <div class="swiper-container">
                    <div class="swiper-wrapper owl-carousel">
                        @foreach($latestFilms as $latest)
                        <div class="swiper-slide">
                        <a href="/films/detail/{{$latest->id}}">
                                <img src="{{App\FileUpload::getImage($latest->image)}}">
                                <h3 class="hometitle">{{ $latest->name}}</h3>
                                
                            </a>
                        </div>
                            @endforeach
                    </div>
{{--                    <div class="nextdirection recent-next"><img src="/public/img/right-arrow.svg"> </div>--}}
{{--                    <div class="leftdirection recent-prev"><img src="/public/img/left-arrow.svg"> </div>--}}
                </div>
            </div>
        </section>

       
       


    </main>
@endsection