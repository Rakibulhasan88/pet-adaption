<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
    <!-- link To JS -->
    <script src="pet.js" defer></script>
    <!-- For Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- For Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Link For Gsap -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
      integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- Link For Gsap - Scroll Trigger -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
      integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- Link For Lenis - Smooth Scrolling -->
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
    <!-- Link For Split Type -->
    <script src="https://cdn.jsdelivr.net/npm/split-type@0.3.4/umd/index.min.js"></script>
    <title>Document</title>
</head>
<body>
    <!-- Navber section Start -->
    <nav>
        <a href="index.php" class="brend">
            <h1>Purr<b class="accent">fact</b></h1>
        </a>
        <div class="menu">
            <div class="btn">
                <i class="fas fa-times close-btn"></i>
            </div>
            <a href="index.php">Home</a>
            <a href="index.php#pets">Pets</a>
            <a href="index.php#requirements">Requirements</a>
            <a href="index.php#about">About</a>
            <a href="index.php#stories">Stories</a>
        </div>

        <div class="btn-2">
            <a href="login.php">Log in</a>
            <i class="fa-solid fa-circle-arrow-right"></i>
        </div>
        <div class="btn">
            <i class="fas fa-bars menu-btn"></i>
        </div>
    </nav>
    <!-- Navber Section End -->
    <!-- Hero Page Section Start -->
     <section class="heropage">
        <!-- <h1>Find Your Pet Soul Today!</h1> -->
        <div class="hero-headlines">
            <h1>Find Your Perfect Pet Soul Today!</h1>
            <p>Discover Your Perfect Companion in Our Selection of Lovinf Pets Available for Adoption.</p>
            <div class="hero-headlines-buttons">
                <button class="btn-3">Our Pets</button>
                <button class="btn-3 btn-transparent"><a href="contact.php">Contact Us</a></button>
            </div>
        </div>
        <div class="hero-images">
            <img src="img/Rabbit.jpeg" alt="img">
            <img src="img/Dog.jpeg" alt="img">
            <img src="img/cat.jpeg" alt="img">
        </div>

     </section>
    <!-- Hero Page Section End -->

    <!-- Requirements Section Start -->

    <section class="requirements" id="requirements">
        <div class="requirements-headlines">
            <h1>Our Process For Adoption</h1>
            <p>Our Process is Simple and Filled with joy every step of the way:</p>

            <div class="r-item-container">
                <div class="r-item">
                    <div class="r-logo" style="background-color: #b9ff46">
                        <i class="fa-regular fa-newspaper"></i>
                    </div>
                    <h5>Submitting an application</h5>
                </div>

                <div class="r-item">
                    <div class="r-logo" style="background-color: #fff846">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <h5>Submitting an application</h5>
                </div>

                <div class="r-item">
                    <div class="r-logo" style="background-color: #ff8846">
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <h5>Meating the pet in person</h5>
                </div>

                <div class="r-item">
                    <div class="r-logo" style="background-color: #46c7ff">
                        <i class="fa-solid fa-zipper"></i>
                    </div>
                    <h5>Signing an adoption agreement</h5>
                </div>

                <div class="r-item">
                    <div class="r-logo" style="background-color: #4fffca">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h5>Congtatulations on Finding a match</h5>
                </div>
            </div>
        </div>
        <img src="img/requirements-img.png" alt="img">
    </section>
    <!-- Requirements Section end -->

    <!-- Pets Section -->
    <section class="pets" id="pets">
        <div class="pets-headlines">
            <i class="fa-solid fa-paw"></i>
            <h1>Meet Your Soul Pets</h1>
        </div>

        <div class="pets-collection">
            <div class="pet-item">
                <img src="img/pet-item-1.png" alt="img">
                <h3>Woolfs</h3>
            </div>
             <div class="pet-item">
                <img src="img/pet-item-2.png" alt="img">
                <h3>Rolex</h3>
            </div>
             <div class="pet-item">
                <img src="img/pet-item-3.png" alt="img">
                <h3>Professor mew</h3>
            </div>
        </div>
        <button class="btn-3 btn-pets">
            <p>Find More</p>
            <i class="fa-solid fa-arrow-right-long"></i>
        </button>
    </section>
    <!-- Pet Section End -->

    <!-- About Section Start-->
     <div class="about" id="about">
        <div class="about-headlines">
            <h1>About Us</h1>
            <p class="reveal-type" data-bg-color="#cccccc" data-fg-color="black">
                Purrfect is not just a 
                <b>Pet adoption website</b>; it's a heaven for both pets in search of their forever homes and compassionate individuals to welcome them with open arms.
            </p>

            <div class="about-info">
                <div class="about-info-item">
                    <h5>100+</h5>
                    <h6>Saved Pets</h6>
                </div>
                <hr class="about-info-divider"/>
                <div class="about-info-item">
                    <h5>100+</h5>
                    <h6>Adoption Rate</h6>
                </div>
                <hr class="about-info-divider"/>
                <div class="about-info-item">
                    <h5>5 Star</h5>
                    <h6>Community Loved</h6>
                </div>
            </div>
            <button class="btn-3">Get Started</button>
        </div>
        <img src="img/about-img.png" alt="img">
     </div>
    <!-- About Section End -->

    <!-- services section start-->
    <section class="services">
        <h1>Our Services</h1>
        <div class="services-item">
            <div class="serv-item">
                <i class="fa-solid fa-stethoscope"></i>
                <h3>Pet doctor</h3>
                <p>Make an appoinment for your pet</p>
                <button class="srv-btn"><a href="doctor_appoinment.php">Read More</a></button>
            </div>
            <div class="serv-item">
                <i class="fa-solid fa-fish"></i>
                <h3>Pet Food</h3>
                <p>Any type of pet foods are available here.</p>
                <button class="srv-btn">Read More</button>
            </div>
            <div class="serv-item">
                <i class="fa-solid fa-fish"></i>
                <h3>Pet Food Shop</h3>
                <p>Buy your Pet Foods</p>
                <button class="srv-btn"><a href="pet_food_select.php">Read More</a></button>
            </div>
        </div>
        <div class="services-item">
            <div class="serv-item">
                <i class="fa-solid fa-dog"></i>
                <h3>Pet Adoption</h3>
                <p>Coustomers can adopt pets from our shop.</p>
                <button class="srv-btn">Read More</button>
            </div>
            <div class="serv-item">
                <i class="fa-solid fa-user-doctor"></i>
                <h3>Pet Inspection</h3>
                <p>Bring your pet, and get a free inspection</p>
                <button class="srv-btn">Read More</button>
            </div>
            <div class="serv-item">
                <i class="fa-sharp fa-solid fa-headset"></i>
                <h3>24/7 Support</h3>
                <p>Faceing any problems? Just call us.</p>
                <button class="srv-btn"><a href="contact.php">Contact Us</a></button>
            </div>
        </div>

    </section>
    <!-- services section end-->

    <!-- Review Section Start -->
     <div class="testimonials" id="stories">
        <h6>Our Reviews</h6>
        <h1>What People Say</h1>

        <div class="testimony-container">
            <!-- 1st Person -->
            <div class="testimony-item">
                <div class="testimony-people">
                    <div class="testimony-name">
                        <img src="img/testimony-image-1.png" alt="img">
                        <div class="testimony-name-item">
                            <h4>Rakibul Hasan</h4>
                            <p>Owner</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-quote-right"></i>
                </div>
                <p class="testimony-text">
                    Pew Adoption made our adoption journey smooth and heartwarming — everything was clear, supportive, and deeply human. We found our forever family thanks to their compassionate platform.
                </p>
            </div>
            <!-- Second Person Review -->
             <div class="testimony-item">
                <div class="testimony-people">
                    <div class="testimony-name">
                        <img src="img/testimony-image-1.png" alt="img">
                        <div class="testimony-name-item">
                            <h4>Ashikur Rahman</h4>
                            <p>Owner</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-quote-right"></i>
                </div>
                <p class="testimony-text">
                    Pew Adoption made our adoption journey smooth and heartwarming — everything was clear, supportive, and deeply human. We found our forever family thanks to their compassionate platform.
                </p>
            </div>

            <!-- Thired Person -->
             <div class="testimony-item">
                <div class="testimony-people">
                    <div class="testimony-name">
                        <img src="img/testimony-image-1.png" alt="img">
                        <div class="testimony-name-item">
                            <h4>Mr. Al Hasib</h4>
                            <p>Owner</p>
                        </div>
                    </div>
                    <i class="fa-solid fa-quote-right"></i>
                </div>
                <p class="testimony-text">
                    Pew Adoption made our adoption journey smooth and heartwarming — everything was clear, supportive, and deeply human. We found our forever family thanks to their compassionate platform.
                </p>
            </div>

        </div>
     </div>
    <!-- Review Section End -->

    <!-- Footer Section Start -->
     <footer id="footer">
        <div class="footer-container">
            <div class="fotter-links">
                <h2>Quick links</h2>
                <div class="link-container">
                    <div class="links">
                        <a href="/">Home</a>
                        <a href="index.php#about">About</a>
                        <a href="index.php#pets">Pets</a>
                    </div>
                    <div class="links">
                        <a href="index.php#requirements">Requirements</a>
                        <a href="index.php#stories">Stories</a>
                        <a href="index.php#Footer">Contact us</a>
                    </div>
                </div>
            </div>
            <div class="footer-brand">
                <h1>Purr<b class="accent">fect</b></h1>
                <p>Find Your Purrfect Pet Soul Todey!</p>
                <div class="socials">
                    <a href="/"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="/"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="/"><i class="fa-brands fa-twitter"></i></a>
                    <a href="/"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
            <div class="footer-contact-info">
                <div class="contact-info-item">
                    <i class="fa-regular fa-envelope"></i>
                    <p>purrfect@gmail.com</p>
                </div>
                 <div class="contact-info-item">
                    <i class="fa-solid fa-phone"></i>
                    <p>01878314947</p>
                </div>
            </div>
        </div>
        <p class="copyright">All Rights Reserved to <b>Purrfact</b></p>

     </footer>

    <!-- Footer Section End -->
</body>
</html>