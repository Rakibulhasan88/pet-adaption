<!DOCTYPE html>
<html>
<head>
    <title>Pet Adoption Form</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap");

        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Nunito Sans", sans-serif;
        }

        :root {
        --accent: #ff9a24;
        --black: #131313;
        }
        body {
        min-height: 100vh;
        }

        section {
        min-width: 100%;
        min-height: 100vh;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        }
        /* Navbar Section*/
        nav{
            z-index: 999;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--black);
            background-color: white;
            padding: 30px 50px;
            transition: all 0.4s ease-out;
            filter: drop-shadow(5px 5px 10px transparent);

        }
        nav.sticky{
            background-color: white;
            filter: drop-shadow(5px 5px 10px #102040);
        }
        .brand{
            text-decoration: none;
            transition: all ease-in-out 0.3s;
            color: var(--black);
        }
        .brand h1{
            font-size: 32px;
            font-weight: 900;
        }

        .accent{
            color: var(--accent);
        }
        .brand:hover{
            opacity: 0.8;
        }

        .menu{
            display:flex ;
            justify-content: center;
            align-items: center;
            gap: 42px;
        }
        .menu a{
            display: inline-block;
            position: relative;
            color: var(--black);
            text-decoration: none;
            font-size: 24px;
            font-weight: 400;
            border-radius: 32px;
            background-color: white;
            padding: 10px;
            transition: all 0.2 ease-out;
        }

        .menu a:hover{
            background-color: var(--accent);
            color: white;
        }
        .btn{
            color: white;
            font-size: 25px;
            cursor: pointer;
            display: none;
        }
        .btn-2{
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 24px;
            font-weight: 500px;
            color: var(--accent);
            transition: all  ease-in-out 0.2s;
            background-color: var(--accent);
            border: 5px solid var(--accent);
            border-radius: 5px;
            cursor: pointer;
            width: 120px;
            height: 40px;
            justify-content: center;
        }

        .btn-2 a{
            text-align: center;
            text-decoration: none;
            color: #FFFFFF;
            
        }
        .btn-2:hover{
            background-color: green;
            border: 5px solid green;
        }
        
        .form-container {
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #f0f0f0, #ffffff);
            padding: 40px 20px;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            margin-top: 100px;
        }

        form {
            background: #fff;
            padding: 40px 32px;
            border-radius: 18px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 350px;
            margin: 0 auto;
            margin-top: 2rem; ;
        }

        form h2 {
            margin-bottom: 18px;
            font-size: 28px;
            color: #ff9a24;
            font-weight: 700;
            text-align: center;
            justify-content: center;
        }

        form p {
            margin-bottom: 18px;
            color: #555;
            text-align: center;
        }

        form label {
            margin-top: 14px;
            margin-bottom: 6px;
            font-size: 16px;
            color: #333;
            align-self: flex-start;
        }

        form input, form select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
            font-size: 16px;
            transition: border 0.2s;
        }

        form input:focus, form select:focus {
            border-color: #ff9a24;
            outline: none;
        }

        form button {
            margin-top: 18px;
            padding: 12px 0;
            width: 100%;
            background: linear-gradient(90deg, #ff9a24 60%, #ff6f00 100%);
            color: #fff;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(255,154,36,0.10);
            transition: background 0.2s;
        }

        form button:hover {
            background: linear-gradient(90deg, #ff6f00 60%, #ff9a24 100%);
        }

        footer{
            background-color: #102040;
            color: white;
            padding: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px;
            overflow: hidden;
        }

        .footer-container{
            display: flex;
        }

        .footer-links{
            display: flex;
            flex-direction: column;
            border-bottom: rgba(255, 255, 255, 0.5);
            justify-content: center;
            padding: 32px 50px;
        }
        .footer-links h2{
            font-size: 24px;
            font-weight: 800;
        }

        .link-container{
            display: flex;
            gap: 67px;
        }

        .links{
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .links a{
            color: white;
            text-decoration: none;
            transition: all 0.3s ease-out;
        }

        .links a:hover{
            color: var(--accent);
        }
        .footer-brand{
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-top: none;
            padding: 32px 120px;
        }

        .footer-brand h1{
            font-size: 48px;
            font-weight: 800;
        }

        .footer-brand p{
            font-size: 24px;
        }

        .socials{
            display: flex;
            gap: 24px;
            margin-top: 14px;
        }

        .socials a{
            color: white;
            border: 1px solid white;
            border-radius: 12px;
            padding: 8px 12px;
            background-color: var(--black);
            transition: all 0.3s ease-out;
        }

        .socials a:hover{
            background-color: var(--accent);
        }

        .footer-contact-info{
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
            padding: 32px 50px;
        }

        .contact-info-item{
            display: flex;
            gap: 13px;
            align-items: center;
        }

        .contact-info-item i{
            font-size: 24px;
        }

        .contact-info-item p{
            font-size: 24px;
        }

        .copyright{
            margin-top: 20px;
        }

        /* Responsive */
        @media (max-width: 500px) {
            form {
                width: 95%;
                padding: 20px 8px;
            }
        }
    </style>
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
    <section>
        <div class="form-container">
            <h2>Pet Adoption Agreement</h2>
            <p>Please fill out the form below to adopt a pet.</p>
            <form action="save-pdf.php" method="POST">
                <label>Adopter Name:</label>
                <input type="text" name="adopter_name" required>

                <label>Pet Name:</label>
                <input type="text" name="pet_name" required>

                <label>Pet Type:</label>
                <select name="pet_type" required>
                    <option>Dog</option>
                    <option>Cat</option>
                    <option>Rabbit</option>
                    <option>Other</option>
                </select>

                <label>Adoption Date:</label>
                <input type="date" name="adoption_date" required>

                <label>Contact Email:</label>
                <input type="email" name="contact_email" required>

                <button type="submit">Submit & Generate PDF</button>
            </form>
        </div>
    </section>
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
        <p class="copyright">All Rights Reserved to <b>Pawsitive</b></p>

     </footer>

    <!-- Footer Section End -->

</body>
</html>
