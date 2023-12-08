@extends('layout')
@section('title', 'Room Detail')
@section('content')


<section class="room__detail-about__section">
    <div class="taketour_section-header-rect"></div>
    <div class="room__detail-about__section-general">
        <div class="room__detail-about__section-info">
            <h2>THE ULTIMATE LUXURY</h2>
            <h1>Ultimate Room</h1>
        </div>
        <div class="room__detail-about__section-links">
            <a href="./" class="room-detail-link-home">Home</a>
            <span>|</span>
            <a href="#" class="room-detail-link-about">Room Details</a>
        </div>
    </div>
</section>
<section class="room__detail-availability">
    <div class="room__detail-availability-container">
        <div class="room__detail-title-price-container">
            <div class="room__detail-title">
                <h1>{{$room['room_type']}}</h1>
                <h2>Luxury {{$room['room_type']}}</h2>
            </div>
            <div class="room__detail-price">
                @if($room['discount'])
                <span class="discountedPrice">$ {{$room['discountedPrice']}}</span>
                <span class="discountedText">/Night</span>
                @else
                <span class="detail-price">${{$room['discountedPrice']}}</span>
                <span class="detail-night">/Night</span>
                @endif
            </div>
        </div>
        <div class="room__detail-image">
            <img src="/img/rooms-grid/room-1.avif" alt="room 1">
        </div>
        <div class="room__detail-form-container">
            <h1>Check Availability</h1>
            <form action="/room-detail" method="POST">
                @csrf
                <label for="check-in">Check in</label>
                <input type="date" id="check-in" name="check_in" class="room-detail-checkininput" value="{{$start}}">

                <label for="check-out">Check out</label>
                <input type="date" id="check-out" name="check_out" class="room-detail-checkoutinput" value="{{$end}}">

                <label for=" fullname">Full Name</label>
                <input type="text" id="fullname" name="guest" placeholder="Enter your full name">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your email">

                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone_number" placeholder="Enter your phone">

                <label for="message">Message</label>
                <input type="text" id="message" name="special_request" placeholder="Any special request ?">

                <input type="hidden" name="room_id" value="{{$room['id']}}">
                <input type="submit" value="Book Now" class="room__detail-form-button">
            </form>
        </div>
        <div class="room__detail-info-container">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            </p>
        </div>
    </div>
</section>
<section class="room__detail-amenities">
    <h1>Amenities</h1>
    <div class="room__detail-amenities-line"></div>
    <div class="room__detail-amenities-info-container">
        @foreach ($room['amenitiesData'] as $amenity)
        <div class="room__detail-amenities-info-container-section">
            <img src="{{ $amenity['url'] }}" alt="{{ $amenity['description'] }}">
            <span>{{ $amenity['description'] }}</span>
        </div>
        @endforeach
    </div>

</section>
<section class="room__detail-profile">
    <div class="room__detail-profile-image">
        <img src="/img/room-detail/img-profile.jpg" alt="image profile" class="profile-image-face">
        <img src="/img/room-detail/Ellipse 4.png" alt="circle brown" class="profile-image-circle">
        <img src="/img/room-detail/profile-check.png" alt="image check" class="profile-image-check">
    </div>
    <div class="room__detail-profile-info">
        <h1>Gaspar Sio</h1>
        <h2>Fullstack Web Developer</h2>
        <p>Should you have any questions or concerns, please feel free to contact me. I am here to assist you and address any inquiries you may have.</p>
        <p><a href="https://github.com/GasparSio" target="_blank">Github</a></p>
        <p><a href="mailto:sio.gaspar@gmail.com">Email</a></p>
    </div>
</section>
<section class="room__detail-cancellation">
    <h1>Cancellation</h1>
    <div class="room__detail-cancellation-line"></div>
    <p>Cancellations made 72 hours or more prior to the scheduled check-in date will receive a full refund.
        Cancellations made within 72 hours of the scheduled check-in date will be charged one night's stay.</p>
</section>
<section class="room__detail-related-rooms">
    <div class="room__detail-title">
        <h1>Related Rooms</h1>
    </div>
    <div class="room__detail-line"></div>
    <div class="room__detail-slider-container">
        <div class="room__detail-cards-container">
            @foreach ($relatedRooms as $relatedRoom)
            <div class="room__detail-rooms-slider card-detail1" id="cardContainer">
                <img src="{{$relatedRoom['randomImage']}}" alt="room image" />
                <div class="rooms__section-amenities">
                    @foreach ($relatedRoom['amenityImages'] as $image)
                    {!! $image !!}
                    @endforeach
                </div>
                <h3>{{$relatedRoom['room_type']}}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                <div class="room__detail-grid-price">
                    <span class='{{ $relatedRoom["discount"] ? "price-low-number" : "price-number-big" }}'>$ {{$relatedRoom['discountedPrice']}} /night</span>
                    <form action="../room-detail" method="GET">
                        <input type="hidden" name="roomId" value="{{$relatedRoom['id']}}">
                        <button type="submit">Booking Now</button>
                    </form>
                </div>
            </div>
            @endforeach

        </div>
        <button class="prev-btn-detail" id="prevBtn"><img src="/img/home/img-slider-left-arrow.png" alt="left arrow"></button>
        <button class="next-btn-detail" id="nextBtn"><img src="/img/home/img-slider-right-arrow.png" alt="right arrow"></button>
    </div>
</section>



@endsection