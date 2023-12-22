<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>APM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets1/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets1/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets1/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets1/css/style.css') }}" rel="stylesheet">
</head>
<style>
    /* Add this CSS in your stylesheet or within a <style> tag in your HTML */
    .logo-img {
        height: 0;
        /* Set the initial height to 0 */
        opacity: 0;
        /* Set the initial opacity to 0 */
        transition: opacity 0.3s ease, height 0.3s ease;
        /* Add transition for both opacity and height */
    }

    #navbarCollapse.scrolled .logo-img {
        height: 60px;
        /* Set the height when scrolled */
        opacity: 1;
        /* Set the opacity when scrolled */
    }

    #navbarWrapper {
        height: 0;
        overflow: hidden;
        transition: height 0.3s ease;
    }

    #myNavbar.scrolled {
        height: 60px;
        /* Set the desired height when scrolled */
    }

    .wave-background {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%230099ff" fill-opacity="1" d="M0,64L34.3,53.3C68.6,43,137,21,206,26.7C274.3,32,343,64,411,112C480,160,549,224,617,218.7C685.7,213,754,139,823,122.7C891.4,107,960,149,1029,149.3C1097.1,149,1166,107,1234,117.3C1302.9,128,1371,192,1406,224L1440,256L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>') center bottom no-repeat;
        background-size: cover;
    }

    .wave-background img {
        width: 100%;
        height: auto;
    }

</style>

<div class="container-fluid position-relative p-0">
    <nav id="myNavbar" class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <img src="{{ asset('assets1/img/logo.png') }}" alt="Your Logo" class="logo-img me-2">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="feature.html" class="dropdown-item">Our features</a>
                        <a href="team.html" class="dropdown-item">Team Members</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                    class="fa fa-search"></i></butaton>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var navbarCollapse = document.getElementById("navbarCollapse");
            var logoImg = document.querySelector(".logo-img");

            window.addEventListener("scroll", function () {
                if (window.scrollY > 0) {
                    navbarCollapse.classList.add("scrolled");
                    logoImg.style.height = "60px"; /* Adjust the height when scrolled */
                    logoImg.style.opacity = "1"; /* Adjust the opacity when scrolled */
                } else {
                    navbarCollapse.classList.remove("scrolled");
                    logoImg.style.height = "0"; /* Set the height to 0 when at the top */
                    logoImg.style.opacity = "0"; /* Set the opacity to 0 when at the top */
                }
            });
        });

    </script>


