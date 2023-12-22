@extends('layout.index')


@section('content')

<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        <br>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="wave-background">
                <img class="w-100" src="{{ asset('assets1/img/apmm.jpg')}}" alt="Image">
            </div>
        </div>
        <!-- ... (carousel items) ... -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>



{{-- content home start --}}



<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            {{-- <h5 class="fw-bold  text-uppercase" style="color:#E0202D;">Cek Resi</h5> --}}
            <h1 class="mb-0">Cek Disini</h1>
        </div>

        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Cek Resi</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0 bg-light px-4" style="height: 55px;">
                                <option selected disabled>Your Option</option>
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select border-0 bg-light px-4" style="height: 55px;">
                                <option selected disabled>Your Option</option>
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Cek Tarif</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
{{-- content home end --}}
<!-- Vendor Start -->
<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-2 mb-2">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            {{-- <h5 class="fw-bold  text-uppercase" style="color:#E0202D;">Cek Resi</h5> --}}
            <h2 class="mb-0">Media Partner</h2>
        </div>
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                <img src="{{ asset('assets1/img/vendor-1.jpg')}}" alt="">
                <img src="{{ asset('assets1/img/vendor-2.jpg')}}" alt="">
                <img src="{{ asset('assets1/img/vendor-3.jpg')}}" alt="">
                <img src="{{ asset('assets1/img/vendor-4.jpg')}}" alt="">
                <img src="{{ asset('assets1/img/vendor-5.jpg')}}" alt="">
                <img src="{{ asset('assets1/img/vendor-6.jpg')}}" alt="">
                <img src="{{ asset('assets1/img/vendor-7.jpg')}}" alt="">
                <img src="{{ asset('assets1/img/vendor-7.jpg')}}" alt="">

            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
<style>
    * {
      box-sizing: border-box;
    }

    .custom-link {
      position: relative;
      text-decoration: none;
      color: #d8276c;
      text-shadow: 2px 2px 2px #070c11;
      padding-bottom: 3px;
      overflow: hidden;
    }

    .custom-link::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      background: #fff;
      width: 0;
      height: 2px;
      transition: 0.35s cubic-bezier(0.17, 0.67, 0.5, 1.03);
    }

    .custom-link:hover::after {
      width: 100%;
    }

    .custom-thumb img {
      max-width: 100%;
      height: auto;
      display: block;
    }

    .custom-card {
      position: relative;
      width: 100%;
      border-radius: 3px;
      overflow: hidden;
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
      transition: transform 0.4s, box-shadow 0.4s;
    }

    .custom-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
    }

    .custom-card .custom-thumb {
      width: 100%;
      height: 100%;
      background-size: cover;
      border-radius: 3px;
    }

    .custom-card .custom-infos {
      width: 100%;
      height: 350px;
      position: absolute;
      bottom: -260px;
      left: 0;
      padding: 14px 24px;
      background: #fff;
      transition: bottom 0.4s, opacity 0.5s 0.25s;
    }

    .custom-card:hover .custom-infos {
      bottom: 0;
    }

    .custom-card .custom-infos .custom-title {
      position: relative;
      margin: 10px 0;
      letter-spacing: 3px;
      color: #152536;
      font-size: 1rem;
      text-transform: uppercase;
      text-shadow: 0 0 0px #32577f;
    }

    .custom-card .custom-infos .custom-flag {
      position: absolute;
      top: 50%;
      right: 0;
      transform: translateY(-50%);
      width: 35px;
      height: 23px;
      background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/397014/flag.png") no-repeat top right;
      background-size: 100% auto;
      display: inline-block;
    }

    .custom-card .custom-infos .custom-date,
    .custom-card .custom-infos .custom-seats {
      margin-bottom: 10px;
      text-transform: uppercase;
      font-size: 0.85rem;
      color: rgba(21, 37, 54, 0.7);
    }

    .custom-card .custom-infos .custom-seats {
      display: inline-block;
      margin-bottom: 24px;
      padding-bottom: 24px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.2);
      opacity: 0;
      transition: opacity 0.5s 0.25s;
    }

    .custom-card .custom-infos .custom-txt {
      line-height: 2;
      font-size: 0.95rem;
      color: rgba(21, 37, 54, 0.7);
      opacity: 0;
      transition: opacity 0.5s 0.25s;
    }

    .custom-card .custom-infos .custom-details {
      position: absolute;
      left: 0;
      bottom: 0;
      margin: 10px 0;
      padding: 20px 24px;
      letter-spacing: 1px;
      color: #4e958b;
      font-size: 0.9rem;
      text-transform: uppercase;
      cursor: pointer;
      opacity: 0;
      transition: opacity 0.5s 0.25s;
    }

    .custom-card:hover .custom-infos .custom-seats,
    .custom-card:hover .custom-infos .custom-txt,
    .custom-card:hover .custom-infos .custom-details {
      opacity: 1;
    }


    .custom-thumb img {
      width: 100%;
      height: auto;
      display: block;
    }
  </style>

    <div class="container-fluid py-3">
        <div class="container py-5">
            {{-- <div class="section-title text- position-relative pb-3 mb-5 mx-auto" style="max-width:100%;">

                <h2 class="mb-0">Pelayanan</h2>
            </div> --}}
            <div class="row g-5">
                <div class="col-lg-4">
                    <!-- Kartu Acara 1 -->
                    <article class="custom-card">
                        <div class="custom-thumb">
                            <img class="img-fluid w-100" src="{{ asset('assets1/img/truk.jpg')}}" alt="New York City">
                        </div>
                        <div class="custom-infos">
                            <h2 class="custom-title">Darat</h2>
                            <p class="custom-txt">
                                Join us for our Live Infinity Session in beautiful New York City. This is a 3 day intensive workshop where you'll learn how to become a better version of...
                                Join us for our Live Infinity Session in beautiful New York City. This is a 3 day intensive workshop where you'll learn how to become a better version of...
                            </p>
                            <h3 class="custom-details">Event details</h3>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <!-- Kartu Acara 2 -->
                    <article class="custom-card">
                        <div class="custom-thumb">
                            <img class="img-fluid w-100" src="{{ asset('assets1/img/kapal.jpg')}}" alt="New York City">
                        </div>
                        <div class="custom-infos">
                            <h2 class="custom-title">Laut</h2>
                            <p class="custom-txt">
                                Join us for our Live Infinity Session in beautiful New York City. This is a 3 day intensive workshop where you'll learn how to become a better version of...
                                Join us for our Live Infinity Session in beautiful New York City. This is a 3 day intensive workshop where you'll learn how to become a better version of...
                            </p>
                            <h3 class="custom-details">Event details</h3>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <!-- Kartu Acara 3 -->
                    <article class="custom-card">
                        <div class="custom-thumb">
                            <img class="img-fluid w-100" src="{{ asset('assets1/img/pesawat.jpg')}}" alt="New York City">
                        </div>
                        <div class="custom-infos">
                            <h2 class="custom-title">Udara</h2>
                            <p class="custom-txt">
                                Join us for our Live Infinity Session in beautiful New York City. This is a 3 day intensive workshop where you'll learn how to become a better version of...
                                Join us for our Live Infinity Session in beautiful New York City. This is a 3 day intensive workshop where you'll learn how to become a better version of...
                            </p>
                            <a href="/jasa"> <!-- Ganti URL sesuai kebutuhan Anda -->
                                <h3 class="custom-details">Event details</h3>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    {{-- FAQ --}}

