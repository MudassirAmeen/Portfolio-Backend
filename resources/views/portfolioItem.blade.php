<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Mudassir Ameen</title>
    <meta
        content="I am a Full Stack Web deveoper. Am an experienced Developer of both code in WordPress. I have also experience in Laravel."
        name="description">
    <meta content="Mudassir Ameen, WordPress, Laravel, PHP, Front End, Back End, Full Stack Developer" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('FrontEnd/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('FrontEnd/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('FrontEnd/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('FrontEnd/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('FrontEnd/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <main id="main">

        <!-- ======= Portfolio Details ======= -->
        <div id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row">

                    <div class="col-lg-8">
                        <h2 class="portfolio-title">Project Name: {{ $portfolioItem->name }}</h2>

                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                @foreach ($imageGallery as $image)
                                    <div class="swiper-slide">
                                        <img src="{{ asset("storage/AdminPanel/assets/Portfolio/$image") }}"
                                            alt="{{ $portfolioItem->name }}" class="img-fluid">
                                    </div>
                                @endforeach

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                    <div class="col-lg-4 portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: {{ $portfolioItem->category }}</li>
                            <li><strong>Client</strong>: {{ $portfolioItem->client }}</li>
                            <li><strong>Project date</strong>: {{ date('d-M-Y', strtotime($portfolioItem->date)) }}
                            </li>
                            <li><strong>Project URL</strong>: <a
                                    href="{{ $portfolioItem->url }}">{{ $portfolioItem->url }}</a></li>
                        </ul>

                        <p>
                            {{ $portfolioItem->description }}
                        </p>
                    </div>

                </div>

            </div>
        </div><!-- End Portfolio Details -->

    </main><!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('FrontEnd/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('FrontEnd/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('FrontEnd/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('FrontEnd/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('FrontEnd/assets/js/main.js') }}"></script>

</body>

</html>
