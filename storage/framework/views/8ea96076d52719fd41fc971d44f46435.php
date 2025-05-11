<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Harvest - Awards & Recognition</title>
    <style>
        :root {
            --primary-color: #4a8f29;
            --secondary-color: #6bbd46;
            --light-color: #f5f9f3;
            --text-color: #333;
            --accent-color: #f8c537;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 50px;
            margin-right: 10px;
        }

        .logo h1 {
            color: var(--primary-color);
            font-size: 24px;
            font-weight: 700;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--primary-color);
        }

        .hero {
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), 
                        url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            text-align: center;
        }

        .hero h2 {
            font-size: 42px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary-color);
            color: var(--white);
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            text-align: center;
            margin: 60px 0 40px;
        }

        .section-title h2 {
            font-size: 36px;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .section-title p {
            max-width: 700px;
            margin: 0 auto;
            color: #666;
        }

        .awards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .award-card {
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .award-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .award-img {
            height: 200px;
            overflow: hidden;
        }

        .award-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .award-card:hover .award-img img {
            transform: scale(1.1);
        }

        .award-content {
            padding: 25px;
        }

        .award-content h3 {
            font-size: 22px;
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .award-content .date {
            display: inline-block;
            background-color: var(--light-color);
            color: var(--primary-color);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .award-content p {
            margin-bottom: 20px;
            color: #666;
        }

        .award-badge {
            display: inline-flex;
            align-items: center;
            background-color: var(--accent-color);
            color: #333;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .award-badge i {
            margin-right: 5px;
        }

        .stats {
            background-color: var(--primary-color);
            padding: 80px 0;
            color: var(--white);
            margin: 60px 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr));
            gap: 30px;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 50px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .stat-item p {
            font-size: 18px;
            opacity: 0.9;
        }

        .testimonials {
            margin-bottom: 80px;
        }

        .testimonial-slider {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .testimonial {
            background-color: var(--white);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            display: none;
        }

        .testimonial.active {
            display: block;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .testimonial img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 3px solid var(--secondary-color);
        }

        .testimonial p {
            font-size: 18px;
            font-style: italic;
            margin-bottom: 20px;
            color: #555;
        }

        .testimonial h4 {
            font-size: 20px;
            color: var(--primary-color);
            margin-bottom: 5px;
        }

        .testimonial .role {
            color: #777;
            font-size: 16px;
        }

        .slider-controls {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            background-color: #ccc;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .slider-dot.active {
            background-color: var(--primary-color);
        }

        footer {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 60px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(3, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 20px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent-color);
        }

        .footer-column p {
            margin-bottom: 15px;
            opacity: 0.9;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: var(--white);
            text-decoration: none;
            opacity: 0.9;
            transition: opacity 0.3s;
        }

        .footer-column ul li a:hover {
            opacity: 1;
        }

        .social-links {
            display: flex;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            color: var(--white);
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .social-links a:hover {
            background-color: var(--accent-color);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 14px;
            opacity: 0.8;
        }

        @media (max-width: 992px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr));
                gap: 40px;
            }

            .footer-content {
                grid-template-columns: repeat(2, 1fr));
            }
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
            }

            nav ul {
                margin-top: 20px;
            }

            nav ul li {
                margin: 0 10px;
            }

            .hero h2 {
                font-size: 32px;
            }

            .awards-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .testimonial {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="https://via.placeholder.com/50x50?text=GH" alt="Green Harvest Logo">
                <h1>Green Harvest</h1>
            </div>
            <nav>
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

    <section class="hero">
        <div class="container">
            <h2>Our Awards & Recognition</h2>
            <p>Green Harvest has been consistently recognized for our innovation, sustainability practices, and commitment to excellence in agriculture. Explore our achievements below.</p>
            <a href="#" class="btn">Learn About Our Practices</a>
        </div>
    </section>

    <section class="awards">
        <div class="container">
            <div class="section-title">
                <h2>Recent Honors</h2>
                <p>We're proud to have received these prestigious awards that recognize our leadership in sustainable farming and agricultural innovation.</p>
            </div>

            <div class="awards-grid">
                <div class="award-card">
                    <div class="award-img">
                        <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Sustainable Agriculture Award">
                    </div>
                    <div class="award-content">
                        <h3>Sustainable Agriculture Excellence</h3>
                        <span class="date">2023</span>
                        <p>Recognized by the Global Farming Initiative for our innovative water conservation techniques and renewable energy integration across all farms.</p>
                        <span class="award-badge"><i>🏆</i> Gold Level</span>
                    </div>
                </div>

                <div class="award-card">
                    <div class="award-img">
                        <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Organic Certification">
                    </div>
                    <div class="award-content">
                        <h3>Platinum Organic Certification</h3>
                        <span class="date">2022</span>
                        <p>Awarded by the International Organic Standards Board for maintaining 100% organic practices across our 500-acre farm network for 5 consecutive years.</p>
                        <span class="award-badge"><i>🌱</i> Highest Rating</span>
                    </div>
                </div>

                <div class="award-card">
                    <div class="award-img">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Innovation Award">
                    </div>
                    <div class="award-content">
                        <h3>Agricultural Innovation Prize</h3>
                        <span class="date">2022</span>
                        <p>Our patented vertical farming system earned this prestigious award from the Agricultural Technology Foundation for revolutionizing urban farming.</p>
                        <span class="award-badge"><i>💡</i> Industry First</span>
                    </div>
                </div>

                <div class="award-card">
                    <div class="award-img">
                        <img src="https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Community Impact Award">
                    </div>
                    <div class="award-content">
                        <h3>Community Impact Award</h3>
                        <span class="date">2021</span>
                        <p>Recognized by Farm-to-Table Alliance for our school nutrition programs that provide fresh produce to over 200 schools in underserved communities.</p>
                        <span class="award-badge"><i>❤️</i> Social Responsibility</span>
                    </div>
                </div>

                <div class="award-card">
                    <div class="award-img">
                        <img src="https://images.unsplash.com/photo-1529310399831-ed472b81d589?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Export Excellence Award">
                    </div>
                    <div class="award-content">
                        <h3>Export Excellence Award</h3>
                        <span class="date">2021</span>
                        <p>Honored by the Department of Agriculture for our successful expansion into 15 new international markets while maintaining premium quality standards.</p>
                        <span class="award-badge"><i>🌍</i> Global Reach</span>
                    </div>
                </div>

                <div class="award-card">
                    <div class="award-img">
                        <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Employee Satisfaction Award">
                    </div>
                    <div class="award-content">
                        <h3>Best Workplace in Agriculture</h3>
                        <span class="date">2020</span>
                        <p>Recognized by the Farming Employment Association for our industry-leading benefits, training programs, and employee satisfaction initiatives.</p>
                        <span class="award-badge"><i>👥</i> Top 1%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>25+</h3>
                    <p>Industry Awards</p>
                </div>
                <div class="stat-item">
                    <h3>100%</h3>
                    <p>Organic Certified</p>
                </div>
                <div class="stat-item">
                    <h3>500+</h3>
                    <p>Employees</p>
                </div>
                <div class="stat-item">
                    <h3>15</h3>
                    <p>Countries Served</p>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Industry Leaders Say</h2>
                <p>Hear from agricultural experts and partners about our award-winning practices and products.</p>
            </div>

            <div class="testimonial-slider">
                <div class="testimonial active">
                    <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Dr. Sarah Chen">
                    <p>"Green Harvest's sustainable farming techniques have set a new standard in our industry. Their water conservation system alone has reduced usage by 40% without compromising yield - a remarkable achievement that earned them well-deserved recognition."</p>
                    <h4>Dr. Sarah Chen</h4>
                    <span class="role">Director, Global Sustainable Agriculture Initiative</span>
                </div>

                <div class="testimonial">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Rodriguez">
                    <p>"As a supplier to premium restaurants worldwide, we've worked with countless farms. Green Harvest consistently delivers the highest quality organic produce I've seen in my 20-year career. Their awards speak volumes about their commitment to excellence."</p>
                    <h4>Michael Rodriguez</h4>
                    <span class="role">CEO, FreshGlobal Distributors</span>
                </div>

                <div class="testimonial">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya Patel">
                    <p>"The agricultural community has taken notice of Green Harvest's innovative vertical farming system. It's not just award-winning technology - it's revolutionizing how we think about urban food production and sustainability."</p>
                    <h4>Priya Patel</h4>
                    <span class="role">Editor-in-Chief, Modern Farmer Magazine</span>
                </div>

                <div class="slider-controls">
                    <div class="slider-dot active" data-index="0"></div>
                    <div class="slider-dot" data-index="1"></div>
                    <div class="slider-dot" data-index="2"></div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Green Harvest</h3>
                    <p>Leading the way in sustainable agriculture through innovation, quality, and environmental stewardship.</p>
                    <div class="social-links">
                        <a href="#"><i>📱</i></a>
                        <a href="#"><i>💻</i></a>
                        <a href="#"><i>📘</i></a>
                        <a href="#"><i>📸</i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="/">Home</a></li>
                    <li><a href="/services">services</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/awards">Awards</a></li>
                    <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <p>123 Farmway Road<br>Agricultural City, FC 12345</p>
                    <p>Phone: (123) 456-7890</p>
                    <p>Email: info@greenharvest.com</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Green Harvest. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Testimonial slider functionality
        document.addEventListener('DOMContentLoaded', function() {
            const testimonials = document.querySelectorAll('.testimonial');
            const dots = document.querySelectorAll('.slider-dot');
            let currentIndex = 0;
            
            // Function to show testimonial
            function showTestimonial(index) {
                testimonials.forEach(testimonial => testimonial.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));
                
                testimonials[index].classList.add('active');
                dots[index].classList.add('active');
                currentIndex = index;
            }
            
            // Dot click event
            dots.forEach(dot => {
                dot.addEventListener('click', function() {
                    const index = parseInt(this.getAttribute('data-index'));
                    showTestimonial(index);
                });
            });
            
            // Auto-rotate testimonials
            setInterval(() => {
                currentIndex = (currentIndex + 1) % testimonials.length;
                showTestimonial(currentIndex);
            }, 5000);
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html><?php /**PATH C:\Users\Admin\Desktop\laravel\my-app\resources\views/awards.blade.php ENDPATH**/ ?>