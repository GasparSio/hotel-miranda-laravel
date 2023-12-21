@extends('layout')
@section('title', 'Home')

@section('content')

<section class="taketour_section">
    <div class="taketour_section-header-rect"></div>
    <div class="taketour_section-content">
        <p>THE ULTIMATE LUXURY EXPERIENCE123</p>
        <h1>The Perfect Base For You</h1>
        <div class="taketour_section-button-content">
            <a href="rooms-grid" class="button-taketour">TAKE A TOUR</a>
            <a href="about" class="button-learnmore">LEARN MORE</a>
        </div>
    </div>
</section>
<form action="../rooms-grid" method="GET">
    <section class="schedule__section">
        <div class="schedule__section-calendar">
            <div class="input__container__arrival">
                <label for="date">Arrival date</label>
                <div class="input-calendar-container">
                    <input type="date" value="{{date('Y-m-d')}}" min="{{date('Y-m-d')}}" max="{{date('Y-m-d', strtotime('+1 Year'))}}" name="availdatein" class="input__container__arrival-date-input input-calendar">
                </div>
            </div>
            <div class="input__container__departure">
                <label for="date-departure">Departure date</label>
                <input type="date" id="date-departure" value="{{date('Y-m-d', strtotime('+1 day'))}}" min="{{date('Y-m-d', strtotime('+1 day'))}}" max="{{date('Y-m-d', strtotime('+1 Year'))}}" name="availdateout" class="input-calendar">
            </div>
        </div>
        <div class="schedule__section-button">
            <button type="submit">CHECK AVAILABILITY</button>
        </div>
    </section>
</form>
<section class="about__section">
    <div class="about__section-info">
        <h2>ABOUT US</h2>
        <h1>Discover Our Underground.</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="about__section-info-button">
            <a href="rooms-grid">BOOK NOW</a>
        </div>
    </div>
    <div class="about__section-feature">
        <img src="/img/home/pic-exterior1.jpg" alt="hotel feature">
    </div>
</section>
<section class="rooms__section">
    <div class="rooms__section-info">
        <p>ROOMS</p>
        <h1>Hand Picked Rooms</h1>
    </div>

    <!-- Slider main container -->
    <div class="swiper">
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($rooms as $room)
            <div class="swiper-slide">
                <div class="rooms__section-amenities">
                    @foreach ($room['amenityImages'] as $image)
                    {!! $image !!}
                    @endforeach
                </div>
                <div class="slider-images">
                    <img src="{{$room['randomImage']}}" alt="room image" />
                </div>
                <div class="rooms__section-price">
                    <a href="../rooms-grid">
                        <div class="rooms__section-price-info">
                            <h1>{{$room['room_type']}}</h1>
                            <p>{{$room['description']}}</p>
                        </div>
                        <div class="rooms__section-price-number">
                            <span class='{{ $room["discount"] ? "price-low-number" : "price-number-big" }}'>$ {{$room['discountedPrice']}} /night</span>
                            <!-- <span class='{{ $room["discount"] ? "price-low-text" : "price-high-text" }}'> /night</span> -->
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="swiper-button-prev"><img src="/img/home/img-slider-left-arrow.png" alt="left arrow"></div>
        <div class="swiper-button-next"><img src="/img/home/img-slider-right-arrow.png" alt="right arrow"></div>
    </div>
</section>
<section class="video__section">
    <div class="video__section-info-video">
        <div class="video__section-info">
            <h2>Intro video</h2>
            <h1>Meet With Our Luxury Place.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
        </div>
        <div class="video__section-video">
            <iframe src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="video__section-button">
        <a href="rooms-grid">Book Now</a>
    </div>
</section>
<section class="features__section">
    <div class="features__section-info">
        <h2>Facilities</h2>
        <h1>Core Features</h1>
    </div>
    <div class="features__section-cards-container">
        <div class="cards-container">
            <div class="card card1">
                <div class="card-img">
                    <img src="/img/home/img-card1.png" alt="image card 1">
                </div>
                <h1>Have High Rating</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                <span>01</span>
            </div>
            <div class="card card2">
                <div class="card-img">
                    <img src="/img/home/img-card2.png" alt="image card 1">
                </div>
                <h1>Quiet Hours</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                <span>02</span>
            </div>
            <div class="card card3">
                <div class="card-img">
                    <img src="/img/home/img-card3.png" alt="image card 1">
                </div>
                <h1>Best Locations</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                <span>03</span>
            </div>
            <div class="card card4">
                <div class="card-img">
                    <img src="/img/home/img-card4.png" alt="image card 1">
                </div>
                <h1>Free Cancellation</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                <span>04</span>
            </div>
            <div class="card card5">
                <div class="card-img">
                    <img src="/img/home/img-card5.png" alt="image card 1">
                </div>
                <h1>Payment Options</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                <span>05</span>
            </div>
            <div class="card card6">
                <div class="card-img">
                    <img src="/img/home/img-card6.png" alt="image card 1">
                </div>
                <h1>Special Offers</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                <span>06</span>
            </div>
        </div>
        <button class="prev-btn1"><img src="/img/home/img-slider-left-arrow.png" alt="left arrow"></button>
        <button class="next-btn1"><img src="/img/home/img-slider-right-arrow.png" alt="right arrow"></button>
    </div>
