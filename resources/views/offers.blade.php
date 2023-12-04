@extends('layout')
@section('title', 'Offers')

@section('content')

<section class="room__detail-about__section">
    <div class="taketour_section-header-rect"></div>
    <div class="room__detail-about__section-general">
        <div class="room__detail-about__section-info">
            <h2>THE ULTIMATE LUXURY</h2>
            <h1>Our Offers</h1>
        </div>
        <div class="room__detail-about__section-links">
            <a href="./" class="room-detail-link-home">Home</a>
            <span>|</span>
            <a href="./offers" class="room-detail-link-about">Offers</a>
        </div>
    </div>
</section>

@foreach ($rooms as $room)
<section class="offers__room-section">
    <div class="offers__room-info-container">
        <div class="offers__room-image">
            {!! $room['randomImage'] !!}
        </div>
        <div class="offers__room-price-container">
            <div class="offers__room-title">
                <h1>{{$room['room_type']}}</h1>
            </div>
            <div class="offers__room-price-section">
                <div class="offers__room-price-high">
                    <span class="price-high-number">$ {{$room['price']}}</span>
                    <span class="price-high-text">/Night</span>
                </div>
                <div class="offers__room-price-low">
                    <span class="price-low-number">$ {{ $room['discountedPrice'] }}</span>
                    <span class="price-low-text">/Night</span>
                </div>
            </div>
        </div>
    </div>
    <div class="offers__room-line"></div>
    <div class="offers__room-text-amen-container">
        <div class="offers__room-text-container">
            <p>{{$room['description']}}</p>
        </div>
        <div class="offers__room-amenities-container">
            @foreach ($room['amenitiesData'] as $amenity)
            <div class="offers__room-amenities-info">
                <img src="{{ $amenity['url'] }}" alt="image amenities">
                <span>{{ $amenity['description'] }}</span>
            </div>
            @endforeach
        </div>
        <div class="offers__room-button-container">
            <form action="../room-detail" method="GET">
                <input type="hidden" name="roomId" value="{{$room['id']}}">
                <button type="submit">Booking Now</button>
            </form>
        </div>
    </div>
</section>
@endforeach
<section class="offers__detail-related-rooms">
    <div class="offers__detail-title">
        <h2>Popular List</h2>
        <h1>Popular Rooms</h1>
    </div>
    <div class="offers__detail-line"></div>
    <div class="offers__detail-slider-container">
        <div class="offers__detail-cards-container">

            @foreach($rooms as $room)
            <div class="offers__detail-rooms-slider card-detail1">
                <img src="/img/rooms-grid/room-8.avif" alt="room 1">
                <div class="offers__detail-section-amenities">
                    @foreach ($room['amenityImages'] as $image)
                    {!! $image !!}
                    @endforeach
                    {!! $relatedRoom['randomImage'] !!}
                </div>
                <h3>{{$room['room_type']}}</h3>
                <p>{{$room['description']}}</p>
                <div class="offers__detail-grid-price">
                    <span>${{$room['price']}} /Night</span>
                    <a href="rooms-grid">Check our available rooms</a>
                </div>
            </div>
            @endforeach
        </div>
        <button class="prev-btn-detail-offers" id="prevBtn"><img src="/img/home/img-slider-left-arrow.png" alt="left arrow"></button>
        <button class="next-btn-detail-offers" id="nextBtn"><img src="/img/home/img-slider-right-arrow.png" alt="right arrow"></button>
    </div>
</section>



@endsection