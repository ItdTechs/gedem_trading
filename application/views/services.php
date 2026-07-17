<style>
    /* ===== SERVICES PAGE ENHANCEMENTS ===== */

    /* Service cards with icons */
    .service-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin: 20px 0 30px;
    }

    .service-card {
        background: #fff;
        border: 1px solid var(--line);
        border-radius: 14px;
        padding: 32px 24px 28px;
        transition: all .3s ease;
        position: relative;
        overflow: hidden;
    }

    .service-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--lime);
        opacity: 0;
        transition: opacity .3s ease;
    }

    .service-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.06);
        border-color: #d0d9c8;
    }

    .service-card:hover::after {
        opacity: 1;
    }

    .service-card .icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        background: #f0f4ec;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 26px;
        margin-bottom: 18px;
        color: #2d6e41;
        transition: all .3s ease;
    }

    .service-card:hover .icon {
        background: var(--lime);
        transform: scale(1.05);
    }

    .service-card h3 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .service-card p {
        font-size: 14px;
        color: var(--ink-soft);
        line-height: 1.7;
        margin-bottom: 0;
    }

    .service-card .feature-list {
        list-style: none;
        padding: 0;
        margin: 14px 0 0;
    }

    .service-card .feature-list li {
        font-size: 13px;
        color: var(--ink-soft);
        padding: 3px 0 3px 22px;
        position: relative;
        line-height: 1.5;
    }

    .service-card .feature-list li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--lime-dark);
        font-weight: 700;
        font-size: 14px;
    }

    /* Service highlight / CTA banner */
    .service-cta-banner {
        background: linear-gradient(135deg, var(--ink) 0%, #2a3420 100%);
        color: #fff;
        border-radius: 16px;
        padding: 44px 48px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 24px;
        margin: 40px 0 30px;
        position: relative;
        overflow: hidden;
    }

    .service-cta-banner::before {
        content: '✦';
        position: absolute;
        right: 40px;
        top: -30px;
        font-size: 140px;
        opacity: 0.05;
        color: var(--lime);
    }

    .service-cta-banner .content {
        flex: 1;
        min-width: 200px;
        position: relative;
        z-index: 1;
    }

    .service-cta-banner .content .tag {
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--lime);
        font-weight: 600;
    }

    .service-cta-banner .content h3 {
        font-size: 26px;
        margin: 6px 0 10px;
    }

    .service-cta-banner .content p {
        font-size: 14px;
        opacity: 0.8;
        line-height: 1.6;
        max-width: 480px;
    }

    .service-cta-banner .btn {
        flex-shrink: 0;
        position: relative;
        z-index: 1;
    }

    /* Who We Serve - audience cards */
    .audience-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin: 20px 0;
    }

    .audience-card {
        background: #f8f9f4;
        border-radius: 12px;
        padding: 24px 20px;
        border: 1px solid var(--line);
        text-align: center;
        transition: all .25s ease;
    }

    .audience-card:hover {
        background: var(--lime);
        border-color: var(--lime-dark);
        transform: translateY(-4px);
    }

    .audience-card .icon {
        font-size: 32px;
        display: block;
        margin-bottom: 10px;
    }

    .audience-card h4 {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 6px;
    }

    .audience-card p {
        font-size: 13px;
        color: var(--ink-soft);
        line-height: 1.5;
        margin: 0;
    }

    .audience-card:hover p {
        color: var(--ink);
    }

    /* Process steps */
    .process-steps {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin: 30px 0 20px;
    }

    .process-step {
        text-align: center;
        position: relative;
    }

    .process-step:not(:last-child)::after {
        content: '→';
        position: absolute;
        right: -18px;
        top: 28px;
        font-size: 20px;
        color: var(--line);
        font-weight: 300;
    }

    .process-step .number {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: var(--lime);
        color: var(--ink);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Archivo', sans-serif;
        font-size: 20px;
        font-weight: 700;
        margin: 0 auto 12px;
        transition: all .3s ease;
    }

    .process-step:hover .number {
        transform: scale(1.1);
        background: var(--lime-dark);
    }

    .process-step h4 {
        font-size: 15px;
        font-weight: 600;
        margin-bottom: 4px;
    }

    .process-step p {
        font-size: 13px;
        color: var(--ink-soft);
        line-height: 1.5;
        margin: 0;
        max-width: 160px;
        margin: 0 auto;
    }

    /* Responsive */
    @media(max-width: 1024px) {
        .service-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .audience-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .process-steps {
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .process-step:not(:last-child)::after {
            display: none;
        }
    }

    @media(max-width: 760px) {
        .service-grid {
            grid-template-columns: 1fr;
        }

        .audience-grid {
            grid-template-columns: 1fr 1fr;
        }

        .service-cta-banner {
            padding: 28px 24px;
            flex-direction: column;
            align-items: flex-start;
        }

        .service-cta-banner .content h3 {
            font-size: 22px;
        }

        .process-steps {
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }

        .process-step p {
            max-width: 100%;
        }
    }

    @media(max-width: 480px) {
        .audience-grid {
            grid-template-columns: 1fr;
        }

        .service-card {
            padding: 24px 18px;
        }

        .process-steps {
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .process-step .number {
            width: 44px;
            height: 44px;
            font-size: 17px;
        }
    }
</style>
<section class="page-hero">
    <img class="bg-layer" src="<?= base_url('assets/img/img-3.jpg')?>" alt="Service offerings">
    <div class="bg-overlay"></div>
    <div class="wrap">
        <h1>Our Services</h1>
        <p>Comprehensive agricultural service offerings tailored to support farms, cooperatives, institutions, and
            development projects across Ethiopia.</p>
    </div>
</section>
<main class="wrap">
    <!-- ===== SERVICE INTRODUCTION ===== -->
    <section class="page-section">
        <h2>Service Introduction</h2>
        <p>Gedem Trading PLC provides more than products — we deliver end-to-end agricultural support. From
            importation and distribution to institutional procurement, farmer advisory, and logistics management,
            our services are designed to help every partner succeed in Ethiopian agriculture.</p>
        <p>With expertise in procurement, supply chain management, and international trade, we handle the complexity
            so farmers and institutions can focus on what matters most: growing stronger harvests.</p>
    </section>

    <!-- ===== PROCESS STEPS ===== -->
    <section class="page-section">
        <h2>How We Work</h2>
        <p class="section-intro">Our streamlined process ensures efficiency, transparency, and reliability at every stage.</p>

        <div class="process-steps">
            <div class="process-step">
                <div class="number">1</div>
                <h4>Consultation</h4>
                <p>Understanding your needs and requirements</p>
            </div>
            <div class="process-step">
                <div class="number">2</div>
                <h4>Procurement</h4>
                <p>Sourcing from trusted international partners</p>
            </div>
            <div class="process-step">
                <div class="number">3</div>
                <h4>Logistics</h4>
                <p>Efficient importation and warehousing</p>
            </div>
            <div class="process-step">
                <div class="number">4</div>
                <h4>Delivery</h4>
                <p>On-time distribution and support</p>
            </div>
        </div>
    </section>

    <!-- ===== SERVICE OFFERINGS ===== -->
    <section class="page-section">
        <h2>Our Service Offerings</h2>
        <p class="section-intro">Comprehensive solutions designed to meet the diverse needs of Ethiopian agriculture.</p>

        <div class="service-grid">
            <div class="service-card">                    
                <h3>Importation of Agricultural Inputs</h3>
                <p>Managing the import of crop protection products, seeds, fertilizers, and specialty supplies from
                    trusted international manufacturers with full regulatory compliance.</p>
                <ul class="feature-list">
                    <li>Regulatory compliance & documentation</li>
                    <li>Quality assurance & testing</li>
                    <li>Customs clearance & logistics</li>
                </ul>
            </div>

            <div class="service-card">                    
                <h3>Wholesale & Retail Distribution</h3>
                <p>Delivering products to retail outlets, agro-dealers, cooperatives, and commercial buyers through
                    our dependable nationwide logistics network.</p>
                <ul class="feature-list">
                    <li>Nationwide delivery network</li>
                    <li>Bulk & retail supply options</li>
                    <li>Inventory management support</li>
                </ul>
            </div>

            <div class="service-card">                    
                <h3>Institutional & Government Tender Support</h3>
                <p>Supporting government agencies and public institutions with procurement, competitive tendering,
                    documentation, and on-time project delivery.</p>
                <ul class="feature-list">
                    <li>Tender documentation & bidding</li>
                    <li>Project-specific procurement</li>
                    <li>Timely delivery assurance</li>
                </ul>
            </div>

            <div class="service-card">                    
                <h3>NGO Procurement Support</h3>
                <p>Helping NGOs and development organizations secure agricultural inputs for outreach programs,
                    food security initiatives, and community development projects.</p>
                <ul class="feature-list">
                    <li>Program-specific procurement</li>
                    <li>Flexible delivery schedules</li>
                    <li>Technical advisory support</li>
                </ul>
            </div>

            <div class="service-card">                    
                <h3>Farmer Advisory & Technical Support</h3>
                <p>Providing expert guidance on product selection, application timing, dosage rates, and integrated
                    crop protection strategies for optimal results.</p>
                <ul class="feature-list">
                    <li>Product selection guidance</li>
                    <li>Application timing & dosage</li>
                    <li>Integrated pest management</li>
                </ul>
            </div>                

            <div class="service-card">                    
                <h3>Supply Chain & Logistics Management</h3>
                <p>Coordinating warehousing, transportation, inventory management, and delivery to meet customer
                    timelines with our 98% on-time delivery rate.</p>
                <ul class="feature-list">
                    <li>Warehousing & inventory control</li>
                    <li>Transportation & fleet management</li>
                    <li>98% on-time delivery rate</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ===== SERVICE CTA BANNER ===== -->
    <div class="service-cta-banner">
        <div class="content">
            <h3>Customized Service Solutions</h3>
            <p>We work closely with each client to develop tailored service packages that meet specific operational needs, budget constraints, and project timelines.</p>
        </div>
        <a href="<?= base_url('contact') ?>" class="btn btn-lime">Start a Conversation →</a>
    </div>

    <!-- ===== WHO WE SERVE ===== -->
    <section class="page-section">
        <h2>Who We Serve</h2>
        <p class="section-intro">Our services are designed for every segment of the Ethiopian agricultural ecosystem.</p>

        <div class="audience-grid">
            <div class="audience-card">                
                <h4>Farmers & Growers</h4>
                <p>Smallholder and commercial farmers seeking quality inputs, technical guidance, and reliable delivery.</p>
            </div>
            <div class="audience-card">                
                <h4>Cooperatives & Agro-dealers</h4>
                <p>Cooperatives and retail agro-dealers looking for bulk supply, competitive pricing, and technical partnership.</p>
            </div>
            <div class="audience-card">                
                <h4>Commercial Farms</h4>
                <p>Large-scale farming operations requiring consistent supply, specialized products, and dedicated logistics support.</p>
            </div>
            <div class="audience-card">                
                <h4>NGOs & Development Projects</h4>
                <p>Development organizations and project implementers needing procurement assistance and dependable supply.</p>
            </div>
            <div class="audience-card">                
                <h4>Government Institutions</h4>
                <p>Public sector agencies requiring tender support, documentation, and timely delivery for agricultural programs.</p>
            </div>
            <div class="audience-card">                
                <h4>International Partners</h4>
                <p>Global manufacturers and suppliers seeking a reliable Ethiopian distribution and market access partner.</p>
            </div>
        </div>
    </section>

    <!-- ===== GET STARTED ===== -->
    <section class="page-section">
        <h2>Get Started</h2>
        <p>Contact us to discuss your service requirements and discover how Gedem Trading PLC can support your
            agricultural project, farm, or institution.</p>
        <a href="<?= base_url('contact') ?>" class="btn btn-lime">Talk to Our Team →</a>
    </section>
</main>

<?php
$content = ob_get_clean(); 
include 'base.php'; 