<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css" />
    <!-- link To JS -->
    <script src="pet.js" defer></script>
    <!-- For Scroll Reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Swiper CSS --> 
    

    <title>Document</title>
</head>
<body>
    <!-- Navber section Start -->
    <nav>
        <a href="index.html" class="brend">
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
     <!-- Contact section start -->
    <section class="contact">
        <h1>Contact us</h1>
        <form action="" class="comment">
            <div class="com-1">
                <input type="text" placeholder="name" class="cont">
            </div>
            <div class="com-1">
                <input type="email" placeholder="Email" class="cont">
            </div>
            <div class="com-1">
                <input type="number" placeholder="Phone number" class="cont">
            </div>
            <div class="com-4">
                <textarea placeholder="message" class="cont-1" cols="30" rows="6"></textarea>
            </div>
            <input type="submit" value="Send message" class="s-btn" id="message" onclick="openPopup()">
        </form>
    </section> 
    <div class="sms"id="sms">
        <h2>Thank You!!</h2
        <p>Your message has been send Successfully.</p>
        <button type="button" onclick="closePopup()">OK</button>
    </div>


    <!-- Contact section end -->
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



    <script src="https://kit.fontawesome.com/4def3c32ad.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="pet.js"></script>
</body>
</html>