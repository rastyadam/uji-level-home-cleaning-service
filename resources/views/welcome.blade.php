<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bersih Bersinar</title>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="/assests/style.css">
</head>

<body>

<header id="header" class="header sticky-top">

    <!-- Topbar -->
    <div class="topbar">
        <div class="container top-content">
            <div class="contact-info">
                <i class="bi bi-envelope"></i>
                <a href="mailto:Timbersihbersinar@gmail.com">Timbersihbersinar@gmail.com</a>

                <i class="bi bi-phone ms-4"></i>
                <span>+62 8925771086746</span>
            </div>

            <div class="social-links">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>

    <!-- Branding + Navbar -->
    <div class="branding">
        <div class="container nav-container">
            <a href="#" class="logo">
                <h1 class="sitename">BERSIH BERSINAR</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#service">Service</a></li>
                    <li><a href="#testi">Testimonial</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container hero-container">

            <div class="hero-text">
                <h1>Bersih <b>BERSINAR</b></h1>
                <p>Kami punya layanan home service yang bisa dipercaya banget.</p>
                <a href="#about" class="btn-primary">Lihat tentang kami</a>
            </div>

            <div class="hero-image">
                <img src="/CoreBiz/assets/img/about/cleaning service company.jpg" alt="Cleaning Service" >

                <div class="floating-card">
                    <div class="metric">
                        <span class="number">150+</span>
                        <span class="label">Udah pesen jasa kita</span>
                    </div>
                    <div class="metric">
                        <span class="number">98%</span>
                        <span class="label">Orang percaya sama jasa kita</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature Cards -->
        <div class="features">
            <div class="container feature-grid">

                <div class="feature-item">
                    <i class="bi bi-house-door"></i>
                    <h4>HOME CLEANING</h4>
                    <p>Layanan kebersihan rumah lengkap dari ruang tamu, kamar, dapur, hingga kamar mandi.</p>
                </div>

                <div class="feature-item">
                    <i class="bi bi-sparkle"></i>
                    <h4>DEEP CLEANING</h4>
                    <p>Membersihkan area sulit, noda membandel, dan kotoran menumpuk secara menyeluruh.</p>
                </div>

                <div class="feature-item">
                    <i class="bi bi-shield-check"></i>
                    <h4>DISINFECTION SERVICE</h4>
                    <p>Layanan penyemprotan desinfektan untuk menjaga kebersihan dan kesehatan rumah.</p>
                </div>

                <div class="feature-item">
                    <i class="bi bi-people"></i>
                    <h4>PROFESSIONAL CLEANERS</h4>
                    <p>Tim yang terlatih dan berpengalaman untuk kebersihan maksimal.</p>
                </div>

            </div>
        </div>

    </section>

<!-- About Section -->
<section id="about" class="about section">
    <div class="container about-container">

        <div class="about-image">
            <img src="/CoreBiz/assets/img/about/about-square-8.webp" alt="About Us" class="img-fluid">
        </div>

        <div class="about-text">
            <h2 class="section-title">Tentang <span>Bersih Bersinar</span></h2>
            <p>
                Bersih Bersinar itu layanan cleaning rumah yang fokus banget sama kebersihan, keamanan,
                dan kenyamanan rumah kalian. Tim ahli kita yang udah berpengalaman bakal pastiin setiap sudut rumah
                kalian dibersihin dengan maksimal.
            </p>

            <ul class="about-list">
                <li><i class="bi bi-check-circle-fill"></i> Tim yang profesional dan udah lama nge-handle cleaning</li>
                <li><i class="bi bi-check-circle-fill"></i> Prosesnya cepat, rapi, dan gak ribet</li>
                <li><i class="bi bi-check-circle-fill"></i> Pakai peralatan & bahan yang aman buat rumah</li>
                <li><i class="bi bi-check-circle-fill"></i> Sesuai sama kebutuhan customer masing-masing</li>
            </ul>

            <a href="#service" class="btn-primary about-btn">Lihat Layanan Kita</a>
        </div>

    </div>
</section>
<!-- Services Section -->
<section id="service" class="service section">
    
