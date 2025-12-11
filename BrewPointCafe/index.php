<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrewPoint Café - Where Every Cup Feels Like Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <!-- Main Navigation Bar -->
    <header class="main-header">
        <nav class="navbar container">
            <a href="#home-section" class="logo">BrewPoint Café</a>
            <!-- Hamburger Menu Toggle Button -->
            <button class="menu-toggle" aria-expanded="false" aria-controls="navLinks">&#9776;</button> 
            <ul class="nav-links" id="navLinks">
                <li><a href="#home-section">Home</a></li>
                <li><a href="#menu-section">Menu</a></li>
                <li><a href="#about-section">About</a></li>
                <li><a href="#contact-section">Contact</a></li>
                <li><a href="#gallery-section">Gallery</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home-section" class="hero-section">
            <div class="hero-content">
                <h1>Where Every Cup Feels Like Home</h1>
                <a href="#contact-section" class="btn btn-primary">Visit Us Today</a>
            </div>
        </section>

        <section class="highlights-section container">
            <div class="highlight-item">
                <img src="coffeeicon3.PNG" alt="Coffee Icon">
                <h3>Best Coffee in QC</h3>
                <p>Sourced from the best local and international beans, roasted to perfection.</p>
            </div>
            <div class="highlight-item">
                <img src="pastryicon1.PNG" alt="Pastry Icon">
                <h3>Fresh Pastries Daily</h3>
                <p>Enjoy our selection of delicious croissants, muffins, and cakes baked fresh every morning.</p>
            </div>
            <div class="highlight-item">
                <img src="cozyicon.PNG" alt="Cozy Icon">
                <h3>Cozy Atmosphere</h3>
                <p>The perfect place to relax, study, or catch up with friends in a warm, inviting space.</p>
            </div>
        </section>

        <section class="newsletter-section">
            <h3>Stay in the Brew Loop!</h3>
            <p>Sign up for our newsletter to get updates on new drinks and special offers.</p>
            <form class="newsletter-form" id="newsletterForm" action="subscribe.php" method="POST">
    <input type="email" name="email" placeholder="Your email address" required>
    <button type="submit" class="btn btn-primary">Subscribe</button>
