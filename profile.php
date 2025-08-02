<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Pet Adoption - Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #f0f0f0;
            color: #333;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            padding: 20px;
            flex-direction: column;
        }

        header {
            background: #ff6f00;
            padding: 20px 40px;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            text-align: center;
            margin-bottom: 40px;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            padding: 40px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            text-align: center;
            margin-top: 40px;
        }

        .profile-header {
            font-size: 36px;
            color: #333;
            font-weight: 600;
            margin-bottom: 30px;
        }

        /* Profile Image */
        .profile-img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 40px;
        }

        /* User Info Cards */
        .profile-info {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 60px;
            width: 100%;
            max-width: 1000px;
            flex-wrap: wrap;
        }

        .info-card {
            background: #ff6f00;
            color: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            width: 25%;
            min-width: 200px;
            text-align: center;
            margin-bottom: 20px;
        }

        .info-card h3 {
            font-size: 24px;
            font-weight: 600;
        }

        .info-card p {
            font-size: 16px;
            margin-top: 10px;
        }

        /* Biography Section */
        .biography {
            text-align: left;
            font-size: 18px;
            margin-top: 40px;
        }

        .biography h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* Social Media Links */
        .social-media {
            margin-top: 30px;
        }

        .social-media h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .social-media a {
            color: #ff6f00;
            font-size: 18px;
            text-decoration: none;
            margin: 5px 15px;
        }

        .social-media a:hover {
            color: #e65100;
        }

        /* Achievements Section */
        .achievements {
            margin-top: 30px;
            text-align: left;
            width: 100%;
        }

        .achievements h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .achievement-item {
            background: #4caf50;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            color: white;
        }

        /* Contact Information Section */
        .contact-info {
            margin-top: 30px;
            text-align: left;
        }

        .contact-info h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .contact-info p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        /* Adoption Details Section */
        .adoption-details {
            margin-top: 30px;
            text-align: left;
            width: 100%;
        }

        .adoption-details h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .adopted-pet {
            background: #e65100;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            color: white;
        }

        footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: white;
        }

        .button {
            background-color: #ff6f00;
            padding: 15px 30px;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #e65100;
        }

        /* Responsive for small screens */
        @media (max-width: 768px) {
            .profile-info {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .info-card {
                width: 80%;
                margin-bottom: 20px;
            }

            .container {
                width: 90%;
            }

            .biography {
                text-align: center;
            }

            .adoption-details {
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">Purr<span>fect</span></div> <!-- Removed logo -->
    </header>

    <div class="container">
        <div class="profile-header">
            Welcome to Your Profile, Cristiano Ronaldo!
        </div>

        <!-- Profile Image -->
        <img src="profile_image/Ronaldo.jpg" alt="Cristiano Ronaldo Profile Image" class="profile-img">

        <!-- Achievements Section -->
        <div class="achievements">
            <h3>Achievements</h3>
            <div class="achievement-item">
                <p>5-time Ballon d'Or winner</p>
            </div>
            <div class="achievement-item">
                <p>4-time European Golden Shoe winner</p>
            </div>
            <div class="achievement-item">
                <p>Over 700 career goals</p>
            </div>
            <div class="achievement-item">
                <p>Euro 2016 Champion with Portugal</p>
            </div>
        </div>

        <!-- User Info Section -->
        <div class="profile-info">
            <!-- Pets Adopted -->
            <div class="info-card">
                <h3>Pets Adopted</h3>
                <p>10 Pets</p>
            </div>

            <!-- Member Since -->
            <div class="info-card">
                <h3>Member Since</h3>
                <p>March 2015</p>
            </div>

            <!-- Donations -->
            <div class="info-card">
                <h3>Donations</h3>
                <p>$50,000+</p>
            </div>
        </div>

        <!-- Biography Section -->
        <div class="biography">
            <h3>Biography</h3>
            <p>Cristiano Ronaldo, a Portuguese professional footballer, widely regarded as one of the greatest footballers of all time. Ronaldo has won multiple Ballon d'Or titles and has achieved success in top leagues including La Liga, Serie A, and the Premier League. Apart from football, Ronaldo is also known for his charity work and philanthropy.</p>
        </div>

        <!-- Social Media Links -->
        <div class="social-media">
            <h3>Follow Cristiano Ronaldo</h3>
            <a href="https://www.instagram.com/cristiano/" target="_blank">Instagram</a>
            <a href="https://twitter.com/Cristiano" target="_blank">Twitter</a>
            <a href="https://www.facebook.com/Cristiano" target="_blank">Facebook</a>
        </div>

        <!-- Contact Information Section -->
        <div class="contact-info">
            <h3>Contact Information</h3>
            <p><strong>Email:</strong> cristiano@email.com</p>
            <p><strong>Phone:</strong> +1234567890</p>
        </div>

        <!-- Adoption Details Section -->
        <div class="adoption-details">
            <h3>Adoption Details</h3>
            <div class="adopted-pet">
                <h4>Fluffy - Cat</h4>
                <p>Adopted on: March 2022 | Breed: Persian | Age: 2 years</p>
            </div>
            <div class="adopted-pet">
                <h4>Buddy - Dog</h4>
                <p>Adopted on: January 2022 | Breed: Labrador | Age: 3 years</p>
            </div>
        </div>

        <!-- Edit Profile Button -->
        <a href="edit_profile.html" class="button">Edit Profile</a>
    </div>

    <footer>
        <p>&copy; 2025 Purrfect Pet Adoption. All Rights Reserved.</p>
    </footer>

</body>

</html>
