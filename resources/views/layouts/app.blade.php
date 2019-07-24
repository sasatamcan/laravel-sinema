<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="public/css/swiper.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">


    


    <!-- Demo styles -->
    <style>



    </style>
</head>

<body>
<div class="wrapper">

    <header class="header">
        <figure class="logo"><a href="index.html"><img src="/public/img/logo.png" alt="Logo"></figure></a>
        <nav class="menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><<a href="/genre">Genres</a>
                    <ul>
                        <li><a href="genre.html">Action</a></li>
                        <li><a href="genre.html">Comedy</a></li>
                        <li><a href="genre.html">Drama</a></li>
                        <li><a href="genre.html">Romance</a></li>
                    </ul>
                </li>
                <li><a>Year</a>
                    <ul>
                        <li><a href="year.html">2017</a></li>
                        <li><a href="year.html">2016</a></li>
                        <li><a href="year.html">2015</a></li>
                        <li><a href="year.html">2014</a></li>
                    </ul>
                </li>
                <li><a>Language</a>
                    <ul>
                        <li><a href="language.html">English</a></li>
                        <li><a href="language.html">German</a></li>
                    </ul>
                </li>
                <li><a href="mostwatched.html">Most Watched</a></li>
                <li class="mobsearch">
                    <form class="mobform" action="/search">
                        <input type="text" name="search" class="mobsearchfield" placeholder="Поиск...">
                        <input type="submit" value="" class="mobsearchsubmit">
                    </form>
                </li>
            </ul>
        </nav>
        <form class="search" action="/search">
            <input type="text" name="search" class="searchfield" placeholder="Поиск...">
            <input type="submit" value="" class="searchsubmit">
        </form>

        <div class="toggle"><img src="img/menu.svg"></div>
    </header>

<main class="content">
    @yield('content')
</main>


    <footer class="footer">
        <div class="copyright"><p>Copyright &copy 2017 www.focusoncode.com</p></div>
        <div class="footermenu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/contacts">Contact</a></li>
                <li><a href="terms.html">Terms and conditions</a></li>

            </ul>
        </div>
        <div class="tags">
            <ul>
                <li>Watch Free Movies Trailers</li>
                <li>Movie Trailers</li>
                <li>English Subtitled Movies Trailers</li>
                <li>Latest Movies Trailers</li>
                <li>New Movies Trailers</li>

            </ul>
        </div>

    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:2
                    }
                }
            })
        })
    </script>

</div>
</body>
</html>


