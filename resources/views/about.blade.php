@extends('layout')
@section('title', 'About Us')

@section('content')

<section class="about__about__section">
    <div class="taketour_section-header-rect"></div>
    <div class="about__about__section-general">
        <div class="about__about__section-info">
            <h2>THE ULTIMATE LUXURY</h2>
            <h1>About Us</h1>
        </div>
        <div class="about__about__section-links">
            <a href="./" class="about-link-home">Home</a>
            <span>|</span>
            <a href="./about" class="about-link-about">About</a>
        </div>
    </div>
</section>
<section class="about__video__section">
    <div class="about__video__section-video">
        <video src="/img/home/Vídeo sin título ‐ Hecho con Clipchamp.mp4" type="video/mp4" controls></video>
    </div>
    <div class="about__video__section-info">
        <h1>Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h1>
    </div>
</section>
<section class="about__services__section">
    <div class="about__services__section-container">
        <div class="about__services">
            <img src="/img/about/services-img1.png" alt="services image">
            <span>BREKFAST</span>
        </div>
        <div class="about__services">
            <img src="/img/about/services-img2.png" alt="services image">
            <span>BBQ PARTY</span>
        </div>
        <div class="about__services">
            <img src="/img/about/services-img3.png" alt="services image">
            <span>CITY GUIDE</span>
        </div>
        <div class="about__services">
            <img src="/img/about/services-img4.png" alt="services image">
            <span>LUXURY ROOM</span>
        </div>
    </div>
</section>
<section class="about__resto__section">
    <div class="about__resto__section-container">
        <div class="about__resto__image">
            <img src="/img/about/resto-img.jpg" alt="restaurant image">
        </div>
        <div class="about__resto__info">
            <h2>Restaurant</h2>
            <h1>Get Restaurant Facilities & Many Other More</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            <div class="about__resto-info-button">
                <a href="index">TAKE A TOUR</a>
            </div>
        </div>
    </div>
</section>
<section class="about__features__section">
    <div class="about__features__section-info">
        <h2>Facilities</h2>
        <h1>Core Features</h1>
    </div>
    <div class="about__features__section-cards-container">
        <div class="about__cards-container">
            <div class="about-card about-card1">
                <div class="about-card-img">
                    <img src="/img/home/img-card1.png" alt="image card 1">
                </div>
                <h1>Have High Rating</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                <span>01</span>
            </div>
            <div class="about-card about-card2">
                <div class="about-card-img">
                    <img src="/img/home/img-card2.png" alt="image card 1">
                </div>
                <h1>Quiet Hours</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                <span>02</span>
            </div>
            <div class="about-card about-card3">
                <div class="about-card-img">
                    <img src="/img/home/img-card3.png" alt="image card 1">
                </div>
                <h1>Best Locations</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                <span>03</span>
            </div>
            <div class="about-card about-card4">
                <div class="about-card-img">
                    <img src="/img/home/img-card4.png" alt="image card 1">
                </div>
                <h1>Free Cancellation</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                <span>04</span>
            </div>
            <div class="about-card about-card5">
                <div class="about-card-img">
                    <img src="/img/home/img-card5.png" alt="image card 1">
                </div>
                <h1>Payment Options</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                <span>05</span>
            </div>
            <div class="about-card about-card6">
                <div class="about-card-img">
                    <img src="/img/home/img-card6.png" alt="image card 1">
                </div>
                <h1>Special Offers</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                <span>06</span>
            </div>
        </div>
        <button class="prev-btnAbout"><img src="/img/home/img-slider-left-arrow.png" alt="left arrow"></button>
        <button class="next-btnAbout"><img src="/img/home/img-slider-right-arrow.png" alt="right arrow"></button>
    </div>
</section>
<section class="about__counter__section">
    <div class="about__counter__section-container">
        <div class="about__counter__section-title">
            <h2>Counter</h2>
            <h1>Some Fun Facts</h1>
        </div>
        <div class="about__counter__section-stats">
            <div class="about__counter-info">
                <div class="about__counter-img">
                    <img src="/img/about/counter-img2.png" alt="happy icon">
                </div>
                <div class="about__counter-number">
                    <span class="about-number">8000</span>
                    <span class="about-text">Happy Users</span>
                </div>
                <div class="about__counter-arrow">
                    <img src="/img/about/counter-arrow-right.png" alt="arrow right">
                </div>
            </div>
            <div class="about__counter-info">
                <div class="about__counter-img">
                    <img src="/img/about/counter-img2.png" alt="happy icon">
                </div>
                <div class="about__counter-number">
                    <span class="about-number">10M</span>
                    <span class="about-text">Reviews & Appriciate</span>
                </div>
                <div class="about__counter-arrow">
                    <img src="/img/about/counter-arrow-right.png" alt="arrow right">
                </div>
            </div>
            <div class="about__counter-info">
                <div class="about__counter-img">
                    <img src="/img/about/counter-img3.png" alt="happy icon">
                </div>
                <div class="about__counter-number">
                    <span class="about-number">100</span>
                    <span class="about-text">Country Coverage</span>
                </div>
                <div class="about__counter-arrow">
                    <img src="/img/about/counter-arrow-right.png" alt="arrow right">
                </div>
            </div>
        </div>
        <div class="about__section-slider">
            <div class="about__section-slider-wrapper">
                <img id="about-img1" src="/img/about/counter-slider-img1.jpg" alt="hotel image">
                <img id="about-img2" src="/img/about/counter-slider-img2.jpg" alt="hotel image">
                <img id="about-img3" src="/img/about/counter-slider-img3.jpg" alt="hotel image">
            </div>
            <div class="about__section-slider-nav">
                <a href="about"></a>
                <a href="about"></a>
                <a href="about"></a>
            </div>
        </div>
    </div>
</section>


@endsection