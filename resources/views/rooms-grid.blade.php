@extends('layout')
@section('title', 'Rooms Grid')

@section('content')

<section class="rooms__about__section">
    <div class="taketour_section-header-rect"></div>
    <div class="rooms__about__section-general">
        <div class="rooms__about__section-info">
            <h2>THE ULTIMATE LUXURY</h2>
            <h1>Ultimate Room</h1>
        </div>
        <div class="rooms__about__section-links">
            <a href="./index.php" class="rooms-link-home">Home</a>
            <span>|</span>
            <a href="./rooms-grid.php" class="rooms-link-about">Rooms</a>
        </div>
    </div>
</section>
<section class="rooms__slider__section">
    <div class="rooms-slider-container">
        @foreach ($rooms as $room)
        <div class="rooms-slider">
            {!! $room['randomImage'] !!}
            <div class="rooms__section-amenities">
                @foreach ($room['amenityImages'] as $image)
                {!! $image !!}
                @endforeach
            </div>
            <h3>{{$room['room_type']}}</h3>
            <p>{{$room['description']}}</p>
            <div class="rooms__grid-price">
                <span>$ {{$room['price']}} /Night</span>
                <form action="../room-detail.php" method="GET">
                    <input type="hidden" name="roomId" value="{{$room['id']}}">
                    <button type="submit">Booking Now</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <div class="rooms-pagination">
        <button class="rooms-prev"><img src="/img/rooms-grid/prev-arrow.png" alt=""></button>
        <div class="rooms-pages">
        </div>
        <button class="rooms-next"><img src="/img/rooms-grid/next-arrow.png" alt=""></button>
    </div>
</section>



@endsection