<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Pet Adoption - Cats</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: #ff6f00;
            padding: 30px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #ddd;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            color: white;
        }

        .logo span {
            color: #fff;
        }

        .container {
            width: 95%;
            margin: 0 auto;
        }

        .pet-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 columns for more space */
            gap: 30px;
            margin-top: 40px;
        }

        .pet-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            height: 350px;
        }

        .pet-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.15);
        }

        .pet-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .pet-card h3 {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            margin: 10px 0;
        }

        .button {
            background-color: #ff6f00;
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 12px;
            text-decoration: none;
            margin-top: 15px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #e65100;
        }

        .apply-button {
            background-color: #4caf50;
            font-size: 14px;
            margin-top: 10px;
        }

        .apply-button:hover {
            background-color: #388e3c;
        }

        footer {
            text-align: center;
            padding: 25px;
            background: #222;
            color: white;
            font-size: 14px;
            margin-top: 40px;
        }

        /* Modal to display pet details */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            width: 80%;
            max-width: 600px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Adjust grid for smaller screens */
        @media (max-width: 1200px) {
            .pet-cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .pet-cards {
                grid-template-columns: repeat(1, 1fr);
            }

            .pet-card {
                padding: 15px;
            }

            footer {
                padding: 15px;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">Purr<span>fect</span></div>
    </header>

    <div class="container">
        <h1 style="text-align: center; margin-top: 50px;">Adopt a Cat Today!</h1>

        <div class="pet-cards">
            <!-- 10 Cat Cards -->
            <div class="pet-card" onclick="openModal('Sir Meow', 'Cat', '2 years', 'John Doe', 'Sir Meow is a friendly cat who loves to be pampered and enjoys napping.')">
                <img src="cat_image/cat_12.jpg" alt="Sir Meow">
                <h3>Sir Meow</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Whiskers', 'Cat', '3 years', 'Jane Doe', 'Whiskers is an affectionate cat that loves playing with string and enjoys sunny windowsills.')">
                <img src="cat_image/cat_13.jpg" alt="Whiskers">
                <h3>Whiskers</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Shadow', 'Cat', '4 years', 'Mike Smith', 'Shadow is a mysterious and calm cat, always found lounging by the window.')">
                <img src="cat_image/cat_11.jpg" alt="Shadow">
                <h3>Shadow</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Luna', 'Cat', '1 year', 'Sarah Green', 'Luna is a playful kitten, loves chasing laser lights and is very energetic.')">
                <img src="cat_image/cat_15.jpg" alt="Luna">
                <h3>Luna</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Mittens', 'Cat', '2 years', 'Anna Lee', 'Mittens loves cuddling and sitting on laps. She enjoys being brushed and pampered.')">
                <img src="cat_image/cat_10.jpg" alt="Mittens">
                <h3>Mittens</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Bella', 'Cat', '3 years', 'Kevin Brown', 'Bella is a curious cat who loves to explore new places and enjoys playing with toys.')">
                <img src="cat_image/cat_14.jpg" alt="Bella">
                <h3>Bella</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Cleo', 'Cat', '5 years', 'Rachel Adams', 'Cleo is an independent cat who enjoys relaxing on her own and watching birds outside.')">
                <img src="cat_image/cat_16jpg" alt="Cleo">
                <h3>Cleo</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Toby', 'Cat', '4 years', 'Emma White', 'Toby is a playful cat who loves chasing balls and is very friendly towards other animals.')">
                <img src="cat_image/cat_8.jpeg" alt="Toby">
                <h3>Toby</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Oscar', 'Cat', '2 years', 'Paul Green', 'Oscar loves attention and enjoys being the center of the room. He loves to talk to people.')">
                <img src="cat_image/cat_9.jpg" alt="Oscar">
                <h3>Oscar</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

        </div>
    </div>

    <!-- Modal for Pet Details -->
    <div id="petModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="petName"></h2>
            <p><strong>Type:</strong> <span id="petType"></span></p>
            <p><strong>Age:</strong> <span id="petAge"></span></p>
            <p><strong>Previous Owner:</strong> <span id="petOwner"></span></p>
            <p><strong>Details:</strong> <span id="petDetails"></span></p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Purrfect Pet Adoption. All Rights Reserved.</p>
    </footer>

    <script>
        // Function to open the modal and display pet details
        function openModal(name, type, age, owner, details) {
            document.getElementById('petName').innerText = name;
            document.getElementById('petType').innerText = type;
            document.getElementById('petAge').innerText = age;
            document.getElementById('petOwner').innerText = owner;
            document.getElementById('petDetails').innerText = details;
            document.getElementById('petModal').style.display = 'flex';
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById('petModal').style.display = 'none';
        }
    </script>

</body>

</html>