<style>
    .custom-transition,
    ul.custom-list li i:before,
    ul.custom-list li i:after,
    p.custom-paragraph {
        transition: all 0.25s ease-in-out;
    }

    .custom-flipIn,
    ul.custom-list li,
    h1.custom-heading {
        animation: custom-flipdown 0.5s ease both;
    }

    .no-select,
    h2.custom-subheading {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    html.custom-html {
        width: 100%;
        height: 100%;
        perspective: 900;
        overflow-y: scroll;
        background-color: #dce7eb;
        font-family: "Titillium Web", sans-serif;
        color: rgba(48, 69, 92, 0.8);
    }

    body.custom-body {}

    @media (max-width: 550px) {
        body.custom-body {
            box-sizing: border-box;
            transform: translate(0, 0);
            max-width: 100%;
            min-height: 100%;
            margin: 0;
            left: 0;
        }
    }

    h1.custom-heading,
    h2.custom-subheading {
        color: #df1623;
    }

    h1.custom-heading {
        text-transform: uppercase;
        font-size: 36px;
        line-height: 42px;
        letter-spacing: 3px;
        font-weight: 100;
    }

    h2.custom-subheading {
        font-size: 26px;
        line-height: 34px;
        font-weight: 300;
        letter-spacing: 1px;
        display: block;
        background-color: #fefffa;
        margin: 0;
        cursor: pointer;
    }

    p.custom-paragraph {
        color: rgba(48, 69, 92, 0.8);
        font-size: 17px;
        line-height: 26px;
        letter-spacing: 1px;
        position: relative;
        overflow: hidden;
        max-height: 800px;
        opacity: 1;
        transform: translate(0, 0);
        margin-top: 14px;
        z-index: 2;
    }

    ul.custom-list {
        list-style: none;
        perspective: 900;
        padding: 0;
        margin: 0;
    }

    ul.custom-list li {
        position: relative;
        padding: 0;
        margin: 0;
        padding-bottom: 4px;
        padding-top: 18px;
        border-top: 1px dotted #dce7eb;
    }

    ul.custom-list li:nth-of-type(1) {
        animation-delay: 0.5s;
    }

    ul.custom-list li:nth-of-type(2) {
        animation-delay: 0.75s;
    }

    ul.custom-list li:nth-of-type(3) {
        animation-delay: 1s;
    }

    ul.custom-list li:last-of-type {
        padding-bottom: 0;
    }

    ul.custom-list li i {
        position: absolute;
        transform: translate(-6px, 0);
        margin-top: 16px;
        right: 0;
    }

    ul.custom-list li i:before,
    ul.custom-list li i:after {
        content: "";
        position: absolute;
        background-color: #ff6873;
        width: 3px;
        height: 9px;
    }

    ul.custom-list li i:before {
        transform: translate(-2px, 0) rotate(45deg);
    }

    ul.custom-list li i:after {
        transform: translate(2px, 0) rotate(-45deg);
    }

    ul.custom-list li input[type=checkbox] {
        position: absolute;
        cursor: pointer;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0;
    }

    ul.custom-list li input[type=checkbox]:checked~p.custom-paragraph {
        margin-top: 0;
        max-height: 0;
        opacity: 0;
        transform: translate(0, 50%);
    }

    ul.custom-list li input[type=checkbox]:checked~i:before {
        transform: translate(2px, 0) rotate(45deg);
    }

    ul.custom-list li input[type=checkbox]:checked~i:after {
        transform: translate(-2px, 0) rotate(-45deg);
    }

    @keyframes custom-flipdown {
        0% {
            opacity: 0;
            transform-origin: top center;
            transform: rotateX(-90deg);
        }

        5% {
            opacity: 1;
        }

        80% {
            transform: rotateX(8deg);
        }

        83% {
            transform: rotateX(6deg);
        }

        92% {
            transform: rotateX(-3deg);
        }

        100% {
            transform-origin: top center;
            transform: rotateX(0deg);
        }
    }
</style>

<div class="container-fluid py-1">
    <div class="container py-1">
        <div class="col-lg-12">
            <h1 class="custom-heading">FAQ???</h1>
            <ul class="custom-list">
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2 class="custom-subheading">Languages Used</h2>
                    <p class="custom-paragraph">This page was written in HTML and CSS. The CSS was compiled from SASS. I used Normalize as my CSS
                        reset and -prefix-free to save myself some headaches. I haven't quite gotten the hang of Slim
                        for
                        compiling into HTML, but someday I'll use it since its syntax compliments that of SASS.
                        Regardless,
                        this could all be done in plain HTML and CSS.</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2 class="custom-subheading">How it Works</h2>
                    <p class="custom-paragraph">Using the sibling and checked selectors, we can determine the styling of sibling elements based
                        on
                        the checked state of the checkbox input element. One use, as demonstrated here, is an entirely
                        CSS
                        and HTML accordion element. Media queries are used to make the element responsive to different
                        screen sizes.</p>
                </li>
                <li>
                    <input type="checkbox" checked>
                    <i></i>
                    <h2 class="custom-subheading">Points of Interest</h2>
                    <p class="custom-paragraph">By making the open state default for when :checked isn't detected, we can make this system
                        accessable
                        for browsers that don't recognize :checked. The fallback is simply an open accordion. The
                        accordion
                        can be manipulated with Javascript (if needed) by changing the "checked" property of the input
                        element.</p>
                </li>
            </ul>
        </div>
    </div>
</div>


{{-- FAQ end --}}
<!-- Why APM -->
{{-- <div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">Why Choose Us</h2>
                <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

                <div class="row my-5">
                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/truck.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Fast &amp; Free Shipping</h3>
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/bag.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>Easy to Shop</h3>
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="icon">
                                <img src="images/support.svg" alt="Image" class="imf-fluid">
                            </div>
                            <h3>24/7 Support</h3>
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                        </div>
                    </div>

                    <div class="col-6 col-md-6">
                        <div class="feature">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h3>Hassle Free Returns</h3>
                            <p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img class="w-100" src="{{ asset('assets1/img/manfaat.jpg')}}" alt="Image">
                </div>
            </div>

        </div>
    </div>
</div> --}}

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;" data-aos="fade-up">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
            <h1 class="mb-0">Kenapa Harus APM?</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Best In Industry</h4>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor lanfanfoqinfqu fuqbfquifbq uqbiuqbfqbfjk fkj ufuiqbquibqbqibg boigqeubgqub</p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Professional Staff</h4>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor affiaufifviaiuaviavifvqfiqvkvafjbajksfhagfasbfjabfjas fjkafukavfaufafbakbfka fa fas kfj akf  </p>
                    </div>
                    <div class="col-12">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Award Winning</h4>
                        <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolorafabfakfbfakjfbafbajkfb </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                    <div class="col-12">
                        <img class="w-100" src="{{ asset('assets1/img/serius.jpg')}}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- why APM END --}}
<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Berita Terkini</h5>
            <h1 class="mb-0">Baca Artikel Terbaru dari Postingan Blog Kami</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets1/img/blog-1.jpg')}}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Promo</a>
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                        <h4 class="mb-3">How to build a website</h4>
                        <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                        <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets1/img/blog-2.jpg')}}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Promo</a>
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>Johphn Doe</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                        <h4 class="mb-3">How to build a website</h4>
                        <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                        <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('assets1/img/blog-3.jpg')}}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Promo</a>
                    </div>
                    <div class="p-4">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                        </div>
                        <h4 class="mb-3">How to build a website</h4>
                        <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                        <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Start -->

@endsection
