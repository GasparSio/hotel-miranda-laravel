@extends('layout')
@section('title', 'Contact')

@section('content')

<section class="room__detail-about__section">
    <div class="taketour_section-header-rect"></div>
    <div class="room__detail-about__section-general">
        <div class="room__detail-about__section-info">
            <h2>THE ULTIMATE LUXURY</h2>
            <h1>New Details</h1>
        </div>
        <div class="room__detail-about__section-links">
            <a href="./" class="room-detail-link-home contact-detail-link">Home</a>
            <span>|</span>
            <a href="./contact" class="room-detail-link-about contact-detail-link">Blog</a>
        </div>
    </div>
</section>
<section class="contact__section">
    <div class="contact__section-info">
        <div class="contact__section-info-image">
            <img src="../img/contact/img-contact-1.png" alt="contact image">
        </div>
        <div class="contact__section-info-address">
            <h2>Hotel Address</h2>
            <p>Princesa 31, Madrid, Spain</p>
        </div>
        <span>01</span>
    </div>
    <div class="contact__section-info">
        <div class="contact__section-info-image">
            <img src="../img/contact/img-contact-2.png" alt="contact image">
        </div>
        <div class="contact__section-info-address">
            <h2>Phone Number</h2>
            <p>+34 655 696 744</p>
        </div>
        <span>02</span>
    </div>
    <div class="contact__section-info">
        <div class="contact__section-info-image">
            <img src="../img/contact/img-contact-3.png" alt="contact image">
        </div>
        <div class="contact__section-info-address">
            <h2>Email</h2>
            <p>info@webmail.com</p>
        </div>
        <span>03</span>
    </div>
</section>
<section class="contact__section-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.1314070555613!2d-3.7172119244066213!3d40.42808905494852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422930bf75e89b%3A0x37bfddc02cf008f4!2sOxygen%20Workspace!5e0!3m2!1sen!2ses!4v1695389644229!5m2!1sen!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="contact__section-form">
    <form method="POST" class="contact__form-container" id="contact-form">
        @csrf
        <div class="form-input contact__form-name">
            <label for="input1"></label>
            <img src="/img/contact/img-input-1.png" alt="image contact">
            <input type="text" id="input1" name="contactName" placeholder="Your full name">
        </div>
        <div class="form-input contact__form-number">
            <label for="input2"></label>
            <img src="../img/contact/img-input-2.png" alt="image contact">
            <input type="text" id="input2" name="contactPhone" placeholder="Add phone number">
        </div>
        <div class="form-input contact__form-email">
            <label for="input3"></label>
            <img src="../img/contact/img-input-3.png" alt="image contact">
            <input type="text" id="input3" name="contactEmail" placeholder="Enter email address">
        </div>
        <div class="form-input contact__form-subject">
            <label for="input4"></label>
            <img src="../img/contact/img-input-4.png" alt="image contact">
            <input type="text" id="input4" name="contactSubject" placeholder="Enter subject">
        </div>
        <div class="form-input contact__form-message">
            <img src="../img/contact/img-input-5.png" alt="image contact">
            <textarea name="contactMessage" placeholder="Enter message" id="input5"></textarea>
        </div>
        <div class="contact__form-button">
            <input type="submit" value="Send">
        </div>
    </form>
</section>

@endsection