</section>
<section class="food__section">
    <img src="/img/home/img-icon-section-food.png" alt="icon food" class="icon-food-mobil">
    <div class="food__section-info">
        <h2>MENU</h2>
        <h1>Our Foods Menu</h1>
    </div>
    <div class="food__section-cards-container">
        <img src="/img/home/img-icon-section-food.png" alt="icon food" class="icon-food-desktop">
        <div class="food__cards-container">
            <div class="card-food card-food1">
                <div class="section-food">
                    <div class="card-img-food">
                        <img src="/img/home/pic-food1.jpg" alt="image food">
                    </div>
                    <div class="section-food-info">
                        <h1>Eggs & Bacon</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="section-food">
                    <div class="card-img-food">
                        <img src="/img/home/pic-food2.jpg" alt="image food">
                    </div>
                    <div class="section-food-info">
                        <h1>Tea or Coffee</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="section-food">
                    <div class="card-img-food">
                        <img src="/img/home/pic-food3.jpg" alt="image food">
                    </div>
                    <div class="section-food-info">
                        <h1>Chia Oatmeal</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
            <div class="card-food card-food2">
                <div class="section-food">
                    <div class="card-img-food">
                        <img src="/img/home/pic-food4.jpg" alt="image food">
                    </div>
                    <div class="section-food-info">
                        <h1>Fruit Parfait</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="section-food">
                    <div class="card-img-food">
                        <img src="/img/home/pic-food5.jpg" alt="image food">
                    </div>
                    <div class="section-food-info">
                        <h1>Marmalade Selection</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="section-food">
                    <div class="card-img-food">
                        <img src="/img/home/pic-food6.jpg" alt="image food">
                    </div>
                    <div class="section-food-info">
                        <h1>Cheese Plate</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="food__cards-container-button">
            <button class="prev-btn2"><img src="/img/home/img-slider-left-arrow.png" alt="left arrow"></button>
            <button class="next-btn2"><img src="/img/home/img-slider-right-arrow.png" alt="right arrow"></button>
        </div>
    </div>
    <div class="food__section-slider">
        <div class="food__section-slider-wrapper">
            <img id="food-img1" src="/img/home/slider-food1.jpg" alt="food image">
            <img id="food-img2" src="/img/home/slider-food2.jpg" alt="food image">
            <img id="food-img3" src="/img/home/slider-food3.jpg" alt="food image">
        </div>
        <div class="food__section-slider-nav">
            <a href="#food-img1"></a>
            <a href="#food-img2"></a>
            <a href="#food-img3"></a>
        </div>
    </div>
</section>
<section class="stadistics__section-container">
    <div class="stadistics__section stadistics__section-1">
        <img src="/img/home/img-stad-1.png" alt="Icon image">
        <div class="stadistics__section-span">
            <span class="stadistics__section-span-number">84K</span>
            <span class="stadistics__section-span-symbol">+</span>
        </div>
        <p class="stadistics-category">Projects are Completed</p>
    </div>
    <div class="stadistics__section stadistics__section-2">
        <img src="/img/home/img-stad-2.png" alt="Icon image">
        <div class="stadistics__section-span">
            <span class="stadistics__section-span-number">10M</span>
            <span class="stadistics__section-span-symbol">+</span>
        </div>
        <p class="stadistics-category">Active Backers Around World</p>
    </div>
    <div class="stadistics__section stadistics__section-3">
        <img src="/img/home/img-stad-3.png" alt="Icon image">
        <div class="stadistics__section-span">
            <span class="stadistics__section-span-number">02K</span>
            <span class="stadistics__section-span-symbol">+</span>
        </div>
        <p class="stadistics-category">Categories Served</p>
    </div>
    <div class="stadistics__section stadistics__section-4">
        <img src="/img/home/img-stad-4.png" alt="">
        <div class="stadistics__section-span">
            <span class="stadistics__section-span-number">100M</span>
            <span class="stadistics__section-span-symbol">+</span>
        </div>
        <p class="stadistics-category">Idea Raised Funds</p>
    </div>
</section>

@endsection