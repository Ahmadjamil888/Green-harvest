<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | GreenHarvest Farms</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #7AB259;
            --secondary: #F8F5F0;
            --accent: #E67E22;
            --text: #333333;
            --light-text: #777777;
            --white: #FFFFFF;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Raleway', sans-serif;
            color: var(--text);
            background-color: var(--secondary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header Styles */
        header {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 2rem 0;
            z-index: 100;
            transition: all 0.3s ease;
        }

        header.scrolled {
            background-color: var(--white);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            position: fixed;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 2rem;
            font-weight: 700;
            color: var(--white);
            text-decoration: none;
            font-family: 'Playfair Display', serif;
        }

        header.scrolled .logo {
            color: var(--primary);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 2rem;
        }

        nav ul li a {
            color: var(--white);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: color 0.3s ease;
            position: relative;
        }

        header.scrolled nav ul li a {
            color: var(--text);
        }

        nav ul li a:hover {
            color: var(--accent);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent);
            transition: width 0.3s ease;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        header.scrolled .mobile-menu-btn {
            color: var(--text);
        }

        /* Page Header */
        .page-header {
            height: 60vh;
            min-height: 400px;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1464226184884-fa280b87c399?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            color: var(--white);
            text-align: center;
            position: relative;
        }

        .page-header-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .page-header h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .page-header p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background-color: var(--accent);
            color: var(--white);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid var(--accent);
        }

        .btn:hover {
            background-color: transparent;
            color: var(--accent);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--white);
            border-color: var(--white);
            margin-left: 1rem;
        }

        .btn-outline:hover {
            background-color: var(--white);
            color: var(--text);
        }

        /* Section Styles */
        .section {
            padding: 6rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .section-title p {
            color: var(--light-text);
            max-width: 700px;
            margin: 0 auto;
        }

        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .service-image {
            height: 200px;
            overflow: hidden;
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .service-card:hover .service-image img {
            transform: scale(1.1);
        }

        .service-content {
            padding: 1.5rem;
        }

        .service-content h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .service-content p {
            color: var(--light-text);
            margin-bottom: 1.5rem;
        }

        .service-features {
            margin-bottom: 1.5rem;
        }

        .service-features li {
            margin-bottom: 0.5rem;
            display: flex;
            align-items: flex-start;
        }

        .service-features li::before {
            content: '✓';
            color: var(--accent);
            margin-right: 0.5rem;
        }

        /* Process Section */
        .process {
            background-color: var(--white);
        }

        .process-steps {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .process-steps::before {
            content: '';
            position: absolute;
            top: 0;
            left: 30px;
            height: 100%;
            width: 2px;
            background-color: var(--primary);
            opacity: 0.2;
        }

        .process-step {
            display: flex;
            gap: 2rem;
            position: relative;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background-color: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            flex-shrink: 0;
            z-index: 1;
        }

        .step-content {
            background-color: var(--secondary);
            padding: 1.5rem;
            border-radius: 10px;
            flex: 1;
        }

        .step-content h3 {
            margin-bottom: 1rem;
            color: var(--primary);
        }

        /* CTA Section */
        .cta {
            text-align: center;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80') no-repeat center center/cover;
            color: var(--white);
        }

        .cta .container {
            max-width: 800px;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .cta p {
            margin-bottom: 2rem;
            font-size: 1.2rem;
        }

        /* FAQ Section */
        .faq-section {
            background-color: var(--secondary);
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background-color: var(--white);
            margin-bottom: 1rem;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .faq-question {
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .faq-question:hover {
            background-color: rgba(122, 178, 89, 0.1);
        }

        .faq-question::after {
            content: '+';
            font-size: 1.5rem;
            color: var(--primary);
        }

        .faq-question.active::after {
            content: '-';
        }

        .faq-answer {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }

        .faq-answer.show {
            padding: 0 1.5rem 1.5rem;
            max-height: 500px;
        }

        /* Footer */
        footer {
            background-color: var(--primary);
            color: var(--white);
            padding: 4rem 0 2rem;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .footer-col h3 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent);
        }

        .footer-col p {
            margin-bottom: 1rem;
            opacity: 0.8;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: var(--white);
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .footer-links a:hover {
            opacity: 1;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: var(--white);
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
        }

        .social-links a:hover {
            background-color: var(--accent);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0.8;
            font-size: 0.9rem;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .page-header h1 {
                font-size: 3rem;
            }
        }

        @media (max-width: 768px) {
            nav {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                max-width: 300px;
                height: 100vh;
                background-color: var(--white);
                box-shadow: -5px 0 20px rgba(0, 0, 0, 0.1);
                transition: right 0.3s ease;
                z-index: 1000;
                padding: 2rem;
            }

            nav.active {
                right: 0;
            }

            nav ul {
                flex-direction: column;
                margin-top: 3rem;
            }

            nav ul li {
                margin: 1rem 0;
            }

            nav ul li a {
                color: var(--text);
            }

            .mobile-menu-btn {
                display: block;
                z-index: 1001;
            }

            .mobile-menu-btn.active {
                color: var(--text);
            }

            .page-header h1 {
                font-size: 2.5rem;
            }

            .btn {
                display: block;
                width: 100%;
                margin-bottom: 1rem;
            }

            .btn-outline {
                margin-left: 0;
            }

            .process-steps::before {
                left: 30px;
            }
        }

        @media (max-width: 576px) {
            .process-step {
                flex-direction: column;
                gap: 1rem;
            }

            .step-number {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }

            .process-steps::before {
                left: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
        <div class="container header-container">
            <a href="index.html" class="logo">GreenHarvest</a>
            <button class="mobile-menu-btn" id="mobileMenuBtn">☰</button>
            <nav id="mainNav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/services">services</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/awards">Awards</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-content">
            <h1>Our Farming Services</h1>
            <p>Beyond premium produce, we offer specialized services to support sustainable agriculture and local communities.</p>
            <a href="#services" class="btn">Explore Services</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Comprehensive Agricultural Solutions</h2>
                <p>We provide a range of services designed to promote sustainable farming practices and support local food systems.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Farm Consulting">
                    </div>
                    <div class="service-content">
                        <h3>Farm Consulting</h3>
                        <p>Expert guidance for transitioning to organic and regenerative farming practices.</p>
                        <ul class="service-features">
                            <li>Soil health assessment</li>
                            <li>Crop rotation planning</li>
                            <li>Water management strategies</li>
                            <li>Organic certification support</li>
                        </ul>
                        <a href="/contact" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1556910637-9e8a4288db9c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Educational Programs">
                    </div>
                    <div class="service-content">
                        <h3>Educational Programs</h3>
                        <p>Hands-on learning experiences for all ages about sustainable agriculture.</p>
                        <ul class="service-features">
                            <li>School field trips</li>
                            <li>Workshops for adults</li>
                            <li>Internship programs</li>
                            <li>Farmer training</li>
                        </ul>
                        <a href="/contact" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="CSA Program">
                    </div>
                    <div class="service-content">
                        <h3>CSA Program</h3>
                        <p>Join our Community Supported Agriculture program for weekly fresh produce.</p>
                        <ul class="service-features">
                            <li>Weekly produce boxes</li>
                            <li>Customizable selections</li>
                            <li>Farm pickup or delivery</li>
                            <li>Seasonal recipes included</li>
                        </ul>
                        <a href="/contact" class="btn">Join Now</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1601493700631-2b16ec4b4716?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Wholesale Distribution">
                    </div>
                    <div class="service-content">
                        <h3>Wholesale Distribution</h3>
                        <p>Premium organic produce for restaurants, schools, and retailers.</p>
                        <ul class="service-features">
                            <li>Consistent supply</li>
                            <li>Custom orders</li>
                            <li>Reliable delivery</li>
                            <li>Volume discounts</li>
                        </ul>
                        <a href="/contact" class="btn">Contact Sales</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Farm Events">
                    </div>
                    <div class="service-content">
                        <h3>Farm Events</h3>
                        <p>Host your special event at our picturesque farm location.</p>
                        <ul class="service-features">
                            <li>Weddings</li>
                            <li>Corporate retreats</li>
                            <li>Farm-to-table dinners</li>
                            <li>Seasonal festivals</li>
                        </ul>
                        <a href="/contact" class="btn">Inquire Now</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="Custom Growing">
                    </div>
                    <div class="service-content">
                        <h3>Custom Growing</h3>
                        <p>We'll grow specific crops tailored to your unique needs.</p>
                        <ul class="service-features">
                            <li>Heirloom varieties</li>
                            <li>Specialty crops</li>
                            <li>Contract growing</li>
                            <li>Research partnerships</li>
                        </ul>
                        <a href="/contact" class="btn">Discuss Options</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section process">
        <div class="container">
            <div class="section-title">
                <h2>Our Service Process</h2>
                <p>We follow a structured approach to ensure every service we provide meets our high standards of quality and sustainability.</p>
            </div>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Initial Consultation</h3>
                        <p>We begin with a thorough discussion to understand your specific needs, goals, and challenges. This helps us tailor our services to your unique situation.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Assessment & Planning</h3>
                        <p>Our experts conduct on-site evaluations and develop a customized plan with actionable steps to achieve your objectives.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Implementation</h3>
                        <p>We put the plan into action with careful attention to detail, using sustainable methods and proven techniques.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Ongoing Support</h3>
                        <p>Our relationship doesn't end with implementation. We provide continuous support and adjustments as needed.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Evaluation & Improvement</h3>
                        <p>We regularly assess results and refine our approach to ensure optimal outcomes and continuous improvement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta">
        <div class="container">
            <h2>Ready to Experience GreenHarvest Services?</h2>
            <p>Whether you're a fellow farmer, a business looking for premium produce, or a community member interested in sustainable agriculture, we have services to meet your needs.</p>
            <a href="/contact" class="btn">Get Started</a>
            <a href="tel:+15551234567" class="btn btn-outline">Call Us Now</a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq-section">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our farming services.</p>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">What makes your consulting services different?</div>
                    <div class="faq-answer">
                        <p>Our consulting is rooted in three generations of farming experience combined with the latest sustainable agriculture research. We focus on practical, economically viable solutions that improve both yield and environmental outcomes.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">How does the CSA program work?</div>
                    <div class="faq-answer">
                        <p>Our Community Supported Agriculture program allows members to purchase a "share" of our harvest at the beginning of the season. In return, you receive weekly boxes of fresh, seasonal produce throughout the growing season (typically 20-25 weeks).</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Do you offer custom growing for restaurants?</div>
                    <div class="faq-answer">
                        <p>Yes! We work closely with chefs to grow specific varieties tailored to their menus. This includes heirloom vegetables, specialty herbs, and unique cultivars selected for flavor and texture.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">What types of events can be hosted at your farm?</div>
                    <div class="faq-answer">
                        <p>Our picturesque farm is perfect for weddings, corporate retreats, farm-to-table dinners, and educational events. We have several beautiful outdoor spaces and a renovated barn that can accommodate groups from 20 to 200.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">Are your educational programs suitable for children?</div>
                    <div class="faq-answer">
                        <p>Absolutely! We offer age-appropriate programs for school groups from kindergarten through high school. Kids love our hands-on activities like planting seeds, harvesting vegetables, and meeting our farm animals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>GreenHarvest</h3>
                    <p>Sustainable farming practices for healthier communities and a healthier planet.</p>
                    <div class="social-links">
                        <a href="#"><span>📱</span></a>
                        <a href="#"><span>📘</span></a>
                        <a href="#"><span>📸</span></a>
                        <a href="#"><span>🐦</span></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                    <li><a href="/services">services</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/awards">Awards</a></li>
                    <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Farm Consulting</a></li>
                        <li><a href="#">Educational Programs</a></li>
                        <li><a href="#">CSA Program</a></li>
                        <li><a href="#">Wholesale Distribution</a></li>
                        <li><a href="#">Farm Events</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter for seasonal updates, recipes, and farm news.</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Your email" class="form-control" style="margin-bottom: 1rem;">
                        <button type="submit" class="btn">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 GreenHarvest Farms. All Rights Reserved. | <a href="#" style="color: var(--white);">Privacy Policy</a> | <a href="#" style="color: var(--white);">Terms of Service</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mainNav = document.getElementById('mainNav');

        mobileMenuBtn.addEventListener('click', () => {
            mainNav.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
        });

        // Header Scroll Effect
        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Close mobile menu if open
                if (mainNav.classList.contains('active')) {
                    mainNav.classList.remove('active');
                    mobileMenuBtn.classList.remove('active');
                }

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // FAQ Accordion
        const faqQuestions = document.querySelectorAll('.faq-question');
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isActive = question.classList.contains('active');
                
                // Close all other FAQs
                document.querySelectorAll('.faq-question').forEach(q => {
                    if (q !== question) {
                        q.classList.remove('active');
                        q.nextElementSibling.classList.remove('show');
                    }
                });
                
                // Toggle current FAQ
                question.classList.toggle('active');
                answer.classList.toggle('show');
            });
        });

        // Form Submission
        const newsletterForm = document.querySelector('.newsletter-form');
        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for subscribing to our newsletter!');
            newsletterForm.reset();
        });
    </script>
</body>
</html>