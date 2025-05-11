<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenHarvest - Products</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        /* Navigation */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            height: 70px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: #4a7c59;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 25px;
        }

        .nav-links a {
            color: #4d4d4d;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            padding: 5px 0;
            position: relative;
        }

        .nav-links a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #4a7c59;
            transition: width 0.3s;
        }

        .nav-links a:hover {
            color: #4a7c59;
        }

        .nav-links a:hover:after {
            width: 100%;
        }

        .nav-links a.active {
            color: #4a7c59;
        }

        .nav-links a.active:after {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: #4d4d4d;
            margin: 5px 0;
            transition: all 0.3s ease;
        }

        /* Hero Section */
        .hero {
            background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)), url('https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/128x128.png');
            background-size: cover;
            background-position: center;
            padding: 80px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            color: #4a7c59;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto 30px;
            color: #555;
        }

        /* Product Categories */
        .categories {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .categories-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .categories-title h2 {
            font-size: 2rem;
            color: #4a7c59;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .categories-title h2:after {
            content: '';
            position: absolute;
            width: 60%;
            height: 3px;
            bottom: 0;
            left: 20%;
            background-color: #4a7c59;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .category-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .category-img {
            height: 200px;
            width: 100%;
            background-color: #f1f1f1;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .category-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .category-card:hover .category-img img {
            transform: scale(1.05);
        }

        .category-info {
            padding: 20px;
        }

        .category-info h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: #4a7c59;
        }

        .category-info p {
            color: #666;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }

        .category-link {
            color: #4a7c59;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: color 0.3s;
        }

        .category-link:hover {
            color: #386644;
        }

        .category-link i {
            margin-left: 5px;
            transition: transform 0.3s;
        }

        .category-link:hover i {
            transform: translateX(3px);
        }

        /* Featured Products */
        .featured-products {
            background-color: #f0f7f0;
            padding: 60px 20px;
        }

        .featured-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .featured-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .featured-title h2 {
            font-size: 2rem;
            color: #4a7c59;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .featured-title h2:after {
            content: '';
            position: absolute;
            width: 60%;
            height: 3px;
            bottom: 0;
            left: 20%;
            background-color: #4a7c59;
        }

        .product-slider {
            position: relative;
            margin: 0 auto;
            overflow: hidden;
        }

        .product-container {
            display: flex;
            transition: transform 0.5s ease;
        }

        .product-card {
            flex: 0 0 calc(33.333% - 20px);
            margin: 0 10px;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .product-img {
            height: 200px;
            background-color: #f1f1f1;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-info {
            padding: 20px;
        }

        .product-info h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .product-price {
            color: #4a7c59;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .product-description {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .product-btn {
            background-color: #4a7c59;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .product-btn:hover {
            background-color: #386644;
        }

        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background-color: rgba(74, 124, 89, 0.8);
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            z-index: 2;
            transition: background-color 0.3s;
        }

        .slider-btn:hover {
            background-color: rgba(74, 124, 89, 1);
        }

        .prev-btn {
            left: 10px;
        }

        .next-btn {
            right: 10px;
        }

        /* Testimonials */
        .testimonials {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .testimonials-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .testimonials-title h2 {
            font-size: 2rem;
            color: #4a7c59;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .testimonials-title h2:after {
            content: '';
            position: absolute;
            width: 60%;
            height: 3px;
            bottom: 0;
            left: 20%;
            background-color: #4a7c59;
        }

        .testimonial-container {
            display: flex;
            gap: 30px;
            overflow-x: auto;
            padding: 20px 0;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
        }

        .testimonial-container::-webkit-scrollbar {
            display: none;
        }

        .testimonial-card {
            flex: 0 0 350px;
            background-color: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            scroll-snap-align: start;
        }

        .testimonial-text {
            color: #555;
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
        }

        .testimonial-text:before {
            content: '"';
            font-size: 4rem;
            color: #e6f0e6;
            position: absolute;
            top: -20px;
            left: -15px;
            z-index: -1;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }

        .author-info h4 {
            color: #4a7c59;
            margin-bottom: 5px;
        }

        .author-info p {
            color: #777;
            font-size: 0.9rem;
        }

        /* Footer */
        .footer {
            background-color: #386644;
            color: white;
            padding: 50px 0 20px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }

        .footer-section h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-section h3:after {
            content: '';
            position: absolute;
            width: 40px;
            height: 2px;
            background-color: #a0c1a0;
            bottom: 0;
            left: 0;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #d9e6d9;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
        }

        .contact-info {
            margin-top: 15px;
        }

        .contact-info p {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            color: #d9e6d9;
        }

        .contact-info span {
            margin-left: 10px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .social-links a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #a0c1a0;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .product-card {
                flex: 0 0 calc(50% - 20px);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: absolute;
                right: 0;
                top: 70px;
                background-color: white;
                width: 100%;
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                transform: translateY(-150%);
                transition: transform 0.3s ease;
                z-index: 10;
            }

            .nav-links.active {
                transform: translateY(0);
            }

            .nav-links li {
                margin: 15px 0;
            }

            .hamburger {
                display: block;
            }

            .hamburger.active div:nth-child(1) {
                transform: rotate(45deg) translate(5px, 6px);
            }

            .hamburger.active div:nth-child(2) {
                opacity: 0;
            }

            .hamburger.active div:nth-child(3) {
                transform: rotate(-45deg) translate(5px, -6px);
            }

            .product-card {
                flex: 0 0 calc(100% - 20px);
            }

            .product-slider {
                padding: 0 40px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/50x50.png" alt="GreenHarvest Logo">
                <span class="logo-text">GreenHarvest</span>
            </div>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                    <li><a href="/services">services</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/awards">Awards</a></li>
                    <li><a href="/contact">Contact</a></li>
            </ul>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Our Premium Products</h1>
        <p>Discover our range of high-quality, sustainable farming products that are designed to enhance productivity while respecting the environment.</p>
    </section>

    <!-- Product Categories -->
    <section class="categories">
        <div class="categories-title">
            <h2>Product Categories</h2>
        </div>
        <div class="category-grid">
            <div class="category-card" data-category="seeds">
                <div class="category-img">
                    <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/300x200.png" alt="Seeds">
                </div>
                <div class="category-info">
                    <h3>Premium Seeds</h3>
                    <p>High-yield, disease-resistant seed varieties for various crops that ensure robust growth and exceptional harvests.</p>
                    <a href="#" class="category-link">Explore Seeds <i>→</i></a>
                </div>
            </div>

            <div class="category-card" data-category="fertilizers">
                <div class="category-img">
                    <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/300x200.png" alt="Fertilizers">
                </div>
                <div class="category-info">
                    <h3>Organic Fertilizers</h3>
                    <p>Environmentally friendly fertilizers that enhance soil health while providing essential nutrients for plant growth.</p>
                    <a href="#" class="category-link">Explore Fertilizers <i>→</i></a>
                </div>
            </div>

            <div class="category-card" data-category="equipment">
                <div class="category-img">
                    <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/300x200.png" alt="Equipment">
                </div>
                <div class="category-info">
                    <h3>Farming Equipment</h3>
                    <p>Modern, efficient farming tools and machinery designed to increase productivity and reduce manual labor.</p>
                    <a href="#" class="category-link">Explore Equipment <i>→</i></a>
                </div>
            </div>

            <div class="category-card" data-category="irrigation">
                <div class="category-img">
                    <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/300x200.png" alt="Irrigation">
                </div>
                <div class="category-info">
                    <h3>Irrigation Systems</h3>
                    <p>Water-efficient irrigation solutions that ensure optimal water distribution and conservation.</p>
                    <a href="#" class="category-link">Explore Irrigation <i>→</i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products">
        <div class="featured-container">
            <div class="featured-title">
                <h2>Featured Products</h2>
            </div>
            <div class="product-slider">
                <button class="slider-btn prev-btn">❮</button>
                <div class="product-container">
                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/300x200.png" alt="Hybrid Corn Seeds">
                        </div>
                        <div class="product-info">
                            <h3>Hybrid Corn Seeds</h3>
                            <div class="product-price">$85.99</div>
                            <p class="product-description">High-yield corn seeds resistant to common diseases and pests. Perfect for both small and large-scale farming.</p>
                            <button class="product-btn">Add to Cart</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/300x200.png" alt="Organic Compost">
                        </div>
                        <div class="product-info">
                            <h3>Organic Compost</h3>
                            <div class="product-price">$42.50</div>
                            <p class="product-description">Premium organic compost that enriches soil and provides balanced nutrition for all types of plants.</p>
                            <button class="product-btn">Add to Cart</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/300x200.png" alt="Drip Irrigation Kit">
                        </div>
                        <div class="product-info">
                            <h3>Drip Irrigation Kit</h3>
                            <div class="product-price">$129.99</div>
                            <p class="product-description">Complete drip irrigation system for efficient water usage, suitable for fields up to 1 acre.</p>
                            <button class="product-btn">Add to Cart</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/300x200.png" alt="Harvesting Tools Set">
                        </div>
                        <div class="product-info">
                            <h3>Harvesting Tools Set</h3>
                            <div class="product-price">$75.00</div>
                            <p class="product-description">Durable harvesting tools made from high-quality materials, ergonomically designed for comfort and efficiency.</p>
                            <button class="product-btn">Add to Cart</button>
                        </div>
                    </div>

                    <div class="product-card">
                        <div class="product-img">
                            <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/300x200.png" alt="Soil Testing Kit">
                        </div>
                        <div class="product-info">
                            <h3>Soil Testing Kit</h3>
                            <div class="product-price">$59.95</div>
                            <p class="product-description">Professional-grade soil testing kit that measures pH, moisture, light levels, and nutrient content.</p>
                            <button class="product-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>
                <button class="slider-btn next-btn">❯</button>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="testimonials-title">
            <h2>What Our Customers Say</h2>
        </div>
        <div class="testimonial-container">
            <div class="testimonial-card">
                <div class="testimonial-text">
                    GreenHarvest's hybrid corn seeds have consistently outperformed other varieties in my fields. The yield has increased by nearly 30% since I switched to their products two seasons ago.
                </div>
                <div class="testimonial-author">
                    <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/50x50.png" alt="John D.">
                    <div class="author-info">
                        <h4>John D.</h4>
                        <p>Corn Farmer, Iowa</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-text">
                    The organic fertilizers from GreenHarvest have transformed my soil health. I've noticed improved moisture retention and my vegetables are more flavorful than ever before.
                </div>
                <div class="testimonial-author">
                    <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/50x50.png" alt="Maria L.">
                    <div class="author-info">
                        <h4>Maria L.</h4>
                        <p>Organic Farmer, California</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="testimonial-text">
                    The drip irrigation system has been a game-changer for our farm. We've reduced water usage by 40% while maintaining optimal crop growth. Excellent investment!
                </div>
                <div class="testimonial-author">
                    <img src="https://cdnjs.cloudflare.com/ajax/libs/placeholder-imgs/0.1.0/50x50.png" alt="Robert K.">
                    <div class="author-info">
                        <h4>Robert K.</h4>
                        <p>Commercial Farmer, Texas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>GreenHarvest</h3>
                <p>Providing high-quality farming products and solutions since 1995. Committed to sustainable agriculture and environmentally friendly practices.</p>
                <div class="social-links">
                    <a href="#"><i>f</i></a>
                    <a href="#"><i>t</i></a>
                    <a href="#"><i>in</i></a>
                    <a href="#"><i>ig</i></a>
                </div>
            </div>

            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                   <li><a href="/">Home</a></li>
                    <li><a href="/services">services</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/awards">Awards</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Products</h3>
                <ul class="footer-links">
                    <li><a href="#">Premium Seeds</a></li>
                    <li><a href="#">Organic Fertilizers</a></li>
                    <li><a href="#">Farming Equipment</a></li>
                    <li><a href="#">Irrigation Systems</a></li>
                    <li><a href="#">Soil Amendments</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Contact Us</h3>
                <div class="contact-info">
                    <p><i>📍</i> <span>123 Farming Road, Harvest Valley, CA 95123</span></p>
                    <p><i>📞</i> <span>+1 (555) 123-4567</span></p>
                    <p><i>✉️</i> <span>info@greenharvest.com</span></p>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 GreenHarvest. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Mobile Navigation Toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        // Close menu when clicking on a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });

        // Product Slider Functionality
        const productContainer = document.querySelector('.product-container');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        
        let slideIndex = 0;
        const productCards = document.querySelectorAll('.product-card');
        let slideWidth;
        
        // Calculate how many cards to show based on screen width
        function calculateSlidesPerView()<?php /**PATH C:\Users\Admin\Desktop\laravel\my-app\resources\views/products.blade.php ENDPATH**/ ?>