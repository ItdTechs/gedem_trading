<section class="hero" id="home">
    <div class="bg-overlay"></div>        
    <img class="bg-layer" src="<?php echo base_url('assets/img/hero-min.jpg') ?>" alt="Agricultural inputs and farm supply">       
    <div class="wrap hero-title">
        <h1>Gedem Trading PLC</h1>
    </div>
    <div class="wrap hero-bottom">
        <div class="hero-bottom-inner">
            <div class="hero-copy">
                <p>Growing agriculture. Protecting crops. Empowering farmers.</p>
                <div class="hero-actions">
                    <a href="<?= base_url('products') ?>" class="btn btn-outline">Explore Products</a>
                    <a href="<?= base_url('contact') ?>" class="btn btn-lime">Contact Us →</a>
                </div>
            </div>
            <a href="<?= base_url('about') ?>" class="explore-link">⏱ Explore More</a>
        </div>
    </div>
</section>

<!-- ================= STATS ================= -->
<section class="stats">
    <div class="wrap stats-inner">
        <div class="stat">
            <div class="num">Trusted</div>
            <div class="label">Supply partner for quality agricultural inputs</div>
        </div>
        <div class="stat">
            <div class="num">Reliable</div>
            <div class="label">Import, distribution, and logistics support</div>
        </div>
        <div class="stat">
            <div class="num">Affordable</div>
            <div class="label">Products tailored for farmer productivity</div>
        </div>
        <div class="stat">
            <div class="num">Professional</div>
            <div class="label">Technical support and customer service</div>
        </div>
    </div>
</section>

<!-- ================= INTRO ================= -->
<section class="intro wrap" id="about">
    <h2>Supporting Ethiopian agriculture with dependable inputs and expert service</h2>
    <div class="intro-right">
        <p>Gedem Trading PLC is an Ethiopian company specializing in the import, distribution, and supply of
            high-quality agricultural inputs. We are committed to improving agricultural productivity by providing
            reliable crop protection products, vegetable seeds, fertilizers, and modern farming solutions.</p>
        <p class="muted">Our mission is to deliver innovative, affordable, and effective agricultural products that
            help Ethiopian farmers achieve higher yields while promoting sustainable agricultural development.</p>
        <div class="hero-actions">
            <a href="<?= base_url('services') ?>" class="discover-link">Discover Our Services →</a>
        </div>
    </div>
</section>
<section class="solutions-gallery wrap" id="products">
    <div class="gallery-head">
        <div class="gallery-tag">/ Our Products</div>
    </div>
    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="<?= base_url('assets/img/img-1.jpg') ?>" alt="Crop protection chemicals">
            <div class="cap">Herbicides, Fungicides & Insecticides</div>
        </div>
        <div class="gallery-item">
            <img src="<?= base_url('assets/img/img-2.jpg') ?>" alt="Vegetable and field crop seeds">
            <div class="cap">Vegetable Seeds & Field Crop Seeds</div>
        </div>
        <div class="gallery-item">
            <img src="<?= base_url('assets/img/img-3.jpg') ?>" alt="Fertilizer and plant nutrition products">
            <div class="cap">Fertilizers & Plant Nutrition Products</div>
        </div>
    </div>