<div class="service-grid">

    <!-- 1. Request Lain -->
    <div class="service-card">
        <div class="service-img-container">
            <img src="/CoreBiz/assets/img/permintaan lain.png" alt="Request Lain">
        </div>
        <div class="service-content">
            <h3>Request Lain</h3>
            <p>Custom cleaning untuk kebutuhan khusus sesuai permintaan Anda.</p>
            <a href="{{ route('pemesanan.create', ['service' => 'Request Lain']) }}" 
               class="btn btn-primary">
               Pesan Sekarang
            </a>
        </div>
    </div>

    <!-- 2. Daily/General Cleaning -->
    <div class="service-card">
        <div class="service-img-container">
            <img src="/CoreBiz/assets/img/daily cleaning.jpg" alt="Daily/General Cleaning">
        </div>
        <div class="service-content">
            <h3>Daily/General Cleaning</h3>
            <p>Pembersihan rutin harian agar ruangan selalu bersih dan nyaman.</p>
            <a href="{{ route('pemesanan.create', ['service' => 'Daily/General Cleaning']) }}" 
               class="btn btn-primary">
               Pesan Sekarang
            </a>
        </div>
    </div>

    <!-- 3. AC Maintenance -->
    <div class="service-card">
        <div class="service-img-container">
            <img src="/CoreBiz/assets/img/ac maintence.jpg" alt="AC Maintenance">
        </div>
        <div class="service-content">
            <h3>AC Maintenance</h3>
            <p>Perawatan AC rutin agar udara tetap segar dan optimal.</p>
            <a href="{{ route('pemesanan.create', ['service' => 'AC Maintenance']) }}" 
               class="btn btn-primary">
               Pesan Sekarang
            </a>
        </div>
    </div>

    <!-- 4. Deep Cleaning -->
    <div class="service-card">
        <div class="service-img-container">
            <img src="/CoreBiz/assets/img/daily%20cleaning.jpg" alt="Deep Cleaning">
        </div>
        <div class="service-content">
            <h3>Deep Cleaning</h3>
            <p>Pembersihan detail dari atas hingga bawah untuk hasil maksimal.</p>
            <a href="{{ route('pemesanan.create', ['service' => 'Deep Cleaning']) }}"
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
            <a href="{{ route('pemesanan.create', ['service' => 'Specialized Cleaning']) }}" 
               class="btn btn-primary">
               Pesan Sekarang
            </a>
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
            <a href="{{ route('pemesanan.create', ['service' => 'Pembersihan Area Khusus']) }}" 
               class="btn btn-primary">
               Pesan Sekarang
            </a>
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
            <a href="{{ route('pemesanan.create', ['service' => 'Disinfectan/Fogging']) }}" 
               class="btn btn-primary">
               Pesan Sekarang
            </a>
        </div>
    </div>

</div>
</section>
{{-- testi --}}
<section id="testi" class="testimonial-section">
    <div class="testimonial-title-wrapper">
        <h2>Apa Kata Mereka?</h2>
        <p>Beberapa ulasan dari pelanggan yang telah menggunakan layanan kami.</p>
    </div>

    <div class="swiper testimonial-swiper">
        <div class="swiper-wrapper">

            <!-- CARD 1 -->
            <div class="swiper-slide testimonial-card">
                <div class="testimonial-profile">
                    <img src="/CoreBiz/assets/img/person/person-f-1.webp" alt="">
                    <div>
                        <h4>Rina Amanda</h4>
                        <span>Pelanggan Rumah Tangga</span>
                    </div>
                </div>
                <p class="testimonial-text">
                    “Pelayanannya sangat memuaskan! Rumah jadi jauh lebih bersih dan wangi.”
                </p>
            </div>

            <!-- CARD 2 -->
            <div class="swiper-slide testimonial-card">
                <div class="testimonial-profile">
                    <img src="/CoreBiz/assets/img/person/person-m-2.webp" alt="">
                    <div>
                        <h4>Fauzan Pratama</h4>
                        <span>Pelanggan Kantor</span>
                    </div>
                </div>
                <p class="testimonial-text">
                    “Datang tepat waktu dan hasilnya rapi. Akan order lagi!”
                </p>
            </div>

            <!-- CARD 3 -->
            <div class="swiper-slide testimonial-card">
                <div class="testimonial-profile">
                    <img src="/images/person-f-6.webp" alt="">
                    <div>
                        <h4>Sari Fitriani</h4>
                        <span>Deep Cleaning</span>
                    </div>
                </div>
                <p class="testimonial-text">
                    “Deep cleaning sangat detail. Sudut-sudut tersulit pun dibersihkan.”
                </p>
            </div>

        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

{{-- Faq --}}
<section id="faq" class="faq-section">
    <div class="container faq-container">
        <h2 class="faq-title">Frequently Asked Questions</h2>
        <p class="faq-subtitle">Pertanyaan yang sering ditanyakan mengenai layanan kami.</p>

        <div class="faq-list">

            <!-- FAQ ITEM 1 -->
            <div class="faq-item">
                <button class="faq-question">
                    Apa saja layanan yang tersedia?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Kami menyediakan layanan Home Cleaning, Deep Cleaning, AC Maintenance, Disinfektan/Fogging, dan berbagai layanan specialized cleaning lainnya.</p>
                </div>
            </div>

            <!-- FAQ ITEM 2 -->
            <div class="faq-item">
                <button class="faq-question">
                    Bagaimana cara melakukan pemesanan?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Anda dapat memesan langsung melalui halaman pemesanan pada website kami dengan memilih jenis layanan yang diinginkan.</p>
                </div>
            </div>

            <!-- FAQ ITEM 3 -->
            <div class="faq-item">
                <button class="faq-question">
                    Apakah tim kalian terpercaya?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Ya, tim kami terdiri dari cleaner profesional yang telah terlatih dan berpengalaman.</p>
                </div>
            </div>

            <!-- FAQ ITEM 4 -->
            <div class="faq-item">
                <button class="faq-question">
                    Apakah layanan tersedia di seluruh area?
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Kami melayani area tertentu dan akan terus memperluas jangkauan pelayanan. Silakan hubungi kami untuk cek area Anda.</p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Contact --}}
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
            <p>GEA SUKMA SHAKILA 12</p>
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

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  // Initialize Swiper for testimonials
  const swiper = new Swiper('.testimonial-swiper', {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    slidesPerView: 1,
    spaceBetween: 30,
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

  // FAQ Accordion functionality
  document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
      const item = button.parentElement;
      item.classList.toggle('active');
    });
  });

  // Mobile nav toggle
  document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
    document.querySelector('.navmenu').classList.toggle('active');
  });
</script>

</body>
</html>
