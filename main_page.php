<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Pet Adoption - Choose Your Pet</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ff6f00, #f8b400);
            color: #333;
            line-height: 1.6;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        header {
            background: #ff6f00;
            padding: 20px 40px;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .logo {
            font-size: 32px;
            font-weight: bold;
            color: white;
        }

        .logo span {
            color: #fff;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            padding: 20px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            text-align: center;
            z-index: 2;
        }

        h1 {
            font-size: 38px;
            margin: 20px 0;
            color: #333;
            text-transform: uppercase;
            font-weight: bold;
        }

        p {
            font-size: 18px;
            color: #555;
            margin-top: 10px;
        }

        .animal-choice {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
            z-index: 2;
            justify-items: center; /* Centers the buttons horizontally */
            align-items: center; /* Centers the buttons vertically */
        }

        .animal-btn {
            background-color: #ff6f00;
            color: white;
            padding: 15px 25px;
            font-size: 20px;
            border-radius: 15px;
            text-decoration: none;
            width: 250px;
            text-align: center;
            transition: background-color 0.4s ease, transform 0.4s ease, box-shadow 0.4s ease;
            cursor: pointer;
            position: relative;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .animal-btn:hover {
            background-color: #e65100;
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        }

        .animal-btn img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .animal-btn span {
            display: block;
            margin-top: 10px;
            font-size: 22px;
            font-weight: 600;
        }

        footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 14px;
            color: white;
        }

        /* Responsive for small screens */
        @media (max-width: 768px) {
            .animal-choice {
                grid-template-columns: 1fr;
            }

            .container {
                width: 90%;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">Purr<span>fect</span></div>
    </header>

    <div class="container">
        <h1>Welcome to Purrfect Pet Adoption!</h1>
        <p>Choose your perfect companion by clicking one of the animal types below:</p>

        <div class="animal-choice">
            <!-- Adopt a Cat -->
            <a href="index_cat.php" class="animal-btn">
                <img src="main_page_image/m_1.jpg" alt="Adopt a Cat">
                <span>Adopt a Cat</span>
            </a>

            <!-- Adopt a Dog -->
            <a href="index_dog.php" class="animal-btn">
                <img src="main_page_image/m_2.jpg" alt="Adopt a Dog">
                <span>Adopt a Dog</span>
            </a>

            <!-- Adopt a Bird -->
            <a href="index_bird.php" class="animal-btn">
                <img src="main_page_image/m_3.jpg" alt="Adopt a Bird">
                <span>Adopt a Bird</span>
            </a>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Purrfect Pet Adoption. All Rights Reserved.</p>
    </footer>

</body>

</html>