</section>
<section class="solutions-detail wrap" id="services">
    <div class="sd-top">
        <h2>Comprehensive agricultural support for farmers, cooperatives, and institutions</h2>
        <p>Gedem Trading PLC provides importation of agricultural inputs, wholesale and retail supply, institutional
            procurement, government tender support, advisory services, and dependable logistics management.</p>
    </div>
    <div class="accordion">
        <div class="accordion-item">
            <div class="accordion-head" data-target="1">
                <span>Crop Protection Chemicals</span>
                <span class="chev">›</span>
            </div>
            <div class="accordion-body">
                <p><strong>Herbicides:</strong> Glyphosate 48% SL, Selective Herbicides, Non-selective Herbicides
                </p>
                <p><strong>Fungicides:</strong> Mancozeb 720 WP, Copper-based fungicides, Systemic fungicides</p>
                <p><strong>Insecticides:</strong> Protection against insects affecting cereals, vegetables, fruits,
                    and cash crops</p>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-head" data-target="2">
                <span>Seeds & Fertilizers</span>
                <span class="chev">›</span>
            </div>
            <div class="accordion-body">
                <p><strong>Vegetable Seeds:</strong> Tomato, Onion, Cabbage, Pepper, Carrot, Beetroot, Lettuce,
                    Watermelon, Melon, Cucumber</p>
                <p><strong>Field Crop Seeds:</strong> Maize, Wheat, Sorghum, Sesame, Sunflower</p>
                <p><strong>Fertilizers:</strong> NPS, Urea, DAP, Blended Fertilizers, Specialty Fertilizers</p>
            </div>
        </div>
        <div class="accordion-item open">
            <div class="accordion-head" data-target="3">
                <span>Institutional & Advisory Support</span>
                <span class="chev">›</span>
            </div>
            <div class="accordion-body">
                <p>Support for NGOs, government institutions, development projects, agro-dealers, and commercial
                    farms through:</p>
                <ul>
                    <li>Government tender support</li>
                    <li>NGO procurement assistance</li>
                    <li>Farmer advisory and technical guidance</li>
                    <li>Product registration support</li>
                    <li>Supply chain and logistics management</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ================= SPOTLIGHT ================= -->
<section class="spotlight">
    <img class="bg-layer" src="<?= base_url('assets/img/img-4.jpg') ?>" alt="Ethiopian farms and agricultural landscapes">
    <div class="bg-overlay"></div>
    <div class="wrap spotlight-inner">
        <div class="spotlight-copy">
            <h2 id="spotlightTitle">Why choose Gedem Trading PLC?</h2>
            <p class="quote" id="spotlightQuote">We combine high-quality imported products, competitive pricing,
                timely delivery, and professional technical support to help farmers and agribusiness partners
                succeed.</p>
            <ul class="slide-highlights" id="spotlightHighlights"></ul>
            <div class="spotlight-nav">
                <button id="prevSlide" type="button" aria-label="Previous slide">←</button>
                <button id="nextSlide" type="button" aria-label="Next slide">→</button>
            </div>
            <div class="spotlight-dots" id="spotlightDots"></div>
        </div>
        <div class="spotlight-visual">
            <div class="spotlight-loc" id="spotlightLocation">📍 Addis Ababa, Ethiopia</div>
            <div class="spotlight-img">
                <img id="spotlightImage" src="<?= base_url('assets/img/img-5.jpg') ?>" alt="Agricultural landscape in Ethiopia">
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="spotlight-bar"><span id="spotlightBar"></span></div>
    </div>
</section>

<!-- ================= TESTIMONIALS ================= -->
<section class="testimonials wrap">
    <div class="t-grid">
        <div class="t-photo">
            <img src="<?= base_url('assets/img/img-6.jpg') ?>" alt="Farmer celebrating harvest">
        </div>
        <div class="t-card light">
            <p class="quote">"We support farmers with dependable crop protection products, quality seeds, and
                fertilizers that help strengthen productivity and crop health."</p>
            <div class="who">Farmers & Growers</div>
        </div>
        <div class="t-card dark">
            <p class="quote">"Our solutions are designed for cooperatives, agro-dealers, commercial farms, and
                public sector partners that require dependable supply and technical support."</p>
            <div class="who">Cooperatives & Commercial Partners</div>
        </div>
        <div class="t-card light">
            <p class="quote">"Gedem Trading PLC promotes responsible agriculture by encouraging the safe and proper
                use of crop protection products while supporting sustainable practices."</p>
            <div class="who">Sustainability & Quality Commitment</div>
        </div>
        <div class="t-card dark">
            <p class="quote">"We welcome partnerships with international manufacturers, research institutions,
                development organizations, NGOs, and government agencies."</p>
            <div class="who">Partners & Institutions</div>
        </div>        
    </div>
</section>

<!-- ================= CTA BANNER ================= -->
<section class="cta-banner" id="contact">
    <img class="bg-layer" src="<?= base_url('assets/img/img-8.jpg') ?>" alt="Farmland and crops">
    <div class="bg-overlay"></div>
    <h2>Build stronger harvests with Gedem Trading PLC</h2>
    <a href="<?= base_url('contact') ?>" class="btn btn-lime">Contact Us Today →</a>
</section>  

<?php
$content = ob_get_clean(); 
include 'base.php'; 