</form>
<p id="newsletterMessage" style="margin-top: 15px; color: white; font-weight: bold;"></p>
        </section>

        <section id="menu-section" class="menu-grid container">
            <h2>Our Coffee & Pastries</h2>
            <h3>Coffee</h3>
            <div class="grid-layout">
                <div class="menu-card">
                    <img src="brewpointsignaturelatte.jpg" alt="BrewPoint Signature Latte">
                    <div class="menu-card-content">
                        <h4>BrewPoint Signature Latte</h4>
                        <p>A perfect blend of espresso and steamed milk, with beautiful latte art.</p>
                        <span>₱150</span>
                    </div>
                </div>
                <div class="menu-card">
                    <img src="icedcoldbrew.jpg" alt="Cold Brew">
                    <div class="menu-card-content">
                        <h4>Iced Cold Brew</h4>
                        <p>Steeped for 24 hours for a smooth, less acidic, and refreshing taste.</p>
                        <span>₱160</span>
                    </div>
                </div>
                <div class="menu-card">
                    <img src="classicoespresso.jpg" alt="Espresso">
                    <div class="menu-card-content">
                        <h4>Classic Espresso</h4>
                        <p>A bold, rich shot of our house-roasted coffee beans.</p>
                        <span>₱120</span>
                    </div>
                </div>
            </div>
            <h3>Pastries</h3>
            <div class="grid-layout">
                <div class="menu-card">
                    <img src="croissant.jpg" alt="Croissant">
                    <div class="menu-card-content">
                        <h4>Butter Croissant</h4>
                        <p>Flaky, buttery, and baked to golden-brown perfection.</p>
                        <span>₱80</span>
                    </div>
                </div>
                <div class="menu-card">
                    <img src="blueberrymuffin.jpg" alt="Blueberry Muffin">
                    <div class="menu-card-content">
                        <h4>Blueberry Muffin</h4>
                        <p>Moist and bursting with fresh blueberries in every bite.</p>
                        <span>₱95</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-section" class="about-section container">
            <div class="about-text">
                <h2>Our Story</h2>
                <p>BrewPoint Café was born from a simple dream: to create a space where everyone feels at home. In the bustling city of Quezon City, we wanted to build a peaceful sanctuary—a neighborhood coffee shop that serves not just great coffee, but also a sense of community. Our beans are ethically sourced, our pastries are baked with love, and our doors are always open to new and familiar faces.</p>
            </div>
            <img src="brewpointcafeinterior.jpg" alt="BrewPoint Café Interior" class="about-image">
        </section>
        
        <section class="team-section container">
            <h2>Meet the Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="https://via.placeholder.com/150x150.png?text=Juan" alt="Juan Dela Cruz">
                    <h4>Juan Dela Cruz</h4>
                    <p>Founder & Head Barista</p>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/150x150.png?text=Maria" alt="Maria Santos">
                    <h4>Maria Santos</h4>
                    <p>Pastry Chef</p>
                </div>
            </div>
        </section>

        <section id="contact-section">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.893111003664!2d121.0505199147551!3d14.60677508977119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b97a22a33333%3A0x7d0a2f4a4f4f4f4f!2sQuezon%20City%2C%20Metro%20Manila%2C%20Philippines!5e0!3m2!1sen!2sus!4v1617279326888!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contact-info-section container">
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p><strong>Address:</strong> 123 Quezon Ave, Quezon City, Metro Manila</p>
                    <p><strong>Phone:</strong> (02) 8555-1234</p>
                    <p><strong>Email:</strong> info@brewpointcafe.ph</p>
                    <div class="social-links">
                        <a href="#"><img src="https://via.placeholder.com/40x40.png?text=FB" alt="Facebook"></a>
                        <a href="#"><img src="https://via.placeholder.com/40x40.png?text=IG" alt="Instagram"></a>
                        <a href="#"><img src="https://via.placeholder.com/40x40.png?text=TT" alt="TikTok"></a>
                    </div>
                </div>
                <form class="contact-form" id="contactForm" action="submit_contact.php" method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <textarea name="message" placeholder="Message" rows="5" required></textarea>
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
<p id="contactMessage" style="margin-top: 15px; font-weight: bold;"></p>
            </div>
        </section>

        <section id="gallery-section" class="gallery-grid container">
            <img src="https://via.placeholder.com/400x600.png?text=Gallery+1" alt="Latte art" class="gallery-item">
            <img src="https://via.placeholder.com/600x400.png?text=Gallery+2" alt="Cozy interior" class="gallery-item">
            <img src="https://via.placeholder.com/400x400.png?text=Gallery+3" alt="Drink and Pastry" class="gallery-item">
            <img src="https://via.placeholder.com/400x500.png?text=Gallery+4" alt="Barista at work" class="gallery-item">
            <img src="https://via.placeholder.com/500x400.png?text=Gallery+5" alt="Friends laughing" class="gallery-item">
            <img src="https://via.placeholder.com/400x400.png?text=Gallery+6" alt="Books on a table" class="gallery-item">
            <img src="https://via.placeholder.com/600x400.png?text=Gallery+7" alt="Event" class="gallery-item">
        </section>
    </main>

    <footer class="main-footer">
        <div class="footer-content container">
            <div class="footer-hours">
                <h4>Hours</h4>
                <p>Mon - Sun: 8:00 AM - 10:00 PM</p>
            </div>
            <div class="footer-social-links">
                <a href="#"><img src="https://via.placeholder.com/30x30.png?text=FB" alt="Facebook"></a>
                <a href="#"><img src="https://via.placeholder.com/30x30.png?text=IG" alt="Instagram"></a>
                <a href="#"><img src="https://via.placeholder.com/30x30.png?text=TT" alt="TikTok"></a>
            </div>
        </div>
        <p style="margin-top: 20px;">© 2025 BrewPoint Café. All Rights Reserved.</p>
    </footer>

   <script src= "index.js"></script>

</body>
</html>