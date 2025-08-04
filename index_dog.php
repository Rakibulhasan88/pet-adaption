<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Pet Adoption - Dogs</title>
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
            grid-template-columns: repeat(3, 1fr);
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
        <h1 style="text-align: center; margin-top: 50px;">Adopt a Dog Today!</h1>

        <div class="pet-cards">
            <!-- 10 Dog Cards -->
            <div class="pet-card" onclick="openModal('Buddy', 'Dog', '3 years', 'John Doe', 'Buddy is a friendly dog who loves walks and playing with other dogs.')">
                <img src="dog_image/dog_1.jpg" alt="Buddy">
                <h3>Buddy</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="pdf.php" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Charlie', 'Dog', '2 years', 'Jane Doe', 'Charlie is a playful dog who loves fetching and is very energetic.')">
                <img src="dog_image/dog_10.jpg" alt="Charlie">
                <h3>Charlie</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="pdf.php" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Max', 'Dog', '4 years', 'Mike Smith', 'Max is a calm and loyal dog who enjoys being with his family and loves car rides.')">
                <img src="dog_image/dog_3.jpg" alt="Max">
                <h3>Max</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="pdf.php" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Bella', 'Dog', '3 years', 'Sarah Green', 'Bella loves long walks and is a gentle companion who enjoys cuddles.')">
                <img src="dog_image/dog_11.jpg" alt="Bella">
                <h3>Bella</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="pdf.php" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Rex', 'Dog', '5 years', 'Kevin Brown', 'Rex is a strong and protective dog who loves his family and enjoys playing in the yard.')">
                <img src="dog_image/dog_5.jpg" alt="Rex">
                <h3>Rex</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="pdf.php" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Luna', 'Dog', '1 year', 'Anna Lee', 'Luna is an energetic dog who loves playing fetch and running around in the park.')">
                <img src="dog_image/dog_6.jpg" alt="Luna">
                <h3>Luna</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="pdf.php" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Rocky', 'Dog', '3 years', 'Rachel Adams', 'Rocky is a playful dog that loves being active and going for runs with his owner.')">
                <img src="dog_image/dog_7.jpg" alt="Rocky">
                <h3>Rocky</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="pdf.php" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Milo', 'Dog', '2 years', 'Emma White', 'Milo is an affectionate dog who loves spending time with his humans and enjoys belly rubs.')">
                <img src="dog_image/dog_8.jpg" alt="Milo">
                <h3>Milo</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="pdf.php" class="button apply-button">Apply for Adoption</a>
            </div>

            <div class="pet-card" onclick="openModal('Zoe', 'Dog', '4 years', 'Paul Green', 'Zoe is a loyal and friendly dog who loves playing fetch and going on walks.')">
                <img src="dog_image/dog_9.jpg" alt="Zoe">
                <h3>Zoe</h3>
                <a href="javascript:void(0);" class="button">Previous Owner Report</a>
                <a href="pdf.php" class="button apply-button">Apply for Adoption</a>
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
