<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHarvest Farms | Award-Winning Sustainable Agriculture</title>
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

        /* Hero Section */
        .hero {
            height: 100vh;
            min-height: 600px;
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80') no-repeat center center/cover;
            display: flex;
            align-items: center;
            color: var(--white);
            text-align: center;
            position: relative;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero p {
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

        .scroll-down {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: var(--white);
            font-size: 2rem;
            animation: bounce 2s infinite;
            cursor: pointer;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) translateX(-50%);
            }
            40% {
                transform: translateY(-20px) translateX(-50%);
            }
            60% {
                transform: translateY(-10px) translateX(-50%);
            }
        }

        /* About Section */
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

        .about-content {
            display: flex;
            align-items: center;
            gap: 4rem;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }

        .about-text p {
            margin-bottom: 1.5rem;
            color: var(--light-text);
        }

        .about-image {
            flex: 1;
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .about-image:hover img {
            transform: scale(1.05);
        }

        /* Products Section */
        .products {
            background-color: var(--white);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background-color: var(--secondary);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            height: 250px;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-info h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }

        .product-info p {
            color: var(--light-text);
            margin-bottom: 1rem;
        }

        .product-price {
            font-weight: 600;
            color: var(--accent);
            font-size: 1.2rem;
        }

        /* Awards Section */
        .awards {
            background-color: var(--secondary);
        }

        .awards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .award-card {
            padding: 2rem;
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .award-card:hover {
            transform: translateY(-10px);
        }

        .award-icon {
            font-size: 3rem;
            color: var(--accent);
            margin-bottom: 1rem;
        }

        .award-card h3 {
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .award-card p {
            color: var(--light-text);
        }

        /* Testimonials */
        .testimonials {
            position: relative;
            background-color: var(--white);
        }

        .testimonial-slider {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .testimonial-slide {
            text-align: center;
            padding: 0 2rem;
            display: none;
            animation: fade 0.5s ease;
        }

        @keyframes fade {
            from { opacity: 0.4; }
            to { opacity: 1; }
        }

        .testimonial-slide.active {
            display: block;
        }

        .testimonial-text {
            font-size: 1.2rem;
            font-style: italic;
            margin-bottom: 2rem;
            color: var(--text);
        }

        .testimonial-author {
            font-weight: 600;
            color: var(--primary);
        }

        .testimonial-position {
            color: var(--light-text);
            font-size: 0.9rem;
        }

        .slider-nav {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            background-color: #ccc;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .slider-dot.active {
            background-color: var(--accent);
        }

        /* Contact Section */
        .contact {
            background-color: var(--secondary);
        }

        .contact-container {
            display: flex;
            gap: 4rem;
        }

        .contact-info {
            flex: 1;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }

        .contact-details {
            margin-bottom: 2rem;
        }

        .contact-detail {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .contact-icon {
            margin-right: 1rem;
            color: var(--accent);
            font-size: 1.2rem;
            margin-top: 3px;
        }

        .contact-form {
            flex: 1;
            background-color: var(--white);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Raleway', sans-serif;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
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
            .hero h1 {
                font-size: 3rem;
            }

            .about-content {
                flex-direction: column;
            }

            .contact-container {
                flex-direction: column;
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

            .hero h1 {
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
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header id="header">
        <div class="container header-container">
            <a href="#" class="logo">GreenHarvest</a>
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

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Sustainable Farming for a Healthier Future</h1>
            <p>GreenHarvest Farms combines traditional farming wisdom with modern sustainable practices to deliver the freshest, most nutritious produce.</p>
            <div class="hero-buttons">
                <a href="/products" class="btn">Our Products</a>
                <a href="/contact" class="btn btn-outline">Contact Us</a>
            </div>
        </div>
        <div class="scroll-down" id="scrollDown">↓</div>
    </section>

    <!-- About Section -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-title">
                <h2>Our Farming Story</h2>
                <p>For three generations, our family has been committed to sustainable agriculture that respects the land and nourishes communities.</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Rooted in Tradition, Growing for the Future</h3>
                    <p>Founded in 1985, GreenHarvest Farms began as a small family operation with just 20 acres of land. Today, we farm over 1,200 acres using regenerative practices that improve soil health and biodiversity.</p>
                    <p>Our commitment to sustainability has earned us numerous awards and recognition as leaders in environmentally responsible agriculture.</p>
                    <a href="/awards" class="btn">Our Awards</a>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Farmers working in field">
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="section products" id="products">
        <div class="container">
            <div class="section-title">
                <h2>Our Premium Products</h2>
                <p>Grown with care and harvested at peak ripeness, our produce delivers exceptional flavor and nutritional value.</p>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Organic Tomatoes">
                    </div>
                    <div class="product-info">
                        <h3>Heirloom Tomatoes</h3>
                        <p>Grown from rare seed varieties, our tomatoes burst with flavor and nutrients.</p>
                        <div class="product-price">$4.99/lb</div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1601493700631-2b16ec4b4716?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Organic Berries">
                    </div>
                    <div class="product-info">
                        <h3>Organic Berries</h3>
                        <p>Hand-picked at peak sweetness, our berries are antioxidant powerhouses.</p>
                        <div class="product-price">$6.99/pint</div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1601493700631-2b16ec4b4716?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Organic Greens">
                    </div>
                    <div class="product-info">
                        <h3>Leafy Greens</h3>
                        <p>Nutrient-dense greens harvested daily for maximum freshness.</p>
                        <div class="product-price">$3.99/bunch</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards Section -->
    <section class="section awards" id="awards">
        <div class="container">
            <div class="section-title">
                <h2>Our Recognitions</h2>
                <p>We're proud to be recognized for our commitment to sustainable farming and community leadership.</p>
            </div>
            <div class="awards-grid">
                <div class="award-card">
                    <div class="award-icon">🏆</div>
                    <h3>2023 Sustainable Farm of the Year</h3>
                    <p>National Agriculture Association</p>
                </div>
                <div class="award-card">
                    <div class="award-icon">🌱</div>
                    <h3>Gold Certification</h3>
                    <p>Organic Farmers Alliance</p>
                </div>
                <div class="award-card">
                    <div class="award-icon">👨‍🌾</div>
                    <h3>Family Farm Excellence</h3>
                    <p>State Agriculture Department</p>
                </div>
                <div class="award-card">
                    <div class="award-icon">🍅</div>
                    <h3>Best Heirloom Produce</h3>
                    <p>Farmers Market Coalition</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What People Say</h2>
                <p>Hear from our customers, partners, and community members about their GreenHarvest experience.</p>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial-slide active">
                    <p class="testimonial-text">"GreenHarvest's produce is consistently the freshest and most flavorful at our farmers market. Their commitment to sustainable practices makes supporting them even more rewarding."</p>
                    <p class="testimonial-author">Sarah Johnson</p>
                    <p class="testimonial-position">Local Restaurant Owner</p>
                </div>
                <div class="testimonial-slide">
                    <p class="testimonial-text">"As a nutritionist, I recommend GreenHarvest to all my clients. The nutrient density of their vegetables is unmatched thanks to their soil health practices."</p>
                    <p class="testimonial-author">Dr. Michael Chen</p>
                    <p class="testimonial-position">Registered Dietitian</p>
                </div>
                <div class="testimonial-slide">
                    <p class="testimonial-text">"We've partnered with GreenHarvest for our school lunch program for 5 years. The kids can taste the difference, and we love supporting local agriculture."</p>
                    <p class="testimonial-author">Lisa Rodriguez</p>
                    <p class="testimonial-position">School District Nutrition Director</p>
                </div>
            </div>
            <div class="slider-nav">
                <div class="slider-dot active" data-slide="0"></div>
                <div class="slider-dot" data-slide="1"></div>
                <div class="slider-dot" data-slide="2"></div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In Touch</h2>
                <p>We'd love to hear from you! Reach out for wholesale inquiries, farm visits, or just to say hello.</p>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="contact-details">
                        <div class="contact-detail">
                            <span class="contact-icon">📍</span>
                            <p>123 Farm Road, Agricultural Valley, CA 90210</p>
                        </div>
                        <div class="contact-detail">
                            <span class="contact-icon">📞</span>
                            <p>(555) 123-4567</p>
                        </div>
                        <div class="contact-detail">
                            <span class="contact-icon">✉️</span>
                            <p>info@greenharvest.com</p>
                        </div>
                    </div>
                    <h3>Farmers Market Schedule</h3>
                    <p>Find us at these local markets:</p>
                    <ul class="footer-links">
                        <li>• Downtown Market: Saturdays 8am-1pm</li>
                        <li>• Riverside Market: Wednesdays 3pm-7pm</li>
                        <li>• Organic Collective: Sundays 9am-2pm</li>
                    </ul>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
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
                    <h3>Products</h3>
                    <ul class="footer-links">
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruits</a></li>
                        <li><a href="#">Herbs</a></li>
                        <li><a href="#">Seasonal Specials</a></li>
                        <li><a href="#">Value-Added Products</a></li>
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

        // Scroll Down Button
        const scrollDownBtn = document.getElementById('scrollDown');
        scrollDownBtn.addEventListener('click', () => {
            window.scrollTo({
                top: document.getElementById('about').offsetTop - 80,
                behavior: 'smooth'
            });
        });

        // Testimonial Slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.testimonial-slide');
        const dots = document.querySelectorAll('.slider-dot');

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                showSlide(parseInt(dot.getAttribute('data-slide')));
            });
        });

        // Auto-advance slides
        setInterval(() => {
            showSlide(currentSlide + 1);
        }, 5000);

        // Form Submission
        const contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
            contactForm.reset();
        });
    </script>
</body>
</html>