<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>BERSIH BERSINAR</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  {{-- <link href="/CoreBiz/assets/img/favicon.png" rel="icon">
  <link href="/CoreBiz/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/CoreBiz/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/CoreBiz/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/CoreBiz/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/CoreBiz/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/CoreBiz/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/CoreBiz/assets/css/main.css" rel="stylesheet">

  
</head>

<body class="index-page">
  @if (session('success'))
    <div class="alert alert-success text-center" 
         style="background: #4caf50; color: white; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
@endif


  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="Timbersihbersinar@gmail.com">Timbersihbersinar@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 8925771086746</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="/CoreBiz/assets/img/logo.webp" alt=""> -->
          <h1 class="sitename">BERSIH BERSINAR</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#service">Service</a></li>
            <li><a href="#team">Team</a></li>
            
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="hero-content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="content">
                <h1>Bersih <b>BERSINAR</b></h1>
                <p>Kami memiliki layanan home service yang terpercaya.</p>
                <div class="cta-group">
                  <a href="#about" class="btn-primary">Lihat tentang kami</a>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="hero-image">
                <img src="/CoreBiz/assets/img/about/cleaning service company.jpg" alt="Corporate Business" class="img-fluid">
                <div class="floating-card" data-aos="fade-up" data-aos-delay="300">
                  <div class="card-content">
                    <div class="metric">
                      <span class="number">150+</span>
                      <span class="label">Telah memesan jasa kami</span>
                    </div>
                    <div class="metric">
                      <span class="number">98%</span>
                      <span class="label">Orang-orang percaya terhadap jasa kami</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hero-features">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-item">
                  <div class="icon">
                    <i class="bi bi-graph-up"></i>
                  </div>
                  <h4>HOME CLEANING</h4>
                  <p>Layanan kebersihan rumah lengkap dari ruang tamu, kamar, dapur, hingga kamar mandi.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-item">
                  <div class="icon">
                    <i class="bi bi-lightbulb"></i>
                  </div>
                  <h4>DEEP CLEANING</h4>
                  <p>Membersihkan area sulit, noda membandel, dan kotoran menumpuk secara menyeluruh.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-item">
                  <div class="icon">
                    <i class="bi bi-people"></i>
                  </div>
                  <h4>DISINFECTION SERVICE</h4>
                  <p>Layanan penyemprotan desinfektan untuk menjaga kebersihan dan kesehatan rumah.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-item">
                  <div class="icon">
                    <i class="bi bi-award"></i>
                  </div>
                  <h4>PROFESSIONAL CLEANERS</h4>
                  <p>Tim yang memiliki pengalaman, terlatih, dan terpercaya untuk kebersihan maksimal.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

   <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Find Out More About Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="content">
              <h2>KEBERSIHAN & KENYAMANAN KE SETIAP SUDUT RUMAH</h2>
              <p class="lead">Bersih Bersinar adalah layanan kebersihan profesional yang berdiri dengan tujuan membantu keluarga Indonesia mendapatkan rumah yang lebih bersih, sehat, dan nyaman. Kami percaya bahwa lingkungan yang rapi dapat meningkatkan kualitas hidup, produktivitas, dan kebahagiaan sehari-hari.</p>

              <div class="description">
                <p>Dengan tim yang berpengalaman, peralatan modern, serta penggunaan produk pembersih yang aman bagi anak dan hewan peliharaan, kami selalu berkomitmen memberikan hasil yang terbaik di setiap kunjungan.
                  Mulai dari pembersihan harian, deep cleaning, hingga layanan khusus pindahan rumah—kami siap menjadi solusi kebersihan terpercaya Anda.</p>
              </div>

              <div class="stats-row">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>+
                  </div>
                  <div class="stat-label">Tahun pengalaman gabungan tim profesional</div>
                </div>

                <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>+
                  </div>
                  <div class="stat-label">Rumah & apartemen yang telah kami bersihkan</div>
                </div>

                <div class="stat-item" data-aos="fade-up" data-aos-delay="500">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1" class="purecounter"></span>+
                  </div>
                  <div class="stat-label">Layanan kebersihan yang berhasil diselesaikan dengan kepuasan pelanggan</div>
                </div>
              </div><!-- End Stats Row -->

              <div class="cta-section" data-aos="fade-up" data-aos-delay="300">
                <a href="#team" class="btn-link">Meet Our Team <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="image-container">
              <img src="/CoreBiz/assets/img/about/about-square-8.webp" alt="About Us" class="img-fluid">
              <div class="image-overlay">
                <div class="overlay-content">
                  <i class="bi bi-award"></i>
                  <div class="overlay-text">
                    <h4>Award Winning</h4>
                    <p>Excellence in Service</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

   <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center mb-5">
          <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="200">
            <h2 class="section-headline mb-4">Professional Cleaning for a Healthier Living Space</h2>
            <p class="section-description">Kami menghadirkan layanan kebersihan yang menyeluruh dan terpercaya, memastikan setiap sudut rumah dan ruangan Anda tetap bersih, nyaman, dan higienis setiap hari.</p>
          </div>
        </div>

        <div class="stats-grid row g-0 justify-content-center">
          <div class="col-lg-10">
            <div class="stats-container">

              <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-content">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2" class="purecounter"></span>K+
                  </div>
                  <div class="stat-divider"></div>
                  <div class="stat-label">Homes Cleaned</div>
                  <p class="stat-description">Dipercaya ribuan pelanggan untuk menjaga rumah tetap bersih dan tertata.</p>
                </div>
              </div>

              <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-content">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="89" data-purecounter-duration="2" class="purecounter"></span>%
                  </div>
                  <div class="stat-divider"></div>
                  <div class="stat-label">Customer Satisfaction</div>
                  <p class="stat-description">Mayoritas pelanggan merasa puas dengan kualitas layanan dan kebersihan yang diberikan.</p>
                </div>
              </div>

              <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-content">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="2.8" data-purecounter-duration="2" class="purecounter"></span>M
                  </div>
                  <div class="stat-divider"></div>
                  <div class="stat-label">Professional Cleaners</div>
                  <p class="stat-description">Tim terlatih, berpengalaman, dan bersertifikasi dalam standar kebersihan modern.</p>
                </div>
              </div>

              <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-content">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="2" class="purecounter"></span>/7
                  </div>
                  <div class="stat-divider"></div>
                  <div class="stat-label">Booking & Support</div>
                  <p class="stat-description">Pesan kapan saja, dukungan tersedia setiap saat untuk kenyamanan Anda.</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row justify-content-center mt-5">
          <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="500">
            <div class="achievement-badge">
              <div class="badge-icon">
                <i class="bi bi-award"></i>
              </div>
              <div class="badge-content">
                <h4 class="badge-title">Certified Quality Service</h4>
                <p class="badge-text">Menerima penghargaan “Trusted Home Cleaning Service” selama dua tahun berturut-turut</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Stats Section -->

   <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonial-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>

          <div class="swiper-wrapper">

            <!-- Testimonial Slide 1 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="testimonial-header">
                  <img src="/CoreBiz/assets/img/person/person-f-12.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>gudd banget.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Karina aespo</h5>
                  <span>lider aespo</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 2 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="300">
                <div class="testimonial-header">
                  <img src="/CoreBiz/assets/img/person/person-m-8.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Layanan cleaning yang bagus</p>
                </div>
                <div class="testimonial-footer">
                  <h5>juyon</h5>
                  <span>kang genjreng</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 3 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="400">
                <div class="testimonial-header">
                  <img src="/CoreBiz/assets/img/person/person-f-6.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Rumah aing jadinya bagus yorobun rekomen deh.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>gisel</h5>
                  <span>latina mami</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 4 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="500">
                <div class="testimonial-header">
                  <img src="/CoreBiz/assets/img/person/person-m-12.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>bagus layanannya, next bakal panggil lagi</p>
                </div>
                <div class="testimonial-footer">
                  <h5>eaj</h5>
                  <span>artis nugu</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 5 -->
            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="zoom-in" data-aos-delay="600">
                <div class="testimonial-header">
                  <img src="/CoreBiz/assets/img/person/person-f-10.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>WAAA REKOMEN BERATT SII</p>
                </div>
                <div class="testimonial-footer">
                  <h5>jeya</h5>
                  <span>ceo of abal abal</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

          </div>

          <div class="swiper-navigation">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Service Section -->
<section id="service" class="service section">
  <div class="container">

    <div class="row text-center mb-5">
      <h2 class="fw-bold">Our Services</h2>
      <p class="text-muted">Pilih layanan kebersihan sesuai kebutuhan Anda.</p>
    </div>

    <div class="service-grid">

      <!-- 1. Request Lain -->
      <div class="service-card">
        <div class="service-img-container">
          <img src="assets/img/woiii gelut.jpg" alt="Request Lain">
        </div>
        <div class="service-content">
          <h3>Request Lain</h3>
          <p>Custom cleaning untuk kebutuhan khusus sesuai permintaan Anda.</p>
         <a 
  href="{{ route('pemesanan.create', ['service' => 'Request Lain']) }}" 
  class="btn btn-primary">
  Pesan Sekarang
</a>


        </div>
      </div>

      <!-- 2. AC Maintenance -->
      <div class="service-card">
        <div class="service-img-container">
          <img src="/CoreBiz/assets/img/ac maintence.jpg" alt="AC Maintenance">
        </div>
        <div class="service-content">
          <h3>AC Maintenance</h3>
          <p>Perawatan AC rutin agar udara tetap segar dan optimal.</p>
                    <a href="{{ route('pemesanan.create', ['service' => 'AC Maintenance']) }}" class="btn btn-primary">
            Pesan Sekarang
          </a>
        </div>
      </div>
<!-- 3. Deep Cleaning -->
      <div class="service-card">
        <div class="service-img-container">
          <img src="/CoreBiz/assets/img/deep cleaning.jpg" alt="Deep Cleaning">
        </div>
        <div class="service-content">
          <h3>Deep Cleaning</h3>
          <p>Pembersihan detail dari atas hingga bawah untuk hasil maksimal.</p>
          <a href="{{ route('pemesanan.create', ['service' => 'Deep Cleaning']) }}"class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>

      <!-- 4. Daily/General Cleaning -->
      <div class="service-card">
        <div class="service-img-container">
          <img src="/CoreBiz/assets/img/daily cleaning.jpg" alt="Daily/General Cleaning">
        </div>
        <div class="service-content">
          <h3>Daily/General Cleaning</h3>
          <p>Pembersihan rutin harian agar ruangan selalu bersih dan nyaman.</p>
          <<a href="{{ route('pemesanan.create', ['service' => 'Daily/General Cleaning']) }}" 
            class="btn btn-primary">
            Pesan Sekarang
          </a>
        </div>
      </div>

      <!-- 5. Specialized Cleaning -->
      <div class="service-card">
        <div class="service-img-container">
          <img src="/CoreBiz/assets/img/spesial cleaning.jpg" alt="Specialized Cleaning">
        </div>
        <div class="service-content">
          <h3>Specialized Cleaning</h3>
          <p>Layanan pembersihan khusus sesuai kebutuhan tertentu.</p>
          <a  href="{{ route('pemesanan.create', ['service' => 'Specialized Cleaning']) }}" class="btn btn-primary">Pesan Sekarang</a>
        </div>
      </div>

      <!-- 6. Pembersihan Area Khusus -->
      <div class="service-card">
        <div class="service-img-container">
          <img src="/CoreBiz/assets/img/area khusus.jpg" alt="Pembersihan Area Khusus">
        </div>
        <div class="service-content">
          <h3>Pembersihan Area Khusus</h3>
          <p>Fokus membersihkan area yang sulit atau khusus.</p>
          <a href="{{ route('pemesanan.create', ['service' => 'Pembersihan Area Khusus']) }}" class="btn btn-primary"> Pesan Sekarang</a>
        </div>
      </div>

      <!-- 7. Disinfektan/Fogging -->
      <div class="service-card">
        <div class="service-img-container">
          <img src="/Corebiz/assets/img/disinfektan clean.jpg" alt="Disinfektan/Fogging">
        </div>
        <div class="service-content">
          <h3>Disinfektan/Fogging</h3>
          <p>Membasmi bakteri & virus dengan fogging profesional.</p>
          <a href="{{ route('pemesanan.create', ['service' => 'Disinfectan/Fogging']) }}" class="btn btn-primary"> Pesan Sekarang</a>
         </div>
      </div>

    </div>

  </div>
</section>

<!-- End Service Section -->
<!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Our Hardworking Team</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member-card">
              <div class="member-image-wrapper">
                <img src="/CoreBiz/assets/img/person/person-f-1.webp" class="img-fluid" alt="Team Member">
              </div>
              <div class="member-content">
                <h4 class="member-name">Gisella</h4>
                <span class="member-role">Customer Service Lead</span>
                <p class="member-bio">Membantu pelanggan memilih layanan yang tepat dan memastikan pengalaman yang memuaskan
                </p>
                <div class="member-socials">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member-card">
              <div class="member-image-wrapper">
                <img src="/CoreBiz/assets/img/person/person-m-2.webp" class="img-fluid" alt="Team Member">
              </div>
              <div class="member-content">
                <h4 class="member-name">David </h4>
                <span class="member-role">Cleaning Specialist</span>
                <p class="member-bio">Berpelaman lebih dari 3 tahun di bidang  kebersihan rumah dan apartemen</p>
                <div class="member-socials">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-github"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member-card">
              <div class="member-image-wrapper">
                <img src="/CoreBiz/assets/img/person/person-f-3.webp" class="img-fluid" alt="Team Member">
              </div>
              <div class="member-content">
                <h4 class="member-name">Gea & Rasty</h4>
                <span class="member-role">Founder&CEO</span>
                <p class="member-bio">Membangun BERSIH BERSINAR untuk membersihkan layanan kebersihan yang profesional,terpercaya, dan ramah</p>
                <div class="member-socials">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member-card">
              <div class="member-image-wrapper">
                <img src="/CoreBiz/assets/img/person/person-m-4.webp" class="img-fluid" alt="Team Member">
              </div>
              <div class="member-content">
                <h4 class="member-name">Michael</h4>
                <span class="member-role">Operating Supervisor</span>
                <p class="member-bio">Mengatur jadwal lapangan dan memastikan setiap pekerjaan berjalan dengan standar tinggi</p>
                <div class="member-socials">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-github"></i></a>
                  <a href="#"><i class="bi bi-stack-overflow"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p>Check our Pricing</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="pricing-toggle-container mb-5" data-aos="zoom-in" data-aos-delay="150">
          <div class="pricing-toggle d-inline-flex align-items-center gap-3 px-3 py-2 rounded-pill">
            <span class="monthly active">Per-ruangan</span>
            <label class="switch m-0">
              <input type="checkbox" aria-label="Toggle pricing">
              <span class="slider"></span>
            </label>
            <span class="yearly">Ukuran</span>
          </div>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <article class="price-card h-100">
              <div class="card-head">
                <span class="badge-title">Harga per-ruangan</span>
                <h3 class="title">Standar</h3>
                <p class="subtitle">Layanan basic tidak semuanya</p>
                <div class="price-wrap">
                  <span class="price price-monthly"><sup>$</sup>300000<span class="period">/Per-ruangan</span></span>
                  <span class="price price-yearly"><sup>$</sup>300000<span class="period">/Ukuran</span></span>
                </div>
              </div>

              <ul class="feature-list list-unstyled mb-4">
                <li><i class="bi bi-check-circle"></i> Menyapu & mengepel</li>
                <li><i class="bi bi-check-circle"></i> Mmembersihkan debu</li>
                <li><i class="bi bi-check-circle"></i> Merapikan ruangan</li>
                <li class="muted"><i class="bi bi-dash-circle"></i> Mmebersihkan kaca luar dalam</li>
                <li class="muted"><i class="bi bi-dash-circle"></i> Tidak termasuk kamar mandi</li>
              </ul>

              <div class="cta">
                <a href="#" class="btn btn-choose w-100">Get Started</a>
              </div>
            </article><!-- End Pricing Item -->
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="250">
            <article class="price-card featured h-100 position-relative">
              <div class="ribbon"><i class="bi bi-star-fill"></i> Standar</div>

              <div class="card-head">
                <span class="badge-title">Cleaning</span>
                <h3 class="title">Basic cleaning</h3>
                <p class="subtitle">Membersihkan dengan layanan pada umumnya</p>
                <div class="price-wrap">
                  <span class="price price-monthly"><sup>$</sup>300000<span class="period">/Per-ruangan</span></span>
                  <span class="price price-yearly"><sup>$</sup>300000<span class="period">/Ukuran</span></span>
                </div>
              </div>

              <ul class="feature-list list-unstyled mb-4">
                <li><i class="bi bi-check-circle"></i> Semua layanan basic</li>
                <li><i class="bi bi-check-circle"></i> Membersihkan kamar mandi</li>
                <li><i class="bi bi-check-circle"></i> Membersihkan dapur ringan</li>
                <li><i class="bi bi-check-circle"></i> Membersihkan perabotan</li>
                <li><i class="bi bi-check-circle"></i> Membersihkan luar ruangan</li>
              </ul>

              <div class="cta">
                <a href="#" class="btn btn-choose w-100">Choose Basic</a>
              </div>
            </article><!-- End Pricing Item -->
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <article class="price-card h-100">
              <div class="card-head">
                <span class="badge-title">Profesional</span>
                <h3 class="title">Deep cleaning</h3>
                <p class="subtitle">Membersihkan sampai akhir</p>
                <div class="price-wrap">
                  <span class="price price-monthly"><sup>$</sup>350000<span class="period">/Per-ruangan</span></span>
                  <span class="price price-yearly"><sup>$</sup>3500000<span class="period">/Ukuran</span></span>
                </div>
              </div>

              <ul class="feature-list list-unstyled mb-4">
                <li><i class="bi bi-check-circle"></i> Membersihkan detail</li>
                <li><i class="bi bi-check-circle"></i> Semua layanan standar</li>
                <li><i class="bi bi-check-circle"></i> Membersihkan noda membandel</li>
                <li><i class="bi bi-check-circle"></i> Disinfektan</li>
              </ul>

              <div class="cta">
                <a href="#" class="btn btn-choose w-100">Start Deep cleaning</a>
              </div>
            </article><!-- End Pricing Item -->
          </div>

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-9">

            <div class="faq-wrapper">

              <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="150">
                <div class="faq-header">
                  <span class="faq-number">01</span>
                  <h4>Berapa harga layanan cleaning di Bersih Bersinar?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Harga tergantung jenis paket yang dipilih (Hemat, Standar, atau Premium). Kamu juga bisa request sesuai jumlah ruangan atau ukuran rumah.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                <div class="faq-header">
                  <span class="faq-number">02</span>
                  <h4>Apakah saya bisa pesan untuk hari yang sama (same day)?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Bisa! Selama slot tersedia. Kami sarankan booking minimal 3–4 jam sebelum waktu pembersihan.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="250">
                <div class="faq-header">
                  <span class="faq-number">03</span>
                  <h4> Apa saja yang termasuk dalam layanan cleaning?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Menyapu, mengepel, membersihkan debu, membersihkan kamar mandi, dapur, jendela, hingga deep cleaning (untuk beberapa paket tertentu).</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                <div class="faq-header">
                  <span class="faq-number">04</span>
                  <h4>Apakah saya perlu menyediakan alat dan cairan pembersih?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>Tidak perlu. Tim kami membawa alat dan perlengkapannya sendiri. Jika ingin menggunakan produk Anda sendiri, tinggal beri tahu saat booking.</p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

              <div class="faq-item" data-aos="fade-up" data-aos-delay="350">
                <div class="faq-header">
                  <span class="faq-number">05</span>
                  <h4>Berapa lama proses pembersihan biasanya?</h4>
                  <div class="faq-toggle">
                    <i class="bi bi-plus"></i>
                    <i class="bi bi-dash"></i>
                  </div>
                </div>
                <div class="faq-content">
                  <div class="content-inner">
                    <p>urasi tergantung jumlah ruangan:
                      • 2–3 ruangan: 1–2 jam
                      • 4–6 ruangan: 2–4 jam
                      • Deep cleaning: 3–5 jam
                      </p>
                  </div>
                </div>
              </div><!-- End FAQ Item -->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Need Help? Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-stretch">
          <div class="col-lg-7 order-lg-1 order-2" data-aos="fade-right" data-aos-delay="200">
            <div class="contact-form-container">
              <div class="form-intro">
                <h2>Let's Start a Conversation</h2>
                <p>Tanyakan sesuatu kepada kami</p>
              </div>

              <form action="forms/contact.php" method="post" class="php-email-form contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="text" name="name" class="form-input" id="userName" placeholder="Your Name" required="">
                      <label for="userName" class="field-label">Name</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="email" class="form-input" name="email" id="userEmail" placeholder="Your Email" required="">
                      <label for="userEmail" class="field-label">Email</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="tel" class="form-input" name="phone" id="userPhone" placeholder="Your Phone">
                      <label for="userPhone" class="field-label">Phone</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="text" class="form-input" name="subject" id="messageSubject" placeholder="Subject" required="">
                      <label for="messageSubject" class="field-label">Subject</label>
                    </div>
                  </div>
                </div>

                <div class="form-field message-field">
                  <textarea class="form-input message-input" name="message" id="userMessage" rows="5" placeholder="Tell us about your project" required=""></textarea>
                  <label for="userMessage" class="field-label">Message</label>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <button type="submit" class="send-button">
                  Send Message
                  <span class="button-arrow">→</span>
                </button>
              </form>
            </div>
          </div>

          <div class="col-lg-5 order-lg-2 order-1" data-aos="fade-left" data-aos-delay="300">
            <div class="contact-sidebar">
              <div class="contact-header">
                <h3>Get in Touch</h3>
                
              </div>

              <div class="contact-methods">
                <div class="contact-method" data-aos="fade-in" data-aos-delay="350">
                  <div class="contact-icon">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Address</span>
                    <p>Jl. Kwangya city<br>NCIT, NCT 127</p>
                  </div>
                </div>

                <div class="contact-method" data-aos="fade-in" data-aos-delay="400">
                  <div class="contact-icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Email</span>
                    <p>Teambersihbersinar@gmail.com</p>
                  </div>
                </div>

                <div class="contact-method" data-aos="fade-in" data-aos-delay="450">
                  <div class="contact-icon">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Phone</span>
                    <p>+62 8925771086746</p>
                  </div>
                </div>

                <div class="contact-method" data-aos="fade-in" data-aos-delay="500">
                  <div class="contact-icon">
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Hours</span>
                    <p>Monday - Friday: 09.00 - 17.00<br>Saturday: 10.00 - 15.00</p>
                  </div>
                </div>
              </div>

              <div class="connect-section" data-aos="fade-up" data-aos-delay="550">
                <span class="connect-label">Connect with us</span>
                <div class="social-links">
                  <a href="#" class="social-link">
                    <i class="bi bi-linkedin"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-twitter-x"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-instagram"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-facebook"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Butuh layanan kebersihan rumah?</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Bersih BERSINAR</span>
          </a>
          <div class="footer-contact pt-3">
            <p>RASTY AMALIA BERSADA 22</p>
            <p>Jl.Kwagya NCIT </p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 8925771086746</span></p>
            <p><strong>Email:</strong> <span>Teambersihbersinar@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Deep cleaning</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Diaily cleaning</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Specialized Cleaning</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Pembersihan Area Khusus</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">AC Maintenance</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Disinfektan/Fogging</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Request Lain</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Ikuti kami di sosial media agar tidak tertinggal informasi berikutnya</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Bersih Bersinar</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        
       
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="/CoreBiz/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/CoreBiz/assets/vendor/php-email-form/validate.js"></script>
  <script src="/CoreBiz/assets/vendor/aos/aos.js"></script>
  <script src="/CoreBiz/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/CoreBiz/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/CoreBiz/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/CoreBiz/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/CoreBiz/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="/CoreBiz/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="/CoreBiz/assets/js/main.js"></script>

</body>

</html>