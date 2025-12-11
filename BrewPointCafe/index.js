// Get the navigation elements
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.getElementById('navLinks');

        // Function to close the mobile menu
        function closeMobileMenu() {
             // Only apply this logic below the tablet/mobile breakpoint (768px in CSS)
             if (window.innerWidth <= 768) { 
                navLinks.classList.remove('active');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        }

        // 1. Sticky Navigation
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.main-header');
            if (window.scrollY > 50) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
            closeMobileMenu(); // Close menu on scroll for cleaner mobile usage
        });
        
        // 2. Mobile Navigation Toggle - DEBUGGED
        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', function() {
                // *** DEBUG: Check your console for this message on click! ***
                console.log("Burger menu clicked. Toggling 'active' class."); 
                
                const isExpanded = navLinks.classList.contains('active');
                
                // Toggle the 'active' class to show/hide the menu (as defined in CSS)
                navLinks.classList.toggle('active');
                
                // Update the accessibility attribute
                menuToggle.setAttribute('aria-expanded', !isExpanded);
            });
            
            // Close menu when a link is clicked (on mobile)
            navLinks.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', closeMobileMenu);
            });
        }

        // ===================================================
        // 3. AJAX Form Handlers (Backend Integration)
        // ===================================================

        // Newsletter Form Handler
        const newsletterForm = document.getElementById('newsletterForm');
        const newsletterMessage = document.getElementById('newsletterMessage');

        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                newsletterMessage.textContent = 'Subscribing...';
                newsletterMessage.style.color = 'white';
                
                // Mock fetch request
                new Promise(resolve => setTimeout(resolve, 500)) 
                    .then(() => {
                        // Simulate successful subscription
                        const data = { 
                            success: true, 
                            message: `Thank you for subscribing, ${newsletterForm.querySelector('input[name="email"]').value}!`
                        };
                        
                        if (data.success) {
                            newsletterMessage.textContent = data.message;
                            newsletterMessage.style.color = 'var(--color-accent-green)';
                            newsletterForm.reset();
                        } else {
                            newsletterMessage.textContent = data.message;
                            newsletterMessage.style.color = 'red';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        newsletterMessage.textContent = 'An error occurred. Check your server connection.';
                        newsletterMessage.style.color = 'red';
                    });
            });
        }

        // Contact Form Handler
        const contactForm = document.getElementById('contactForm');
        const contactMessage = document.getElementById('contactMessage');

        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                contactMessage.textContent = 'Sending message...';
                contactMessage.style.color = 'var(--color-primary-brown)';

                // Mock fetch request
                new Promise(resolve => setTimeout(resolve, 500)) 
                    .then(() => {
                        // Simulate successful contact submission
                        const data = { 
                            success: true, 
                            message: `Message sent! We'll be in touch soon, ${contactForm.querySelector('input[name="name"]').value}.`
                        };

                        if (data.success) {
                            contactMessage.textContent = data.message;
                            contactMessage.style.color = 'var(--color-accent-green)';
                            contactForm.reset();
                        } else {
                            contactMessage.textContent = data.message;
                            contactMessage.style.color = 'red';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        contactMessage.textContent = 'An error occurred. Check your server connection.';
                        contactMessage.style.color = 'red';
                    });
            });
        }