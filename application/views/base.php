<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= html_escape($page_title) ?></title>
    <meta name="description" content="<?= html_escape($page_description) ?>">
    <meta name="keywords" content="<?= html_escape($page_keywords) ?>">
    <meta name="author" content="Gedem Trading PLC">
    <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
    <meta name="googlebot" content="index,follow">
    <meta name="bingbot" content="index,follow">
    <meta http-equiv="Content-Language" content="en">
    <meta name="language" content="English">
    <meta name="geo.region" content="ET-AA">
    <meta name="geo.placename" content="Addis Ababa">
    <meta name="geo.position" content="9.03;38.74">
    <meta name="ICBM" content="9.03,38.74">
    <meta name="theme-color" content="#198F3A">
    <link rel="canonical" href="<?= rtrim($canonical_url,'/') ?>">
    <link rel="icon" href="<?= base_url('assets/img/favicon.png')?>">
    <link rel="apple-touch-icon" href="<?= base_url('assets/img/logo.png')?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php if (!empty($preload_image)): ?>
    <link rel="preload" as="image" href="<?= $preload_image ?>">
    <?php endif; ?>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">

    <!-- OpenGraph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Gedem Trading PLC">
    <meta property="og:title" content="<?= html_escape($page_title) ?>">
    <meta property="og:description" content="<?= html_escape($page_description) ?>">
    <meta property="og:url" content="<?= rtrim($canonical_url,'/') ?>">
    <meta property="og:image" content="<?= $og_image ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:alt" content="Gedem Trading PLC — Agricultural Inputs Supplier in Ethiopia">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= html_escape($page_title) ?>">
    <meta name="twitter:description" content="<?= html_escape($page_description) ?>">
    <meta name="twitter:image" content="<?= $og_image ?>">
    <meta name="twitter:image:alt" content="Gedem Trading PLC — Agricultural Inputs Supplier in Ethiopia">
    <meta name="twitter:site" content="@GedemTrading">
    <meta name="twitter:creator" content="@GedemTrading">

    <?php       
        $org_id = base_url() . '#organization';

        $schema = [];
        $schema[] = [
            "@context" => "https://schema.org",
            "@type" => "Organization",
            "@id" => $org_id,
            "name" => "Gedem Trading PLC",
            "url" => base_url(),
            "logo" => base_url("assets/img/logo.png"),
            "image" => $og_image,
            "description" => $page_description,
            "telephone" => "+251911457474",
            "email" => "info@gedemtrading.com",
            "sameAs" => [
                "https://www.linkedin.com/company/gedem-trading",
                "https://twitter.com/GedemTrading",
                "https://www.facebook.com/GedemTrading"
            ]
        ];

        $schema[] = [
            "@context" => "https://schema.org",
            "@type" => "LocalBusiness",
            "@id" => $org_id,
            "name" => "Gedem Trading PLC",
            "url" => base_url(),
            "image" => $og_image,
            "telephone" => "+251911457474",
            "email" => "info@gedemtrading.com",
            "priceRange" => "$$",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "Bole Sub City, Woreda 03, House No. 1234",
                "addressLocality" => "Addis Ababa",
                "addressRegion" => "Addis Ababa",
                "addressCountry" => "ET"
            ],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => "9.03",
                "longitude" => "38.74"
            ],
            "openingHoursSpecification" => [
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => ["Monday","Tuesday","Wednesday","Thursday","Friday"],
                    "opens" => "08:30",
                    "closes" => "17:30"
                ],
                [
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => ["Saturday"],
                    "opens" => "08:30",
                    "closes" => "12:30"
                ]
            ]
        ];

        $schema[] = [
            "@context" => "https://schema.org",
            "@type" => "WebSite",
            "url" => base_url(),
            "name" => "Gedem Trading PLC",
            "publisher" => ["@id" => $org_id]
        ];

        if (!empty($breadcrumbs)) {

            $items = [];

            foreach ($breadcrumbs as $i => $b) {

                $items[] = [
                    "@type" => "ListItem",
                    "position" => $i + 1,
                    "name" => $b['name'],
                    "item" => $b['url']
                ];
            }

            $schema[] = [
                "@context" => "https://schema.org",
                "@type" => "BreadcrumbList",
                "itemListElement" => $items
            ];
        }

        $schema[] = [
            "@context" => "https://schema.org",
            "@type" => $schema_type,
            "name" => $page_title,
            "description" => $page_description,
            "url" => rtrim($canonical_url, '/'),
            "about" => ["@id" => $org_id]
        ];
    ?>
    <script type="application/ld+json">
        <?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); ?>
    </script>
</head>

<body>
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
                    <li><a href="<?= base_url();?>" class="<?= $active_page=='home'?'active':'' ?>"<?= $active_page=='home'?' aria-current="page"':'' ?>>Home</a></li>
                    <li><a href="<?= base_url('about'); ?>" class="<?= $active_page=='about'?'active':'' ?>"<?= $active_page=='about'?' aria-current="page"':'' ?>>About</a></li>
                    <li><a href="<?= base_url('products'); ?>" class="<?= $active_page=='products'?'active':'' ?>"<?= $active_page=='products'?' aria-current="page"':'' ?>>Products</a></li>
                    <li><a href="<?= base_url('services'); ?>" class="<?= $active_page=='services'?'active':'' ?>"<?= $active_page=='services'?' aria-current="page"':'' ?>>Services</a></li>
                    <li><a href="<?= base_url('partners'); ?>" class="<?= $active_page=='partners'?'active':'' ?>"<?= $active_page=='partners'?' aria-current="page"':'' ?>>Partners</a></li>
                    <li><a href="<?= base_url('contact'); ?>" class="<?= $active_page=='contact'?'active':'' ?>"<?= $active_page=='contact'?' aria-current="page"':'' ?>>Contact</a></li>
                </ul>
                <div class="nav-right">
                    <a href="mailto:info@gedemtrading.com">info@gedemtrading.com</a>
                    <a href="tel:+251911457474">+251 91 145 7474</a>
                </div>
            </nav>
        </div>
        <div class="nav-backdrop" id="navBackdrop" aria-hidden="true"></div>
    </header>

    <?php if (!empty($breadcrumbs) && count($breadcrumbs) > 1): ?>
    <!-- <nav class="breadcrumb-nav wrap" aria-label="Breadcrumb">
        <ol class="breadcrumb-list">
            <?php foreach ($breadcrumbs as $i => $crumb): ?>
                <?php if ($i < count($breadcrumbs) - 1): ?>
                    <li><a href="<?= $crumb['url'] ?>"><?= html_escape($crumb['name']) ?></a></li>
                <?php else: ?>
                    <li aria-current="page"><?= html_escape($crumb['name']) ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ol>
    </nav> -->
    <?php endif; ?>

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
            <div>© <?= date('Y') ?> Gedem Trading PLC. All Rights Reserved.</div>
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
</body>
</html>