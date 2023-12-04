<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;600;700&family=Old+Standard+TT&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>@yield('title')</title>
</head>

<body>
    <header class="header__section">
        <div class="header__section-ham-menu">
            <span class="hamIcon"><img src="/img/home/img-hamb.png" alt="Hamburg menu icon" class="icon-menu--big"></span>
            <span class="crossIcon"><img src="/img/home/img-cross.png" alt="Cross menu icon" class="icon-menu--cross inactive"></span>
        </div>
        <div class="header__section-icon">
            <a href="../" class="icon_section-H">
                <div>
                    <span>H</span>
                </div>
            </a>
            <div class="icon_section-HM">
                <span class="section__HM-hotel">HOTEL</span>
                <span class="section__HM-miranda">MIRANDA</span>
            </div>
        </div>
        <div class="header__section-links">
            <a href="./about" class="section-why" id="aboutLink">About Us</a>
            <a href="./rooms-grid" class="section-benefits" id="roomsLink">Rooms</a>
            <a href="./offers" class="section-prices" id="offersLink">Offers</a>
            <a href="./contact" class="section-contact" id="contactLink">Contact</a>
        </div>
        <div class="header__section-search-account">
            <a href="../contact"><img src="/img/home/img-account.png" alt="Account icon"></a>
            <a href="../rooms-grid"><img src="/img/home/img-search.png" alt="Search icon"></a>
        </div>
        <div class="header__mob-menu inactive">
            <a href="./about" class="section-why" id="aboutLink">About Us</a>
            <a href="./rooms-grid" class="section-benefits" id="roomsLink">Rooms</a>
            <a href="./offers" class="section-prices" id="offersLink">Offers</a>
            <a href="./contact" class="section-contact" id="contactLink">Contact</a>
        </div>
    </header>
    <div>
        @yield('content')
    </div>
    <footer>
        <section class="footer__section" style="background-image: url(./img/home/Footer.png)">
            <div class="footer__section-info-container">
                <div class="footer__section-title-container">
                    <div class="info-container-icon">
                        <span class="title-h">H</span>
                    </div>
                    <div class="info-container-title">
                        <span class="title-hotel">HOTEL</span>
                        <span class="title-miranda">MIRANDA</span>
                    </div>
                </div>
                <div class="footer__section-paragraph-container">
                    <p>
                        Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
                    </p>
                </div>
                <div class="footer__section-icons-container">
                    <img src="/img/home/footer-social1.png" alt="social media icon">
                    <img src="/img/home/footer-social2.png" alt="social media icon" class="twitter-icon">
                    <img src="/img/home/footer-social3.png" alt="social media icon">
                    <img src="/img/home/footer-social4.png" alt="social media icon">
                    <img src="/img/home/footer-social5.png" alt="social media icon">
                </div>
            </div>
            <div class="footer__section-services-container">
                <h1>Services.</h1>
                <div class="footer__section-services-list-container">
                    <div class="footer__section-services-list">
                        <span>+ Resturent & Bar</span>
                        <span>+ Swimming Pool</span>
                        <span>+ Wellness & Spa</span>
                        <span>+ Restaurant</span>
                        <span>+ Conference Room</span>
                        <span>+ Coctail Party House</span>
                    </div>
                    <div class="footer__section-services-list2">
                        <span>+ Gaming Zone</span>
                        <span>+ Marrige Party</span>
                        <span>+ Party Planning</span>
                        <span>+ Tour Consultancy</span>
                    </div>
                </div>
            </div>
            <div class="footer__section-contact-container">
                <h1>Contact Us.</h1>
                <div class="footer__section-contact-info">
                    <div class="footer__section-phone">
                        <div class="footer__section-image">
                            <img src="/img/home/footer-icon-contact1.png" alt="icon phone">
                        </div>
                        <div class="footer__section-number">
                            <span class="span-title">Phone Number</span>
                            <span class="span-number">+987 876 765 76 577</span>
                        </div>
                    </div>
                    <div class="footer__section-phone">
                        <div class="footer__section-image">
                            <img src="/img/home/footer-icon-contact2.png" alt="icon mail">
                        </div>
                        <div class="footer__section-number">
                            <span class="span-title">Phone Number</span>
                            <span class="span-number">+987 876 765 76 577</span>
                        </div>
                    </div>
                    <div class="footer__section-phone">
                        <div class="footer__section-image">
                            <img src="/img/home/footer-icon-contact3.png" alt="icon map">
                        </div>
                        <div class="footer__section-number">
                            <span class="span-title">Phone Number</span>
                            <span class="span-number">+987 876 765 76 577</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer__section2">
            <div class="footer__section-copyright-container">
                <div class="footer__section-copyright"><span>Copyright By@Example - 2020</span></div>
                <div class="footer__section-terms"><span>Terms of use | Privacy Environmental Policy</span></div>
            </div>
        </section>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="{{ asset('js/header.js') }}"></script>
<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/about.js') }}"></script>
<script src="{{ asset('js/offers.js') }}"></script>
<script src="{{ asset('js/room-detail.js') }}"></script>
<script src="{{ asset('js/rooms-grid.js') }}"></script>
<script src="{{ asset('js/contact.js') }}"></script>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
@if(isset($notification))
<script>
    Toastify({
        text: "{{$notification['message']}}",
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
        style: {
            background: "{{$error}}" ? "red" : "linear-gradient(to right, #a47a22, rgb(211 202 90)",
            width: "150px",
            display: "flex",
            justifyContent: "space-between",
            alignItems: "center",
            top: "39px",
        },
    }).showToast();
</script>
@endif

</html>