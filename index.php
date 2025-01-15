<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zafran Resources Sdn Bhd</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="header">
            <!-- Logo Section -->
            <div class="logo">
                <img src="gambar/zafran-logo.png" alt="Zafran Logo" class="logo-img">
                <div class="logo-text">
                    <h1>Zafran Resources Sdn Bhd</h1>
                    <p>Johor State Government Takaful Panel</p>
                </div>
            </div>
        
            <!-- Navigation Menu -->
            <nav class="navigation">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#motor">Motor</a></li>
                    <li><a href="#non-motor">Non Motor</a></li>
                    <li><a href="#about-us">About Us</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="content">
            <!-- Slider -->
            <div class="slider">
                <div class="slides">
                    <?php
                    // Array of image paths
                    $images = [
                        "gambar/sliderkereta.jpg",
                        "gambar/slidermotor.jpg",
                        "gambar/renew.jpg",
                        "gambar/insurans.jpg",
                        "gambar/zafran-logo.png",
                    ];

                    foreach ($images as $image): ?>
                        <div class="slide">
                            <img src="<?php echo $image; ?>" alt="Slide Image">
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Dots -->
                <div class="dots">
                    <?php for ($i = 0; $i < count($images); $i++): ?>
                        <span class="dot" data-slide="<?php echo $i; ?>"></span>
                    <?php endfor; ?>
                </div>
            </div>

    <!-- Why Zafran Section -->
    <div class="why-zafran">
        <h2>WHY ZAFRAN BECOME A PREFERRED CHOICE</h2>
        <div class="features">
            <div class="feature">
                <i class="icon">&#128663;</i>
                <h3>IMMEDIATE DELIVERY</h3>
                <p>Get your road tax delivered to your doorstep across Malaysia.</p>
            </div>
            <div class="feature">
                <i class="icon">&#128100;</i>
                <h3>VARIOUS TYPES OF INSURANCE</h3>
                <p>We offer a comprehensive range of personal insurance solutions for you and your loved ones.</p>
            </div>
            <div class="feature">
                <i class="icon">&#128179;</i>
                <h3>SPECIALIST PREPARING BONDS</h3>
                <p>Performance Bond required for contractor tenders.</p>
            </div>
            <div class="feature">
                <i class="icon">&#128176;</i>
                <h3>COMPARE CHEAPER INSURANCES</h3>
                <p>Save more money on your policy! We simplify your search to choose the best insurance quote and compare rates in the city!</p>
            </div>
            <div class="feature">
                <i class="icon">&#127980;</i>
                <h3>AFFILIATE COMPANY</h3>
                <p>One of the associate companies under FMA Takaful.</p>
            </div>
        </div>
    </div>

<!-- Our Insurances Panel Partner Section -->
<div class="insurance-partners">
    <h2>OUR INSURANCES PANEL PARTNER</h2>
    <div class="partners-grid">
        <div class="partner">
            <img src="gambar/takaful-malaysia.png" alt="Takaful Malaysia">
        </div>
        <div class="partner">
            <img src="gambar/takaful-ikhas.png" alt="Takaful Ikhlas">
        </div>
        <div class="partner">
            <img src="gambar/liberty.png" alt="Liberty Insurance">
        </div>
        <div class="partner">
            <img src="gambar/zurich.png" alt="Zurich">
        </div>
        <div class="partner">
            <img src="gambar/allianz.png" alt="Allianz">
        </div>
        <div class="partner">
            <img src="gambar/etiqa.png" alt="Etiqa">
        </div>
        <div class="partner">
            <img src="gambar/lonpac.png" alt="Lonpac Insurance">
        </div>
        <div class="partner">
            <img src="gambar/kurnia.png" alt="Kurnia Insurance">
        </div>
    </div>
</div>

<!-- Separator -->
<div class="section-separator"></div>

<!-- Customer Reviews Section -->
<div class="customer-reviews">
    <h2>CUSTOMER REVIEWS</h2>
    <div class="review-carousel">
        <button class="arrow left-arrow">◀</button>
        <div class="carousel-track">
            <div class="carousel-item">
                <img src="gambar/review1.jpg" alt="Review 1" />
            </div>
            <div class="carousel-item">
                <img src="gambar/review2.jpg" alt="Review 2" />
            </div>
            <div class="carousel-item">
                <img src="gambar/review1.jpg" alt="Review 3" />
            </div>
            <div class="carousel-item">
                <img src="gambar/review2.jpg" alt="Review 4" />
            </div>
            <!-- Add more items as needed -->
        </div>
        <button class="arrow right-arrow">▶</button>
    </div>
</div>


</main>

        <!-- Footer -->
        <footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>Providing quality insurance and road tax solutions for customers across Malaysia.</p>
        </div>
        <div class="footer-section">
            <h3>Working Hours</h3>
            <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
            <p>Saturday: 9:00 AM - 1:00 PM</p>
        </div>
        <div class="footer-section">
            <h3>Social Media</h3>
            <p>
                <a href="#"><i class="icon-twitter"></i> Twitter</a> |
                <a href="#"><i class="icon-facebook"></i> Facebook</a> |
                <a href="#"><i class="icon-instagram"></i> Instagram</a>
            </p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>HAK CIPTA TERPELIHARA 2025 @ ZAFRAN RESOURCES</p>
        <p>
            <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a>
        </p>
    </div>
</footer>

<div class="floating-info">
    <span>More Info</span>
    <a href="https://wa.me/60123456789" target="_blank" title="More Info">
        <img src="gambar/moreinfo.jpeg" alt="Question Mark" class="info-icon">
    </a>
</div>

                    
<script src="script.js"></script>
</body>
</html>
