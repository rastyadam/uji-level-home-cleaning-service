<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bersih Bersinar - Layanan Kebersihan Profesional</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="/assests/style.css">
</head>

<body>

    @if (session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    <header id="header" class="site-header sticky-top">

        <div class="topbar">
            <div class="container topbar-content">
                <address class="contact-info">
                    <i class="bi bi-envelope" aria-hidden="true"></i>
                    <a href="mailto:Timbersihbersinar@gmail.com">Timbersihbersinar@gmail.com</a>

                    <i class="bi bi-phone ms-4" aria-hidden="true"></i>
                    <span>+62 8925771086746</span>
                </address>

                <div class="social-links">
                    <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="main-nav-wrapper">
            <div class="container main-nav-container">
                <a href="#" class="site-logo">
                    <h1 class="sitename">BERSIH BERSINAR</h1>
                </a>

                <nav id="navmenu" class="main-nav" aria-label="Navigasi Utama">
                    <ul role="menubar">
                        <li role="menuitem"><a href="#hero" class="active">Home</a></li>
                        <li role="menuitem"><a href="#about">About</a></li>
                        <li role="menuitem"><a href="#service">Service</a></li>
                        <li role="menuitem"><a href="#testi">Testimonial</a></li>
                        <li role="menuitem"><a href="#faq">FAQ</a></li>
                        <li role="menuitem"><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>

        <section id="hero" class="hero section">
            <div class="container hero-container">
                <div class="hero-content">
                    <h1>Bersih <strong>BERSINAR</strong></h1>
                    <p class="hero-tagline">Kami punya layanan home service yang bisa dipercaya banget.</p>
                    <a href="#about" class="btn btn-primary">Lihat tentang kami</a>
                </div>

                <div class="hero-visual">
                    <img src="/assests/img/about/cleaning service company.jpg" alt="Cleaning Service" class="hero-image">
                    <div class="floating-metrics-card">
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

            <div class="container feature-grid-container">
                <div class="feature-grid">
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

        <section id="about" class="about section">
            <div class="container about-container">
                <div class="about-image">
                    <img src="/assests/img/about/about-square-8.webp" alt="Tim Bersih Bersinar" class="img-fluid">
                </div>
                <div class="about-content">
                    <h2 class="section-heading">Tentang <span>Bersih Bersinar</span></h2>
                    <p>
                        Bersih Bersinar itu layanan cleaning rumah yang fokus banget sama kebersihan, keamanan,
                        dan kenyamanan rumah kalian. Tim ahli kita yang udah berpengalaman bakal pastiin setiap sudut rumah
                        kalian dibersihin dengan maksimal.
                    </p>
                    <ul class="check-list">
                        <li><i class="bi bi-check-circle-fill"></i> Tim yang profesional dan udah lama nge-handle cleaning</li>
                        <li><i class="bi bi-check-circle-fill"></i> Prosesnya cepat, rapi, dan gak ribet</li>
                        <li><i class="bi bi-check-circle-fill"></i> Pakai peralatan & bahan yang aman buat rumah</li>
                        <li><i class="bi bi-check-circle-fill"></i> Sesuai sama kebutuhan customer masing-masing</li>
                    </ul>
                    <a href="#service" class="btn btn-secondary about-btn">Lihat Layanan Kita</a>
                </div>
            </div>
        </section>

        <section id="service" class="service section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-heading">Layanan Kami</h2>
                    <p class="section-subheading">Pilih layanan yang paling sesuai dengan kebutuhan kebersihan Anda.</p>
                </div>
                
                <div class="service-grid">
                    <article class="service-card">
                        <div class="service-img-container">
                            <img src="/assests/img/daily cleaning.jpg" alt="Daily/General Cleaning">
                        </div>
                        <div class="service-content">
                            <h3>Daily/General Cleaning</h3>
                            <p>Pembersihan rutin harian agar ruangan selalu bersih dan nyaman.</p>
                            <a href="{{ route('pemesanan.create', ['service' => 'Daily/General Cleaning']) }}" class="btn btn-sm btn-action">Pesan Sekarang →</a>
                        </div>
                    </article>

                    <article class="service-card">
                        <div class="service-img-container">
                            <img src="/assests/img/deep cleaning.jpg" alt="Deep Cleaning">
                        </div>
                        <div class="service-content">
                            <h3>Deep Cleaning</h3>
                            <p>Pembersihan detail dari atas hingga bawah untuk hasil maksimal.</p>
                            <a href="{{ route('pemesanan.create', ['service' => 'Deep Cleaning']) }}" class="btn btn-sm btn-action">Pesan Sekarang →</a>
                        </div>
                    </article>
                    
                    <article class="service-card">
                        <div class="service-img-container">
                            <img src="/assests/img/ac maintence.jpg" alt="AC Maintenance">
                        </div>
                        <div class="service-content">
                            <h3>AC Maintenance</h3>
                            <p>Perawatan AC rutin agar udara tetap segar dan optimal.</p>
                            <a href="{{ route('pemesanan.create', ['service' => 'AC Maintenance']) }}" class="btn btn-sm btn-action">Pesan Sekarang →</a>
                        </div>
                    </article>

                    <article class="service-card">
                        <div class="service-img-container">
                            <img src="/assests/img/disinfektan clean.jpg" alt="Disinfektan/Fogging">
                        </div>
                        <div class="service-content">
                            <h3>Disinfektan/Fogging</h3>
                            <p>Membasmi bakteri & virus dengan fogging profesional.</p>
                            <a href="{{ route('pemesanan.create', ['service' => 'Disinfectan/Fogging']) }}" class="btn btn-sm btn-action">Pesan Sekarang →</a>
                        </div>
                    </article>

                    <article class="service-card">
                        <div class="service-img-container">
                            <img src="/assests/img/area khusus.jpg" alt="Specialized Cleaning">
                        </div>
                        <div class="service-content">
                            <h3>Specialized Cleaning</h3>
                            <p>Layanan pembersihan khusus untuk area atau material tertentu.</p>
                            <a href="{{ route('pemesanan.create', ['service' => 'Specialized Cleaning']) }}" class="btn btn-sm btn-action">Pesan Sekarang →</a>
                        </div>
                    </article>

                    <article class="service-card">
                        <div class="service-img-container">
                            <img src="/assests/img/permintaan lain.png" alt="Request Lain">
                        </div>
                        <div class="service-content">
                            <h3>Request Lain</h3>
                            <p>Custom cleaning untuk kebutuhan khusus sesuai permintaan Anda.</p>
                            <a href="{{ route('pemesanan.create', ['service' => 'Request Lain']) }}" class="btn btn-sm btn-action">Pesan Sekarang →</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="testi" class="testimonial-section section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-heading">Apa Kata Mereka?</h2>
                    <p class="section-subheading">Ulasan jujur dari pelanggan yang telah menggunakan layanan kami.</p>
                </div>

                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide testimonial-card">
                            <div class="testimonial-profile">
                                <img src="/assests/img/person/person-f-1.webp" alt="Rina Amanda">
                                <div>
                                    <h4>Rina Amanda</h4>
                                    <span>Pelanggan Rumah Tangga</span>
                                </div>
                            </div>
                            <p class="testimonial-text">
                                “Pelayanannya sangat memuaskan! Rumah jadi jauh lebih bersih dan wangi.”
                            </p>
                        </div>

                        <div class="swiper-slide testimonial-card">
                            <div class="testimonial-profile">
                                <img src="/assests/img/person/person-m-2.webp" alt="Fauzan Pratama">
                                <div>
                                    <h4>Fauzan Pratama</h4>
                                    <span>Pelanggan Kantor</span>
                                </div>
                            </div>
                            <p class="testimonial-text">
                                “Datang tepat waktu dan hasilnya rapi. Akan order lagi!”
                            </p>
                        </div>
                        
                        <div class="swiper-slide testimonial-card">
                            <div class="testimonial-profile">
                                <img src="/assests/img/person/person-f-6.webp" alt="Sari Fitriani">
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
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>

        <section id="faq" class="faq-section section light-background">
            <div class="container faq-container">
                <div class="section-header">
                    <h2 class="section-heading">Pertanyaan Umum</h2>
                    <p class="section-subheading">Pertanyaan yang sering ditanyakan mengenai layanan kami.</p>
                </div>

                <div class="faq-list">
                    <div class="faq-item">
                        <button class="faq-question">
                            Apa saja layanan yang tersedia?
                            <span class="faq-icon bi bi-plus-lg"></span>
                        </button>
                        <div class="faq-answer">
                            <p>Kami menyediakan layanan Home Cleaning, Deep Cleaning, AC Maintenance, Disinfektan/Fogging, dan berbagai layanan specialized cleaning lainnya.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Bagaimana cara melakukan pemesanan?
                            <span class="faq-icon bi bi-plus-lg"></span>
                        </button>
                        <div class="faq-answer">
                            <p>Anda dapat memesan langsung melalui halaman pemesanan pada website kami dengan memilih jenis layanan yang diinginkan.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Apakah tim kalian terpercaya?
                            <span class="faq-icon bi bi-plus-lg"></span>
                        </button>
                        <div class="faq-answer">
                            <p>Ya, tim kami terdiri dari cleaner profesional yang telah terlatih dan berpengalaman.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Apakah layanan tersedia di seluruh area?
                            <span class="faq-icon bi bi-plus-lg"></span>
                        </button>
                        <div class="faq-answer">
                            <p>Kami melayani area tertentu dan akan terus memperluas jangkauan pelayanan. Silakan hubungi kami untuk cek area Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-heading">Hubungi Kami</h2>
                    <p class="section-subheading">Butuh Bantuan? Silakan hubungi kami melalui formulir atau kontak di samping.</p>
                </div>

                <div class="contact-grid">
                    <div class="contact-form-wrapper">
                        <form action="forms/contact.php" method="post" class="contact-form">
                            <div class="form-intro">
                                <h3>Kirim Pesan</h3>
                            </div>

                            <div class="row">
                                <div class="col-md-6"><input type="text" name="name" placeholder="Nama Anda" required=""></div>
                                <div class="col-md-6"><input type="email" name="email" placeholder="Email Anda" required=""></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><input type="tel" name="phone" placeholder="Telepon"></div>
                                <div class="col-md-6"><input type="text" name="subject" placeholder="Subjek" required=""></div>
                            </div>
                            
                            <textarea name="message" rows="5" placeholder="Pesan Anda" required=""></textarea>

                            <div class="form-feedback">
                            <div class="error-message"></div>
                              </div>

                            <button type="submit" class="btn btn-primary send-button">
                                Kirim Pesan <i class="bi bi-arrow-right"></i>
                            </button>
                        </form>
                    </div>

                    <div class="contact-sidebar">
                        <div class="contact-methods">
                            <div class="contact-method">
                                <div class="contact-icon"><i class="bi bi-geo-alt"></i></div>
                                <div class="contact-details">
                                    <span class="method-label">Alamat</span>
                                    <p>Jl. Kwangya city<br>NCIT, NCT 127</p>
                                </div>
                            </div>

                            <div class="contact-method">
                                <div class="contact-icon"><i class="bi bi-envelope"></i></div>
                                <div class="contact-details">
                                    <span class="method-label">Email</span>
                                    <p>Teambersihbersinar@gmail.com</p>
                                </div>
                            </div>

                            <div class="contact-method">
                                <div class="contact-icon"><i class="bi bi-telephone"></i></div>
                                <div class="contact-details">
                                    <span class="method-label">Telepon</span>
                                    <p>+62 8925771086746</p>
                                </div>
                            </div>

                            <div class="contact-method">
                                <div class="contact-icon"><i class="bi bi-clock"></i></div>
                                <div class="contact-details">
                                    <span class="method-label">Jam Kerja</span>
                                    <p>Senin - Jumat: 09.00 - 17.00<br>Sabtu: 10.00 - 15.00</p>
                                </div>
                            </div>
                        </div>

                        <div class="connect-section">
                            <span class="connect-label">Ikuti Kami</span>
                            <div class="social-links-sidebar">
                                <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                                <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="site-footer">
        <div class="footer-newsletter">
            <div class="container text-center">
                <h3>Dapatkan Penawaran Terbaik</h3>
                <p>Langganan newsletter kami untuk info dan promo terbaru!</p>
                <form action="forms/newsletter.php" method="post" class="newsletter-form">
                    <input type="email" name="email" placeholder="Masukkan email Anda">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>

        <div class="container footer-top">
            <div class="row">
                <div class="col-lg-4 footer-about">
                    <a href="#" class="footer-logo">BERSIH BERSINAR</a>
                    <div class="footer-contact">
                        <address>
                            Jl.Kwagya NCIT<br>
                            GEA SUKMA SHAKILA 12<br>
                            RASTY AMALIA BERSADA 22
                        </address>
                        <p><strong>Phone:</strong> +62 8925771086746</p>
                        <p><strong>Email:</strong> Teambersihbersinar@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-2 footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#about">About us</a></li>
                        <li><a href="#service">Services</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 footer-links">
                    <h4>Layanan Utama</h4>
                    <ul>
                        <li><a href="#">Deep cleaning</a></li>
                        <li><a href="#">Daily cleaning</a></li>
                        <li><a href="#">AC Maintenance</a></li>
                        <li><a href="#">Disinfektan/Fogging</a></li>
                        <li><a href="#">Request Lain</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 footer-social">
                    <h4>Ikuti Kami</h4>
                    <p>Ikuti kami di sosial media agar tidak tertinggal informasi berikutnya.</p>
                    <div class="social-links-footer">
                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container copyright text-center">
            <p>© <span>Copyright</span> <strong class="sitename">Bersih Bersinar</strong> <span>All Rights Reserved</span></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Swiper and FAQ scripts are included here (Same as original)
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
                // Toggle active class on the clicked item
                item.classList.toggle('active');
            });
        });

        // Sticky Header / Scroll to top (perlu JS tambahan)
    </script>
</body>
</html>