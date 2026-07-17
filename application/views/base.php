<?php
ob_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <!-- general -->
     <!-- Add after charset -->
    <meta http-equiv="Content-Language" content="en">
    <meta name="keywords" content="<?php echo $page_keywords; ?>" />
    <meta name="description" content="<?php echo $page_description; ?>" />
    <meta name="author" content="Gedem Trading PLC" />
    <meta name="theme-color" content="#198F3A">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.png'); ?>">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/logo.png'); ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
        
    <!-- Open Graph -->
    <meta property="og:title" content="<?= $page_title; ?>">
    <meta property="og:description" content="<?= $page_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $canonical_url; ?>">

    <meta property="og:site_name" content="Gedem Trading PLC">

    <meta property="og:image" content="<?= base_url('assets/img/logo.png'); ?>">
    <meta property="og:image:secure_url" content="<?= base_url('assets/img/logo.png'); ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta property="og:locale" content="en_US">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $page_title; ?>">
    <meta name="twitter:description" content="<?php echo $page_description; ?>">
    <meta name="twitter:image" content="<?php echo base_url('assets/img/logo.png'); ?>">
    <meta name="twitter:site" content="@awe7">
    
    <link rel="canonical" href="<?php echo rtrim($canonical_url, '/'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">    
    <script type="application/ld+json">
        <?php
        $structured_data = [
                "@context" => "https://schema.org",
                "@type" => "Organization",
                "name" => "Gedem Trading PLC",
                "url" => base_url(),
                "logo" => base_url('assets/img/logo.png'),
                "description" => $page_description,
                "address" => [ 
                    "@type" => "PostalAddress",
                    "streetAddress" => "Gedem Trading PLC, Bole Sub City, Woreda 03, House No. 1234",
                    "addressLocality" => "Addis Ababa",
                    "addressRegion" => "Addis Ababa",
                    "addressCountry" => "ET"
                ],
                "telephone" => "++251911457474",
                "email" => "alemhiwotly2a@gmail.com",
                "sameAs" => [
                    "https://www.linkedin.com/company/gedem-trading",
                    "https://twitter.com/GedemTrading",
                    "https://www.facebook.com/GedemTrading"  // Add if you have
                ]
            ];

            ?>
    </script>
</head>

