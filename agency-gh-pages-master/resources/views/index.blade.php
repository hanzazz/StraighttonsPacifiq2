@extends('layouts.index')
@section('content')
<!-- Navigation -->
<!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Straightton Pacifig</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Gallory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
@include('components.1navbar')
<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To Straightton Pacifig</div>
            <div class="intro-heading text-uppercase">Yon can take profit anywhere</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
    </div>
</header>

<!-- Services -->
@include('components.2services')

<!-- Portfolio Grid -->

@include('components.3portfolio')
<!-- About -->
@include('components.4about')

<!-- Team -->
@include('components.5team')

<!-- Clients -->
@include('components.6client')

<!-- Contact -->
@include('components.7contact')

<!-- Footer -->
@include('components.8footer')

<!-- Portfolio Modals -->

<!-- Modal 1 -->
<!-- <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal" id="portfolioModal1">
                <div class="lr">
                    <div class="rl"></div>
                </div>
            </div>
            <div class="container" id="portfolioModal1">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                           <!--  <iframe width="700" height="500" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>


                            <h2 style="text-align:center">Slideshow Gallery</h2>

                            <div class="container">
                                <div class="mySlides">
                                    <div class="numbertext">1 / 6</div>
                                    <img src="img_woods_wide.jpg" style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">2 / 6</div>
                                    <img src="img_5terre_wide.jpg" style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">3 / 6</div>
                                    <img src="img_mountains_wide.jpg" style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">4 / 6</div>
                                    <img src="img_lights_wide.jpg" style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">5 / 6</div>
                                    <img src="img_nature_wide.jpg" style="width:100%">
                                </div>

                                <div class="mySlides">
                                    <div class="numbertext">6 / 6</div>
                                    <img src="img_snow_wide.jpg" style="width:100%">
                                </div>

                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                <a class="next" onclick="plusSlides(1)">❯</a>

                                <div class="caption-container">
                                    <p id="caption"></p>
                                </div>

                                <div class="row">
                                    <div class="column">
                                        <img class="demo cursor" src="img_woods.jpg" style="width:100%" onclick="currentSlide(1)"
                                            alt="The Woods">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)"
                                            alt="Cinque Terre">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)"
                                            alt="Mountains and fjords">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)"
                                            alt="Northern Lights">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)"
                                            alt="Nature and sunrise">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)"
                                            alt="Snowy Mountains">
                                    </div>
                                </div>
                            </div>



                            <p>meeeewewwwwwwwooooomto</p>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times"></i>
                                Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- </div> --> 
@include('components.9modal')

@endsection
