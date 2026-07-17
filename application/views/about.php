<style>
    /* ===== ABOUT PAGE ENHANCEMENTS ===== */
    
    /* Organization Chart */
    .org-chart {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 0 20px;
        position: relative;
    }

    .org-top {
        text-align: center;
        margin-bottom: 20px;
    }

    .org-top .org-node {
        background: var(--ink);
        color: #fff;
        padding: 16px 32px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 16px;
        display: inline-block;
        position: relative;
    }

    .org-top .org-node .sub {
        font-weight: 400;
        font-size: 13px;
        opacity: 0.7;
        display: block;
        margin-top: 2px;
    }

    .org-line-vertical {
        width: 2px;
        height: 30px;
        background: var(--line);
        margin: 0 auto;
    }

    .org-gm {
        text-align: center;
        margin: 10px 0 30px;
    }

    .org-gm .org-node {
        background: var(--lime);
        color: var(--ink);
        padding: 16px 36px;
        border-radius: 10px;
        font-weight: 700;
        font-size: 18px;
        display: inline-block;
        position: relative;
    }

    .org-gm .org-node .sub {
        font-weight: 400;
        font-size: 13px;
        opacity: 0.7;
        display: block;
        margin-top: 2px;
    }

    .org-line-horizontal {
        width: 80%;
        max-width: 700px;
        height: 2px;
        background: var(--line);
        margin: 0 auto 30px;
        position: relative;
    }

    .org-line-horizontal::before,
    .org-line-horizontal::after {
        content: '';
        position: absolute;
        top: 0;
        width: 2px;
        height: 25px;
        background: var(--line);
    }

    .org-line-horizontal::before {
        left: 20%;
    }

    .org-line-horizontal::after {
        right: 20%;
    }

    .org-row {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        width: 100%;
        max-width: 900px;
        margin: 0 auto;
    }

    .org-row .org-node {
        background: #f5f6f0;
        border: 1px solid var(--line);
        padding: 16px 12px;
        border-radius: 10px;
        text-align: center;
        font-weight: 600;
        font-size: 14px;
        transition: all .25s ease;
    }

    .org-row .org-node:hover {
        background: var(--lime);
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
    }

    .org-row .org-node .sub {
        font-weight: 400;
        font-size: 12px;
        opacity: 0.6;
        display: block;
        margin-top: 4px;
    }

    /* Stats row for About page */
    .about-stats {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin: 40px 0;
        padding: 32px 0;
        border-top: 1px solid var(--line);
        border-bottom: 1px solid var(--line);
    }

    .about-stat {
        text-align: center;
    }

    .about-stat .num {
        font-family: 'Archivo', sans-serif;
        font-size: 36px;
        font-weight: 700;
        color: var(--ink);
    }

    .about-stat .num span {
        color: var(--gray);
        font-size: 18px;
        font-weight: 400;
    }

    .about-stat .label {
        font-size: 13px;
        color: var(--gray);
        margin-top: 4px;
    }

    /* Timeline / Milestones */
    .milestones {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        margin-top: 30px;
    }

    .milestone {
        background: #f8f9f4;
        border-radius: 12px;
        padding: 28px 24px;
        border: 1px solid var(--line);
        transition: all .25s ease;
    }

    .milestone:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.04);
    }

    .milestone .year {
        font-family: 'Archivo', sans-serif;
        font-size: 28px;
        font-weight: 700;
        color: var(--lime-dark);
        display: block;
        margin-bottom: 8px;
    }

    .milestone h4 {
        font-size: 18px;
        margin-bottom: 6px;
    }

    .milestone p {
        font-size: 14px;
        color: var(--ink-soft);
        line-height: 1.6;
    }

    /* Responsive */
    @media(max-width: 1000px) {
        .org-row {
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .about-stats {
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .milestones {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media(max-width: 600px) {
        .org-row {
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .org-row .org-node {
            font-size: 12px;
            padding: 12px 8px;
        }

        .about-stats {
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            padding: 20px 0;
        }

        .about-stat .num {
            font-size: 28px;
        }

        .milestones {
            grid-template-columns: 1fr;
        }

        .org-gm .org-node {
            font-size: 15px;
            padding: 12px 20px;
        }

        .org-top .org-node {
            font-size: 14px;
            padding: 12px 20px;
        }
    }

    /* Section spacing */
    .page-section:last-child {
        border-bottom: none;
    }

    .page-section .btn {
        margin-top: 20px;
    }

    /* Value cards grid on about page - reuse .content-grid */
    .content-grid.two-col .card {
        transition: all .25s ease;
    }

    .content-grid.two-col .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.06);
    }
</style>

<section class="page-hero">
    <img class="bg-layer" src="<?= base_url('assets/img/img-1.jpg') ?>" alt="Gedem Trading PLC about">
    <div class="bg-overlay"></div>
    <div class="wrap">
        <h1>About Gedem Trading</h1>
        <p>Gedem Trading PLC is a trusted Ethiopian agricultural inputs company delivering quality products,
            reliable logistics, and practical support to farmers, cooperatives, institutions, and development
            partners.</p>
    </div>
</section>

<main class="wrap">


    <!-- ===== WHO WE ARE ===== -->
    <section class="page-section">
        <h2>Who We Are</h2>
        <p>Gedem Trading PLC is an Ethiopian company specializing in the import, distribution, and supply of
            high-quality agricultural inputs. We are committed to improving agricultural productivity by providing
            reliable crop protection products, vegetable seeds, fertilizers, and modern farming solutions.</p>
        <p>Our mission is to deliver innovative, affordable, and effective agricultural products that help Ethiopian
            farmers achieve higher yields while promoting sustainable agricultural development. With over a decade of
            industry experience, we serve more than 500 farmers and agro-dealers across the country.</p>
        <p>From smallholder growers to large commercial farms, cooperatives, NGOs, and government institutions, we
            provide the products, expertise, and dependable service that Ethiopian agriculture needs to thrive.</p>
    </section>

    <!-- ===== EXPERTISE ===== -->
    <section class="page-section">
        <h2>Our Expertise</h2>
        <p class="section-intro">Our multidisciplinary team brings deep knowledge across the agricultural value
            chain, ensuring every product and service meets the highest standards of quality and effectiveness.</p>
        <div class="expertise-grid">
            <span>Procurement</span>
            <span>Supply Chain Management</span>
            <span>Pharmaceutical Sciences</span>
            <span>Agricultural Business</span>
            <span>International Trade</span>
            <span>Import & Distribution</span>
        </div>
    </section>

    <!-- ===== ORGANIZATIONAL STRUCTURE ===== -->
    <section class="page-section">
        <h2>Organizational Structure</h2>
        <p class="section-intro">Our leadership team brings together diverse expertise to drive agricultural innovation and service excellence across Ethiopia.</p>

        <div class="org-chart">
            <!-- Sole Shareholder -->
            <div class="org-top">
                <div class="org-node">
                    SOLE SHAREHOLDER
                    <span class="sub">Founder & Owner</span>
                </div>
            </div>

            <div class="org-line-vertical"></div>

            <!-- General Manager -->
            <div class="org-gm">
                <div class="org-node">
                    GENERAL MANAGER
                    <span class="sub">Mr. Tatek Wamisho</span>
                </div>
            </div>

            <div class="org-line-horizontal"></div>

            <!-- 4 Departments -->
            <div class="org-row">
                <div class="org-node">
                    Finance & Administration
                    <span class="sub">Financial Management & HR</span>
                </div>
                <div class="org-node">
                    Sales & Marketing
                    <span class="sub">Market Expansion & Strategy</span>
                </div>
                <div class="org-node">
                    Supply Chain & Logistics
                    <span class="sub">Procurement & Distribution</span>
                </div>
                <div class="org-node">
                    Regulatory & Technical Affairs
                    <span class="sub">Compliance & Technical Support</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MILESTONES ===== -->
    <section class="page-section">
        <h2>Our Journey</h2>
        <p class="section-intro">Key milestones that have shaped our growth and commitment to Ethiopian agriculture.</p>

        <div class="milestones">
            <div class="milestone">
                <!-- <span class="year">2013</span> -->
                <h4>Foundation</h4>
                <p>Gedem Trading PLC was established with a vision to transform agricultural input supply in Ethiopia.</p>
            </div>
            <div class="milestone">                
                <h4>Expansion</h4>
                <p>Expanded product portfolio to include premium vegetable seeds and advanced crop protection solutions.</p>
            </div>
            <div class="milestone">                
                <h4>Partnerships</h4>
                <p>Established strategic partnerships with leading international agricultural input manufacturers.</p>
            </div>
            <div class="milestone">                
                <h4>Digital Transformation</h4>
                <p>Implemented modern supply chain management systems to enhance efficiency and service delivery.</p>
            </div>
            <div class="milestone">                
                <h4>Sustainability Focus</h4>
                <p>Launched sustainability initiatives promoting responsible farming and environmental stewardship.</p>
            </div>
            <div class="milestone">                
                <h4>Market Leadership</h4>
                <p>Recognized as a leading agricultural input supplier serving thousands of farmers across Ethiopia.</p>
            </div>
        </div>
    </section>

    <!-- ===== VISION & MISSION ===== -->
    <section class="page-section">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
            <div>
                <h2>Vision</h2>
                <p>To become one of Ethiopia's leading agricultural input suppliers recognized for quality, innovation,
                    reliability, and customer satisfaction.</p>
            </div>
            <div>
                <h2>Mission</h2>
                <p>To improve agricultural productivity by providing farmers with high-quality crop protection products,
                    seeds, fertilizers, and professional technical support.</p>
            </div>
        </div>
    </section>

    <!-- ===== CORE VALUES ===== -->
    <section class="page-section">
        <h2>Core Values</h2>
        <p class="section-intro">The principles that guide our work and define our commitment to Ethiopian agriculture.</p>
        <div class="content-grid two-col">
            <div class="card">
                <h3>Integrity</h3>
                <p>Honest and transparent business practices in every transaction and partnership.</p>
            </div>
            <div class="card">
                <h3>Quality</h3>
                <p>Uncompromising product standards sourced from trusted international manufacturers.</p>
            </div>
            <div class="card">
                <h3>Customer Focus</h3>
                <p>Prioritizing farmer and partner needs with responsive, personalized support.</p>
            </div>
            <div class="card">
                <h3>Professionalism</h3>
                <p>Expert service and technical guidance throughout every step of the supply process.</p>
            </div>
            <div class="card">
                <h3>Innovation</h3>
                <p>Bringing modern solutions and new technologies to Ethiopian agriculture.</p>
            </div>
            <div class="card">
                <h3>Sustainability</h3>
                <p>Promoting responsible farming practices and long-term environmental health.</p>
            </div>
            <div class="card">
                <h3>Accountability</h3>
                <p>Taking responsibility for our commitments and delivering on every promise.</p>
            </div>
            <div class="card">
                <h3>Partnership</h3>
                <p>Building lasting relationships with farmers, suppliers, and institutions.</p>
            </div>
        </div>
    </section>

    <!-- ===== QUALITY COMMITMENT ===== -->
    <section class="page-section">
        <h2>Quality Commitment</h2>
        <p>We source products only from trusted international manufacturers that comply with recognized quality
            standards. Every product is selected to ensure effectiveness, safety, and value for Ethiopian
            agriculture.</p>
        <p>Our quality assurance process covers importation, storage, handling, and delivery — so farmers and
            partners receive products that perform as expected in the field.</p>
    </section>

    <!-- ===== SUSTAINABILITY ===== -->
    <section class="page-section">
        <h2>Sustainability</h2>
        <p>Gedem Trading PLC promotes responsible agriculture by encouraging the safe and proper use of crop
            protection products while supporting environmentally sustainable farming practices.</p>
        <p>We believe that long-term agricultural success depends on protecting soil health, water resources, and
            biodiversity — and we work with our partners to promote practices that benefit both farmers and the
            environment.</p>
        <a href="<?php echo base_url('contact'); ?>" class="btn btn-lime">Contact Our Team →</a>
    </section>
</main>


<?php
$content = ob_get_clean(); 
include 'base.php'; 