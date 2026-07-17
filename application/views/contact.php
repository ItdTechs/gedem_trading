<section class="page-hero">
    <img class="bg-layer" src="<?= base_url('assets/img/img-7.jpg')?>" alt="Contact Gedem Trading PLC">
    <div class="bg-overlay"></div>
    <div class="wrap">
        <h1>Contact Us</h1>
        <p>Get in touch with our team for product inquiries, service requests, partnership opportunities, or
            general questions about agricultural inputs.</p>
    </div>
</section>

<main class="wrap">
    <section class="page-section">
        <h2>Contact Details</h2>
        <div class="contact-details-grid">
            <div class="contact-card">
                <h3>Our Address</h3>
                <p>Gedem Trading PLC<br>Addis Ababa, Ethiopia</p>
            </div>
            <div class="contact-card">
                <h3>Email</h3>
                <p><a href="mailto:info@gedemtradingplc.com">info@gedemtradingplc.com</a></p>
            </div>
            <div class="contact-card">
                <h3>Phone</h3>
                <p><a href="tel:+251111234567">+251 11 123 4567</a><br>
                    <a href="tel:+251911234567">+251 911 234 567</a></p>
            </div>
        </div>
    </section>

    <section class="page-section">
        <h2>Send Us a Message</h2>
        <p class="section-intro">Fill out the form below and our team will respond as soon as possible. For urgent
            inquiries, please call us directly.</p>
        <form class="contact-form" id="contactForm" action="#" method="post">
            <div>
                <label for="firstName" class="sr-only">First Name</label>
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
            </div>
            <div>
                <label for="lastName" class="sr-only">Last Name</label>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
            </div>
            <div>
                <label for="email" class="sr-only">Email</label>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
            </div>
            <div>
                <label for="phone" class="sr-only">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Phone Number">
            </div>
            <div class="full-width">
                <label for="subject" class="sr-only">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Subject (e.g. Product Inquiry, Partnership)">
            </div>
            <div class="full-width">
                <label for="message" class="sr-only">Message</label>
                <textarea id="message" name="message" placeholder="Your message..." required></textarea>
            </div>
            <div class="full-width">
                <button type="submit" class="btn btn-lime">Send Message →</button>
            </div>
        </form>
    </section>        

    <!-- <section class="page-section">
        <h2>Find Us</h2>
        <p class="section-intro">Visit our office in Addis Ababa. Map location is approximate — contact us for
            detailed directions.</p>
        <div class="map-embed">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.60912428257!2d38.6965!3d9.0054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85cef5ab402d%3A0x8467b9764f4f4b0!2sAddis%20Ababa%2C%20Ethiopia!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s"
                width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Gedem Trading PLC office location in Addis Ababa"></iframe>
        </div>
    </section> -->
</main>
<?php
$content = ob_get_clean(); 
include 'base.php'; 