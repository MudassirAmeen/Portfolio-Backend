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

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">

            <h1><a href="index.html">Mudassir Ameen</a></h1>
            {{-- Uncomment below if you prefer to use an image logo --}}
            {{--  <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>  --}}
            <h2>I'm a passionate <span class='''>Web development</span> from British Asia.</h2>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link active" href="#header">Home</a></li>
                    <li><a class="nav-link" href="#about">About</a></li>
                    <li><a class="nav-link" href="#resume">Resume</a></li>
                    <li><a class="nav-link" href="#services">Services</a></li>
                    <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            {{--  Navbar  --}}

            <div class="social-links">
                <a href="#" class="twitter"><svg role="img" class="px-1" viewBox="0 0 25 25"
                        xmlns="http://www.w3.org/2000/svg" id="IconChangeColor" height="200" width="200">
                        <title>Fiverr</title>
                        <path
                            d="M23.004 15.588a.995.995 0 1 0 .002-1.99.995.995 0 0 0-.002 1.99zm-.996-3.705h-.85c-.546 0-.84.41-.84 1.092v2.466h-1.61v-3.558h-.684c-.547 0-.84.41-.84 1.092v2.466h-1.61v-4.874h1.61v.74c.264-.574.626-.74 1.163-.74h1.972v.74c.264-.574.625-.74 1.162-.74h.527v1.316zm-6.786 1.501h-3.359c.088.546.43.858 1.006.858.43 0 .732-.175.83-.487l1.425.4c-.351.848-1.22 1.364-2.255 1.364-1.748 0-2.549-1.355-2.549-2.515 0-1.14.703-2.505 2.45-2.505 1.856 0 2.471 1.384 2.471 2.408 0 .224-.01.37-.02.477zm-1.562-.945c-.04-.42-.342-.81-.889-.81-.508 0-.81.225-.908.81h1.797zM7.508 15.44h1.416l1.767-4.874h-1.62l-.86 2.837-.878-2.837H5.72l1.787 4.874zm-6.6 0H2.51v-3.558h1.524v3.558h1.591v-4.874H2.51v-.302c0-.332.235-.536.606-.536h.918V8.412H2.85c-1.162 0-1.943.712-1.943 1.755v.4H0v1.316h.908v3.558z"
                            id="mainIconPathAttribute" fill="#ffffff"></path>
                    </svg></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

        </div>
    </header>
    {{--  End Header  --}}

    {{-- ======= About Section ======= --}}
    <section id="about" class="about">

        {{-- ======= About Me =======  --}}
        <div class="about-me container">

            <div class="section-title">
                <h2>About</h2>
                <p>Learn more about me</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src='{{ asset("storage/AdminPanel/assets/About/$about->image") }}' class="img-fluid"
                        alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Full Stack Web Developer</h3>
                    <p class="fst-italic">
                        I am a Full Stack Web Developer with HTML, CSS, JavaScript, PHP, Laravel, Bootstrap, Tailwind
                        CSS, Jquery.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                    <span>{{ date('d M Y', strtotime($about->birthday)) }}<span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a
                                            class="text-reset"
                                            href="{{ $about->website }}">{{ $about->website }}</a></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                    <span>{{ $about->phone }}</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                    <span>{{ $about->city }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                    <span>{{ date('Y') - date('Y', strtotime($about->birthday)) }}</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                    <span>{{ $about->degree }}</span>
                                </li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><a
                                            class="text-reset"
                                            href="mailto:{{ $about->email }}">{{ $about->email }}</a></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                    <span>Available</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        As a web developer, I am committed to helping my clients create dynamic and responsive websites
                        that meet
                        their needs and exceed their expectations. My services include everything from initial design
                        and
                        development to ongoing maintenance and support.
                    </p>
                </div>
            </div>

        </div>
        {{--  End About Section  --}}

        {{-- ======= Counts ======= --}}
        <div class="counts container">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="99" data-purecounter-duration="1"
                            class="purecounter"></span><b>.9%</b>
                        <p>Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                            class="purecounter"></span><b>+</b>
                        <p>Projects</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="400" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Awards</p>
                    </div>
                </div>

            </div>

        </div>
        {{--  End Counts  --}}

        {{-- ======= Skills  ======= --}}
        <div class="skills container">

            <div class="section-title">
                <h2>Skills</h2>
            </div>

            <div class="row skills-content">

                @foreach ($skills as $skill)
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill">{{ $skill->name }}<i
                                    class="val">{{ $skill->percentage }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar"
                                    aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{--  End Skills  --}}

            {{--  ======= Interests ======= --}}
            {{-- <div class="interests container">

            <div class="section-title">
                <h2>Interests</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4">
                <div class="icon-box">
                    <i class="ri-store-line" style="color: #ffbb2c;"></i>
                    <h3>Lorem Ipsum</h3>
                </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                    <h3>Dolor Sitema</h3>
                </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                    <h3>Sed perspiciatis</h3>
                </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                <div class="icon-box">
                    <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                    <h3>Magni Dolores</h3>
                </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-database-2-line" style="color: #47aeff;"></i>
                    <h3>Nemo Enim</h3>
                </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                    <h3>Eiusmod Tempor</h3>
                </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                    <h3>Midela Teren</h3>
                </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                    <h3>Pira Neve</h3>
                </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-anchor-line" style="color: #b2904f;"></i>
                    <h3>Dirada Pack</h3>
                </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-disc-line" style="color: #b20969;"></i>
                    <h3>Moton Ideal</h3>
                </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-base-station-line" style="color: #ff5828;"></i>
                    <h3>Verdo Park</h3>
                </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                <div class="icon-box">
                    <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                    <h3>Flavor Nivelanda</h3>
                </div>
                </div>
            </div>

            </div> --}}
            {{--  End Interests  --}}

            {{-- ======= Testimonials ======= --}}
            <div class="testimonials container">

                <div class="section-title">
                    <h2>Testimonials</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        @foreach ($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    {!! html_entity_decode($testimonial->comment) !!}
                                    <img src='{{ asset("storage/AdminPanel/assets/Testimonial/$testimonial->image") }}'
                                        class="testimonial-img" alt="">
                                    <h3>{{ $testimonial->name }}</h3>
                                    <h4>{{ $testimonial->role }}</h4>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="owl-carousel testimonials-carousel">

                </div>

            </div>
            {{--  End Testimonial  --}}

    </section>
    {{--  End About Section  --}}

    {{-- ======= Resume Section ======= --}}
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>Check My Resume</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4>Mudassir Ameen</h4>
                        <p><em>I am Mudassir Ameen, a full stack web developer with a passion for problem solving and
                                creating
                                innovative solutions. I specialize in HTML, CSS, Javascript, PHP and Laravel. My aim is
                                to develop
                                products with high quality that bring value to my clients and to the world.</em></p>
                        <p>
                        <ul>
                            <li>Mianwali, Punjab, Pakistan</li>
                            <li>+92 303 2355934</li>
                            <li><a href="mailto:{{ $about->email }}" class="text-white">{{ $about->email }}</a></li>
                        </ul>
                        </p>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    @foreach ($education as $edu)
                        <div class="resume-item">
                            <h4>{{ $edu->name }}</h4>
                            <h5>{{ date('Y', strtotime($edu->start)) }} - {{ date('Y', strtotime($edu->end)) }}</h5>
                            <p><em>{{ $edu->institute }}</em></p>
                            <p>{{ $edu->description }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-6">
                    <h3 class="resume-title">Professional Experience</h3>

                    @foreach ($professionals as $professional)
                        <div class="resume-item">
                            <h4>{{ $professional->name }}</h4>
                            <h5>{{ date('Y', strtotime($professional->start)) }} - Present</h5>
                            <p><em>{{ $professional->institute }}</em></p>
                            <p>
                                {!! html_entity_decode($professional->longdescription) !!}
                            </p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    {{--  End Resume Section  --}}

    {{-- ======= Services Section ======= --}}
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>My Services</p>
            </div>

            <div class="row">

                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                        <div class="icon-box w-100">
                            <div class="icon"><img
                                    src='{{ asset("storage/AdminPanel/assets/Service/$service->image") }}'
                                    alt=""></div>
                            <h4><a href="">{{ $service->name }}</a></h4>
                            <p>{{ $service->description }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    {{--  Services  --}}

    {{-- ======= Portfolio Section ======= --}}
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>My Works</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach ($categories as $category)
                            <li data-filter=".{{ $category->name }}">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $portfolio->category }}">
                        <div class="portfolio-wrap">
                            <img src="{{ asset("storage/AdminPanel/assets/Portfolio/$portfolio->featureImage") }}"
                                class="img-fluid" alt="{{ $portfolio->name }}">
                            <div class="portfolio-info">
                                <h4>{{ $portfolio->name }}</h4>
                                <p>{{ date('d-M-Y', strtotime($portfolio->date)) }}</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset("storage/AdminPanel/assets/Portfolio/$portfolio->featureImage") }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ route('portfolioItem', ['id' => $portfolio->id]) }}"
                                        data-gallery="portfolioDetailsGallery" data-glightbox="type: external"
                                        class="portfolio-details-lightbox" title="Portfolio Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Contact Me</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>My Address</h3>
                        <p>{{ $about->city }}</p>
                    </div>
                </div>

                <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/people/Mudassir-Ameen/100087910382119/"
                                class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Me</h3>
                        <p><a class="text-reset" href="{{ $about->website }}">{{ $about->website }}</a></p>
                    </div>
                </div>
                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Me</h3>
                        <p>{{ $about->phone }}</p>
                    </div>
                </div>
            </div>

            <form action="admin/forms/contact.php" method="post" class="php-email-form mt-4">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                        required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

        </div>
    </section><!-- End Contact Section -->
    <div class="credits">
        <button><a href="https://api.whatsapp.com/send?phone=923032355934"><i class="bi bi-whatsapp"></i></a></button>
        <pre>Place Order And <br>Get 20% Discount</pre>

    </div>
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