<body>
   <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="">
                </div>
            </div>
        </div>
    </div> -->

    <!-- ================= HERO / NAV ================= -->
     <header class="site-nav" id="siteNav">
        <div class="wrap nav-inner">
            <a href="<?php echo base_url(); ?>" class="nav-brand" aria-label="Gedem Trading PLC home">
                <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Gedem Trading PLC" width="140" height="40">
            </a>
            <button class="nav-toggle" id="navToggle" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navMenu">
                <span class="nav-toggle-bar"></span>
                <span class="nav-toggle-bar"></span>
                <span class="nav-toggle-bar"></span>
            </button>
            <nav class="nav-menu" id="navMenu" aria-label="Main navigation">
                <ul class="nav-links">
                    <li><a href="<?php echo base_url(); ?>" class="active">Home</a></li>
                    <li><a href="<?php echo base_url('about'); ?>">About</a></li>
                    <li><a href="<?php echo base_url('products'); ?>">Products</a></li>
                    <li><a href="<?php echo base_url('services'); ?>">Services</a></li>
                    <li><a href="<?php echo base_url('partners'); ?>">Partners</a></li>
                    <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                </ul>
                <div class="nav-right">
                    <a href="mailto:info@gedemtrading.com">info@gedemtrading.com</a>
                    <a href="tel:+251911457474">+251 91 145 7474</a>
                </div>
            </nav>
        </div>
        <div class="nav-backdrop" id="navBackdrop" aria-hidden="true"></div>
    </header>        
    <?php echo $content;?>    
    
      <!-- ================= FOOTER ================= -->
    <footer class="wrap">
        <div class="footer-top">
            <h2>Let's talk</h2>
            <div class="footer-col">
                <div class="label">Email Us</div>
                <div class="big"><a href="mailto:info@gedemtrading.com">info@gedemtrading.com</a></div>
                <div class="label">Contact Us</div>
                <div class="big" style="text-decoration:none;"><a href="tel:+251911457474">+251 91 145 7474</a></div>
            </div>
            <div class="footer-col">
                <div class="addr">/ Gedem Trading PLC – Addis Ababa, Ethiopia</div>
                <div class="addr">/ Serving farmers, cooperatives, agro-dealers, NGOs, and government institutions</div>
                <ul class="footer-links">
                    <li><a href="<?php echo base_url('products'); ?>">/PRODUCTS</a></li>
                    <li><a href="<?php echo base_url('services'); ?>">/SERVICES</a></li>
                    <li><a href="<?php echo base_url('partners'); ?>">/PARTNERS</a></li>
                    <li><a href="<?php echo base_url('about'); ?>">/ABOUT US</a></li>
                    <li><a href="<?php echo base_url('contact'); ?>">/CONTACT</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <ul class="footer-nav">
                <li><a href="<?php echo base_url(''); ?>">Home</a></li>
                <li><a href="<?php echo base_url('about'); ?>">About</a></li>
                <li><a href="<?php echo base_url('products'); ?>">Products</a></li>
                <li><a href="<?php echo base_url('services'); ?>">Services</a></li>
                <li><a href="<?php echo base_url('partners'); ?>">Partners</a></li>
                <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
            </ul>
            <div>© 2025 Gedem Trading PLC. All Rights Reserved.</div>
        </div>
    </footer>
    <script>
        (function initMobileNav() {
            const siteNav = document.getElementById('siteNav');
            const navToggle = document.getElementById('navToggle');
            const navMenu = document.getElementById('navMenu');
            const navBackdrop = document.getElementById('navBackdrop');
            if (!siteNav || !navToggle || !navMenu) return;

            const setNavOpen = (open) => {
                siteNav.classList.toggle('nav-open', open);
                navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
                document.body.classList.toggle('nav-scroll-lock', open);
            };

            navToggle.addEventListener('click', () => {
                setNavOpen(!siteNav.classList.contains('nav-open'));
            });

            navBackdrop?.addEventListener('click', () => setNavOpen(false));

            navMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => setNavOpen(false));
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') setNavOpen(false);
            });

            window.addEventListener('resize', () => {
                if (window.innerWidth > 900) setNavOpen(false);
            });

            window.addEventListener('scroll', () => {
                siteNav.classList.toggle('nav-scrolled', window.scrollY > 24);
            }, { passive: true });
        })();

        document.querySelectorAll('.accordion-head').forEach(head => {
            head.addEventListener('click', () => {
                const item = head.closest('.accordion-item');
                const isOpen = item.classList.contains('open');
                document.querySelectorAll('.accordion-item').forEach(i => i.classList.remove('open'));
                if (!isOpen) item.classList.add('open');
            });
        });

        const titleEl = document.getElementById('spotlightTitle');
        const quoteEl = document.getElementById('spotlightQuote');
        const highlightsEl = document.getElementById('spotlightHighlights');
        const locationEl = document.getElementById('spotlightLocation');
        const imageEl = document.getElementById('spotlightImage');
        const barEl = document.getElementById('spotlightBar');
        const dotsContainer = document.getElementById('spotlightDots');
        const prevBtn = document.getElementById('prevSlide');
        const nextBtn = document.getElementById('nextSlide');

        if (titleEl && quoteEl && highlightsEl && locationEl && imageEl && barEl && dotsContainer && prevBtn && nextBtn) {
        const spotlightData = [
            {
                title: 'Why Choose Gedem Trading PLC?',
                quote: 'We combine high-quality imported products, competitive pricing, timely delivery, and professional technical support to help farmers and agribusiness partners succeed.',
                highlights: [
                    'High-quality imported products from trusted international suppliers',
                    'Competitive pricing and timely delivery',
                    'Professional technical support and customer service',
                    'Strong supply chain management'
                ],
                location: '📍 Addis Ababa, Ethiopia',
                image: 'img/img-5.jpg'
            },
            {
                title: 'Quality Commitment',
                quote: 'We source products only from trusted international manufacturers that comply with recognized quality standards. Every product is selected to ensure effectiveness, safety, and value for Ethiopian agriculture.',
                highlights: [
                    'Products from trusted international manufacturers',
                    'Compliance with recognized quality standards',
                    'Effectiveness and safety guaranteed',
                    'Value for Ethiopian agriculture'
                ],
                location: '📍 Addis Ababa, Ethiopia',
                image: 'img/img-4.jpg'
            },
            {
                title: 'Sustainability',
                quote: 'We promote responsible agriculture by encouraging the safe and proper use of crop protection products while supporting environmentally sustainable farming practices.',
                highlights: [
                    'Responsible use of crop protection products',
                    'Environmentally sustainable farming practices',
                    'Safe product handling and application',
                    'Supporting long-term agricultural health'
                ],
                location: '📍 Addis Ababa, Ethiopia',
                image: 'img/img-6.jpg'
            }
        ];

        let currentSlide = 0;

        function updateSlide(index) {
            const slide = spotlightData[index];
            titleEl.textContent = slide.title;
            quoteEl.textContent = slide.quote;
            locationEl.textContent = slide.location;
            imageEl.src = slide.image;
            imageEl.alt = slide.title;
            highlightsEl.innerHTML = slide.highlights.map(item => `<li>${item}</li>`).join('');
            const progress = ((index + 1) / spotlightData.length) * 100;
            barEl.style.width = `${progress}%`;
            dotsContainer.querySelectorAll('button').forEach((btn, btnIndex) => {
                btn.classList.toggle('active', btnIndex === index);
            });
        }

        function createDots() {
            dotsContainer.innerHTML = spotlightData.map((_, index) => `
                <button type="button" data-index="${index}" aria-label="Go to slide ${index + 1}" class="${index === 0 ? 'active' : ''}"></button>
            `).join('');
            dotsContainer.querySelectorAll('button').forEach(button => {
                button.addEventListener('click', () => {
                    currentSlide = Number(button.dataset.index);
                    updateSlide(currentSlide);
                });
            });
        }

        prevBtn.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + spotlightData.length) % spotlightData.length;
            updateSlide(currentSlide);
        });

        nextBtn.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % spotlightData.length;
            updateSlide(currentSlide);
        });

        createDots();
        updateSlide(0);
        }

    </script>
    
    <!-- footer -->
</body>
</html>