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
            background: linear-gradient(135deg, #ff9a24, #f8b400);
            color: #333;
            line-height: 1.6;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        :root {
            --accent: #ff9a24;
            --black: #131313;
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
            padding: 5px 40px;
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

        .container {
            margin-top:100px ;
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
