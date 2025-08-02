<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Pet Adoption - Birds</title>
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
        <h1 style="text-align: center; margin-top: 50px;">Adopt a Bird Today!</h1>

        <div class="pet-cards">
            <!-- 10 Bird Cards -->
            <div class="pet-card" onclick="openModal('Captain Squawks', 'Bird', '2 years', 'John Doe', 'Captain Squawks is a smart bird who loves to mimic sounds and play with toys.')">
                <img src="bird_image/b_10.jpg" alt="Captain Squawks">
                <h3>Captain Squawks</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Kiwi', 'Bird', '1 year', 'Jane Doe', 'Kiwi is an energetic parrot who loves flying around and interacting with people.')">
                <img src="bird_image/b_1.jpg" alt="Kiwi">
                <h3>Kiwi</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Peaches', 'Bird', '3 years', 'Mike Smith', 'Peaches is a calm and friendly bird that loves sitting on shoulders and being petted.')">
                <img src="bird_image/b_2.jpg" alt="Peaches">
                <h3>Peaches</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Blue', 'Bird', '2 years', 'Sarah Green', 'Blue is a playful and talkative bird, loves repeating words and sounds.')">
                <img src="bird_image/b_3.jpg" alt="Blue">
                <h3>Blue</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Sunny', 'Bird', '4 years', 'Kevin Brown', 'Sunny is a bright yellow parakeet who loves interacting with other birds.')">
                <img src="bird_image/b_4.png" alt="Sunny">
                <h3>Sunny</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Rio', 'Bird', '2 years', 'Anna Lee', 'Rio is a charming and affectionate bird who loves to sing in the morning.')">
                <img src="bird_image/b_5.jpg" alt="Rio">
                <h3>Rio</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Bella', 'Bird', '3 years', 'Rachel Adams', 'Bella is a social and talkative bird who loves to be the center of attention.')">
                <img src="bird_image/b_6.jpg" alt="Bella">
                <h3>Bella</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Tweety', 'Bird', '1 year', 'Emma White', 'Tweety is a friendly bird who loves chirping and playing with toys.')">
                <img src="bird_image/b_7.jpg" alt="Tweety">
                <h3>Tweety</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Tango', 'Bird', '5 years', 'Paul Green', 'Tango is a very colorful bird who loves to dance and interact with its owner.')">
                <img src="bird_image/b_8.jpg" alt="Tango">
                <h3>Tango</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="apply-for-adoption.html" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Chirpy', 'Bird', '2 years', 'Megan Johnson', 'Chirpy is a fun-loving and energetic bird who enjoys playing and mimicking sounds.')">
                <img src="bird_image/b_9.jpg" alt="Chirpy">
                <h3>Chirpy</h3>
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
