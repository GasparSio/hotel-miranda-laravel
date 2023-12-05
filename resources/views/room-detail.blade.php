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
            <form action="../room-detail.php" method="POST">
                <label for="check-in">Check in</label>
                <input type="date" id="check-in" name="check-in" class="room-detail-checkininput" value="{{$start}}" required>

                <label for="check-out">Check out</label>
                <input type="date" id="check-out" name="check-out" class="room-detail-checkoutinput" value="{{$end}}" required>

                <label for=" fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your email" required>

                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" placeholder="Enter your phone" required>

                <label for="message">Message</label>
                <input type="text" id="message" name="message" placeholder="Any special request ?" required>

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
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-air-cond.png" alt="image amenities">
            <span>Air conditioner</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-breakfast.png" alt="image amenities">
            <span>Breakfast</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-cleaning.png" alt="image amenities">
            <span>Cleaning</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-grocery.png" alt="image amenities">
            <span>Grocery</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-shop near.png" alt="image amenities">
            <span>Shop near</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-online.png" alt="image amenities">
            <span>24/7 Online Support</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-security.png" alt="image amenities">
            <span>Smart Security</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-wifi.png" alt="image amenities">
            <span>High speed WiFi</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-kitchen.png" alt="image amenities">
            <span>Kitchen</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-shower.png" alt="image amenities">
            <span>Shower</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-bad.png" alt="image amenities">
            <span>Single bed</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-towels.png" alt="image amenities">
            <span>Towels</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-locker.png" alt="image amenities">
            <span>Strong Locker</span>
        </div>
        <div class="room__detail-amenities-info">
            <img src="/img/room-detail/img-team.png" alt="image amenities">
            <span>Expert Team</span>
        </div>
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
        <h2>Founder, Qux Co.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
</section>
<section class="room__detail-cancellation">
    <h1>Cancellation</h1>
    <div class="room__detail-cancellation-line"></div>
    <p>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
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
                {!! $relatedRoom['randomImage'] !!}
                <div class="rooms__section-amenities">
                    @foreach ($relatedRoom['amenityImages'] as $image)
                    {!! $image !!}
                    @endforeach
                </div>
                <h3>{{$relatedRoom['room_type']}}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                <div class="room__detail-grid-price">
                    <span>${{$relatedRoom['price']}}/Night</span>
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