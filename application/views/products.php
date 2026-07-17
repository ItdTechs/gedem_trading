<style>
    /* ===== PRODUCTS PAGE ENHANCEMENTS ===== */

    /* Category navigation tabs */
    .category-tabs {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin: 30px 0 40px;
        padding: 0;
        list-style: none;
        border-bottom: 2px solid var(--line);
        padding-bottom: 4px;
    }

    .category-tabs li {
        margin: 0;
    }

    .category-tabs a {
        display: inline-block;
        padding: 10px 24px;
        font-size: 14px;
        font-weight: 500;
        color: var(--ink-soft);
        border-radius: 30px 30px 0 0;
        transition: all .25s ease;
        text-decoration: none;
        position: relative;
    }

    .category-tabs a:hover {
        color: var(--ink);
        background: #f0f2eb;
    }

    .category-tabs a.active {
        color: var(--ink);
        background: var(--lime);
        font-weight: 600;
    }

    .category-tabs a .count {
        font-size: 11px;
        background: var(--gray);
        color: #fff;
        border-radius: 20px;
        padding: 1px 8px;
        margin-left: 4px;
        font-weight: 400;
    }

    .category-tabs a.active .count {
        background: var(--ink);
    }

    /* Product cards with icons */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin: 20px 0 30px;
    }

    .product-card {
        background: #fff;
        border: 1px solid var(--line);
        border-radius: 14px;
        padding: 28px 24px 24px;
        transition: all .3s ease;
        position: relative;
        overflow: hidden;
    }

    .product-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--lime);
        opacity: 0;
        transition: opacity .3s ease;
    }

    .product-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.06);
        border-color: #d0d9c8;
    }

    .product-card:hover::before {
        opacity: 1;
    }

    .product-card .icon {
        width: 52px;
        height: 52px;
        border-radius: 12px;
        background: #f0f4ec;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin-bottom: 16px;
        color: #2d6e41;
    }

    .product-card h3 {
        font-size: 18px;
        margin-bottom: 8px;
        font-weight: 600;
    }

    .product-card p {
        font-size: 14px;
        color: var(--ink-soft);
        line-height: 1.6;
        margin-bottom: 12px;
    }

    .product-card ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .product-card ul li {
        font-size: 13px;
        color: var(--ink-soft);
        padding: 4px 0 4px 20px;
        position: relative;
        line-height: 1.5;
    }

    .product-card ul li::before {
        content: '›';
        position: absolute;
        left: 0;
        color: var(--lime-dark);
        font-weight: 700;
        font-size: 16px;
    }

    .product-card .badge {
        display: inline-block;
        font-size: 10px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        background: #eef3ea;
        color: #2d6e41;
        padding: 2px 12px;
        border-radius: 20px;
        margin-top: 12px;
    }

    /* Featured product banner */
    .featured-banner {
        background: var(--ink);
        color: #fff;
        border-radius: 16px;
        padding: 40px 48px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 24px;
        margin: 40px 0 30px;
        position: relative;
        overflow: hidden;
    }

    .featured-banner::after {
        content: '★';
        position: absolute;
        right: 30px;
        bottom: -20px;
        font-size: 120px;
        opacity: 0.06;
        color: var(--lime);
    }

    .featured-banner .content {
        flex: 1;
        min-width: 200px;
        position: relative;
        z-index: 1;
    }

    .featured-banner .content .tag {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--lime);
        font-weight: 600;
    }

    .featured-banner .content h3 {
        font-size: 26px;
        margin: 6px 0 10px;
    }

    .featured-banner .content p {
        font-size: 14px;
        opacity: 0.8;
        line-height: 1.6;
        max-width: 480px;
    }

    .featured-banner .btn {
        flex-shrink: 0;
        position: relative;
        z-index: 1;
    }

    /* Product category highlight boxes */
    .category-highlights {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
        margin: 30px 0;
    }

    .category-highlight {
        background: #f8f9f4;
        border-radius: 12px;
        padding: 20px 16px;
        text-align: center;
        border: 1px solid var(--line);
        transition: all .25s ease;
    }

    .category-highlight:hover {
        background: var(--lime);
        border-color: var(--lime-dark);
        transform: translateY(-3px);
    }

    .category-highlight .num {
        font-family: 'Archivo', sans-serif;
        font-size: 28px;
        font-weight: 700;
        display: block;
        color: var(--ink);
    }

    .category-highlight .label {
        font-size: 12px;
        color: var(--ink-soft);
        font-weight: 500;
    }

    .category-highlight:hover .label {
        color: var(--ink);
    }

    /* Download catalog section */
    .catalog-download {
        background: #f0f4ec;
        border-radius: 16px;
        padding: 36px 40px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
        margin: 30px 0 10px;
        border: 1px solid #dce8de;
    }

    .catalog-download .content h3 {
        font-size: 20px;
        margin-bottom: 4px;
    }

    .catalog-download .content p {
        font-size: 14px;
        color: var(--ink-soft);
    }

    .catalog-download .btn-group {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .catalog-download .btn-outline-dark {
        background: transparent;
        color: var(--ink);
        border: 1px solid var(--ink);
        padding: 12px 24px;
        border-radius: 100px;
        font-weight: 500;
        font-size: 14px;
        transition: all .25s ease;
        cursor: pointer;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .catalog-download .btn-outline-dark:hover {
        background: var(--ink);
        color: #fff;
    }

    /* Responsive */
    @media(max-width: 1024px) {
        .product-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .category-highlights {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width: 760px) {
        .product-grid {
            grid-template-columns: 1fr;
        }

        .category-tabs {
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 8px;
            gap: 4px;
        }

        .category-tabs a {
            font-size: 13px;
            padding: 8px 16px;
            white-space: nowrap;
        }

        .featured-banner {
            padding: 28px 24px;
            flex-direction: column;
            align-items: flex-start;
        }

        .featured-banner .content h3 {
            font-size: 22px;
        }

        .catalog-download {
            flex-direction: column;
            align-items: flex-start;
            padding: 28px 24px;
        }

        .catalog-download .btn-group {
            width: 100%;
        }

        .catalog-download .btn-group .btn,
        .catalog-download .btn-group .btn-outline-dark {
            flex: 1;
            justify-content: center;
        }

        .category-highlights {
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .category-highlight .num {
            font-size: 22px;
        }
    }

    @media(max-width: 480px) {
        .category-highlights {
            grid-template-columns: 1fr 1fr;
        }

        .product-card {
            padding: 20px 16px;
        }
    }
</style>

<section class="page-hero">
    <img class="bg-layer" src="<?= base_url('assets/img/img-2.jpg') ?>" alt="Product catalog">
    <div class="bg-overlay"></div>
    <div class="wrap">
        <h1>Product Catalog</h1>
        <p>Explore our comprehensive range of agricultural inputs — from crop protection chemicals and seeds to
            fertilizers — formulated for Ethiopian farming conditions.</p>
    </div>
</section>

<main class="wrap">
    <!-- ===== CATEGORY TABS ===== -->
    <ul class="category-tabs">
        <!-- <li><a href="#all" class="active">All Products <span class="count">30+</span></a></li>
        <li><a href="#crop-protection">Crop Protection <span class="count">15</span></a></li>
        <li><a href="#seeds">Seeds <span class="count">12</span></a></li>
        <li><a href="#fertilizers">Fertilizers <span class="count">8</span></a></li>
        <li><a href="#specialty">Specialty <span class="count">5</span></a></li> -->
    </ul>

    <!-- ===== CATEGORY HIGHLIGHTS ===== -->
    <!-- <div class="category-highlights">
        <div class="category-highlight">
            <span class="num">30+</span>
            <span class="label">Product Categories</span>
        </div>
        <div class="category-highlight">
            <span class="num">50+</span>
            <span class="label">Individual Products</span>
        </div>
        <div class="category-highlight">
            <span class="num">12+</span>
            <span class="label">International Suppliers</span>
        </div>
        <div class="category-highlight">
            <span class="num">100%</span>
            <span class="label">Quality Assured</span>
        </div>
    </div> -->

    <!-- ===== QUALITY INTRO ===== -->
    <section class="page-section" style="padding-top: 20px;">
        <h2>Quality Agricultural Inputs</h2>
        <p>Gedem Trading PLC imports and distributes over 30 product categories from trusted international
            manufacturers. Every product is selected for effectiveness, safety, and value, helping Ethiopian farmers
            protect crops, improve yields, and grow sustainably.</p>
    </section>

    <!-- ===== FEATURED BANNER ===== -->
    <div class="featured-banner">
        <div class="content">
            <h3>Product Inquiry</h3>
            <p>Contact our team to discuss product availability, pricing, technical specifications, and delivery options for your farm, cooperative, or project.</p>
        </div>
        <a href="<?= base_url('contact') ?>" class="btn btn-lime">Request a Quote →</a>
    </div>

    <!-- ===== CROP PROTECTION ===== -->
    <section class="page-section" id="crop-protection">
        <h2>Crop Protection Chemicals</h2>
        <p class="section-intro">Comprehensive protection against weeds, diseases, and pests affecting cereals,
            vegetables, fruits, and cash crops across Ethiopia.</p>

        <div class="product-grid">
            <div class="product-card">                    
                <h3>Herbicides</h3>
                <p>Effective weed control solutions for a wide range of cropping systems.</p>
                <ul>
                    <li>Glyphosate 48% SL</li>
                    <li>Selective Herbicides</li>
                    <li>Non-selective Herbicides</li>
                </ul>
                <span class="badge">15+ variants</span>
            </div>

            <div class="product-card">                    
                <h3>Fungicides</h3>
                <p>Protection against fungal diseases that threaten crop health and yield.</p>
                <ul>
                    <li>Mancozeb 720 WP</li>
                    <li>Copper-based fungicides</li>
                    <li>Systemic fungicides</li>
                </ul>
                <span class="badge">12+ variants</span>
            </div>

            <div class="product-card">                    
                <h3>Insecticides</h3>
                <p>Solutions for insects affecting cereals, vegetables, fruits, and cash crops.</p>
                <ul>
                    <li>Contact insecticides</li>
                    <li>Systemic insecticides</li>
                    <li>Targeted pest control</li>
                </ul>
                <span class="badge">10+ variants</span>
            </div>
        </div>
    </section>

    <!-- ===== SEEDS ===== -->
    <section class="page-section" id="seeds">
        <h2>Seeds</h2>
        <p class="section-intro">High-quality vegetable and field crop seeds selected for performance in Ethiopian
            growing conditions.</p>

        <div class="product-grid">
            <div class="product-card">                    
                <h3>Vegetable Seeds</h3>
                <p>Premium vegetable varieties adapted to Ethiopian climate and soil conditions.</p>
                <ul>
                    <li>Tomato</li>
                    <li>Onion</li>
                    <li>Cabbage</li>
                    <li>Pepper</li>
                    <li>Carrot</li>
                    <li>Beetroot</li>
                    <li>Lettuce</li>
                    <li>Watermelon</li>
                    <li>Melon</li>
                    <li>Cucumber</li>
                </ul>
                <span class="badge">12+ varieties</span>
            </div>

            <div class="product-card">                    
                <h3>Field Crop Seeds</h3>
                <p>High-yielding field crop varieties for commercial and smallholder farming.</p>
                <ul>
                    <li>Maize</li>
                    <li>Wheat</li>
                    <li>Sorghum</li>
                    <li>Sesame</li>
                    <li>Sunflower</li>
                </ul>
                <span class="badge">5+ varieties</span>
            </div>

            <div class="product-card">                    
                <h3>Legume Seeds</h3>
                <p>Nitrogen-fixing legumes for soil health and food security.</p>
                <ul>
                    <li>Chickpea</li>
                    <li>Lentil</li>
                    <li>Faba Bean</li>
                    <li>Pea</li>
                    <li>Common Bean</li>
                </ul>
                <span class="badge">6+ varieties</span>
            </div>
        </div>
    </section>

    <!-- ===== FERTILIZERS ===== -->
    <section class="page-section" id="fertilizers">
        <h2>Fertilizers</h2>
        <p class="section-intro">Essential plant nutrition products to support soil health, crop development, and
            yield improvement across diverse farming systems.</p>

        <div class="product-grid">
            <div class="product-card">                    
                <h3>NPS Fertilizer</h3>
                <p>Balanced nitrogen, phosphorus, and sulfur for healthy crop development and optimal yields.</p>
                <span class="badge">Standard & Custom Blends</span>
            </div>

            <div class="product-card">                    
                <h3>Urea</h3>
                <p>High-nitrogen fertilizer for rapid vegetative growth and yield support in all cropping systems.</p>
                <span class="badge">46% Nitrogen</span>
            </div>

            <div class="product-card">                    
                <h3>DAP</h3>
                <p>Diammonium phosphate for strong root development and early crop establishment.</p>
                <span class="badge">18-46-0</span>
            </div>

            <div class="product-card">                    
                <h3>Blended Fertilizers</h3>
                <p>Custom nutrient blends tailored to specific crop and soil requirements for maximum efficiency.</p>
                <span class="badge">Custom Formulations</span>
            </div>

            <div class="product-card">                    
                <h3>Specialty Fertilizers</h3>
                <p>Targeted nutrition products for vegetables, fruits, and commercial cropping systems.</p>
                <span class="badge">Water Soluble & Controlled Release</span>
            </div>
        </div>
    </section>

    <!-- ===== SPECIALTY PRODUCTS ===== -->
    <section class="page-section" id="specialty">
        <h2>Specialty Products</h2>
        <p class="section-intro">Advanced agricultural solutions for modern farming challenges.</p>

        <div class="product-grid">
            <div class="product-card">                    
                <h3>Bio-Stimulants</h3>
                <p>Natural products that enhance plant growth, stress tolerance, and nutrient uptake.</p>
                <span class="badge">Organic & Natural</span>
            </div>

            <div class="product-card">                    
                <h3>Soil Amendments</h3>
                <p>Products that improve soil structure, water retention, and microbial activity.</p>
                <span class="badge">Soil Health Solutions</span>
            </div>

            <div class="product-card">                    
                <h3>Growth Regulators</h3>
                <p>Plant growth regulators for improved flowering, fruiting, and overall crop performance.</p>
                <span class="badge">Precision Agriculture</span>
            </div>
        </div>
    </section>

    <!-- ===== CATALOG DOWNLOAD ===== -->
    <div class="catalog-download">
        <div class="content">
            <h3>📄 Download Our Product Catalog</h3>
            <p>Access our complete product catalog with detailed specifications, application rates, and technical information.</p>
        </div>
        <div class="btn-group">
            <a href="#" class="btn btn-lime">Download PDF</a>
            <a href="<?=base_url('contact')?>" class="btn-outline-dark">Request Printed Copy</a>
        </div>
    </div>      
</main>

<?php
$content = ob_get_clean(); 
include 'base.php'; 