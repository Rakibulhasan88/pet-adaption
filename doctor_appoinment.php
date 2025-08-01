<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Purrfect Pet Doctor Appointment</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: #fffefb;
      color: #222;
      line-height: 1.6;
    }

    nav {
      background: white;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #eee;
    }

    .logo {
      font-size: 26px;
      font-weight: bold;
    }

    .logo span {
      color: orange;
    }

    .nav-links {
      display: flex;
      gap: 20px;
      font-size: 16px;
    }

    .nav-links a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
    }

    .nav-links a:last-child {
      font-weight: bold;
      color: black;
    }

    .hero {
      text-align: center;
      padding: 50px 20px;
    }

    .cards {
      display: flex;
      justify-content: center;
      gap: 30px;
      flex-wrap: wrap;
      margin-bottom: 30px;
    }

    .card {
      width: 220px;
      background: white;
      border-radius: 20px;
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      text-align: center;
      transition: 0.4s ease;
      position: relative;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 18px 28px rgba(0, 0, 0, 0.15);
    }

    .img-wrapper {
      width: 100%;
      height: 220px;
      overflow: hidden;
      border-top-left-radius: 20px;
      border-top-right-radius: 20px;
      position: relative;
    }

    .pet-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: 0.4s ease;
      border-radius: 0;
    }

    .card:hover .pet-img {
      transform: scale(1.05);
      filter: brightness(1.1);
    }

    .card h3 {
      padding: 16px 0;
      font-size: 18px;
      background: linear-gradient(to right, orange, #ffab40);
      color: white;
      margin: 0;
      border-bottom-left-radius: 20px;
      border-bottom-right-radius: 20px;
    }

    .button {
      display: inline-block;
      margin-top: 20px;
      background: black;
      color: white;
      padding: 14px 28px;
      border-radius: 8px;
      font-size: 16px;
      text-decoration: none;
      transition: 0.3s;
    }

    .button:hover {
      background: orange;
      color: white;
    }

    .form-section {
      max-width: 600px;
      margin: 60px auto;
      padding: 30px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 0 12px rgba(0,0,0,0.1);
    }

    .form-section h2 {
      text-align: center;
      color: orange;
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: 600;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    .submit-btn {
      background: orange;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 8px;
      margin-top: 25px;
      width: 100%;
      font-size: 18px;
      cursor: pointer;
    }

    .token-box {
      max-width: 600px;
      margin: 30px auto;
      padding: 20px;
      background: #e8f5e9;
      color: #2e7d32;
      border: 1px dashed #66bb6a;
      border-radius: 10px;
      font-size: 18px;
      display: none;
    }

    .faq {
      padding: 60px 20px;
      background: #fff8ed;
    }

    .faq h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #e65100;
    }

    .faq-item {
      max-width: 700px;
      margin: 0 auto 20px auto;
      border-bottom: 1px solid #ccc;
      padding-bottom: 15px;
    }

    .faq-item h4 {
      font-size: 18px;
      color: #333;
    }

    .faq-item p {
      margin-top: 6px;
      color: #555;
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

    @media (max-width: 768px) {
      .cards {
        flex-direction: column;
        align-items: center;
      }

      .nav-links {
        flex-direction: column;
        gap: 10px;
      }
    }
  </style>
</head>
<body>

<nav>
  <div class="logo">Purr<span>fect</span></div>
  <div class="nav-links">
    <a href="#">Home</a>
    <a href="#appointment">Appointment</a>
    <a href="#faq">FAQ</a>
    <a href="#">Stories</a>
    <a href="#">Contact Us</a>
  </div>
</nav>

<section class="hero">
  <div class="cards">
    <div class="card">
      <div class="img-wrapper">
        <img class="pet-img" src="img/rakib.jpg" alt="Sir Woofs">
      </div>
      <h3>Sir Woofs</h3>
    </div>
    <div class="card">
      <div class="img-wrapper">
        <img class="pet-img" src="img/d_tota.jpg" alt="Captain Squawks">
      </div>
      <h3>Captain Squawks</h3>
    </div>
    <div class="card">
      <div class="img-wrapper">
        <img class="pet-img" src="img/d_cat.jpg" alt="Professor Meow">
      </div>
      <h3>Professor Meow</h3>
    </div>
  </div>
  <a href="#appointment" class="button">Book Doctor Appointment </a>
</section>

<section id="appointment" class="form-section">
  <h2>Book Appointment</h2>
  <form id="appointmentForm">
    <label>Pet Name</label>
    <input type="text" required />

    <label>Pet Type</label>
    <select required>
      <option value="">-- Choose --</option>
      <option>Dog</option>
      <option>Cat</option>
      <option>Bird</option>
      <option>Other</option>
    </select>

    <label>Symptoms</label>
    <textarea rows="4" required></textarea>

    <label>Hospital</label>
    <select id="hospitalSelect" required onchange="updateDoctors()">
      <option value="">-- Select Hospital --</option>
      <option value="Dhaka Pet Hospital">Dhaka Pet Hospital</option>
      <option value="Chattogram Animal Care">Chattogram Animal Care</option>
      <option value="Rajshahi Vet Center">Rajshahi Vet Center</option>
      <option value="Sylhet Animal Clinic">Sylhet Animal Clinic</option>
    </select>

    <label>Available Doctor</label>
    <select id="doctorSelect" required>
      <option value="">-- Select Doctor --</option>
    </select>

    <label>Preferred Date</label>
    <input type="date" required />

    <label>Preferred Time</label>
    <input type="time" required />

    <button class="submit-btn" type="submit">Submit Appointment</button>
  </form>
  <div id="tokenBox" class="token-box"></div>
</section>

<section id="faq" class="faq">
  <h2>Frequently Asked Questions</h2>
  <div class="faq-item">
    <h4>How do I know if my pet needs to see a doctor?</h4>
    <p>If your pet shows signs like vomiting, limping, not eating, or unusual behavior, book an appointment immediately.</p>
  </div>
  <div class="faq-item">
    <h4>Are walk-ins allowed?</h4>
    <p>We recommend booking in advance to avoid waiting. Emergency walk-ins are accepted based on availability.</p>
  </div>
  <div class="faq-item">
    <h4>Can I cancel or reschedule an appointment?</h4>
    <p>Yes, just call our helpline at least 24 hours before your scheduled time.</p>
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
        <p class="copyright">All Rights Reserved to <b>Purrfact</b></p>

     </footer>

    <!-- Footer Section End -->

<script>
  const hospitalDoctorMap = {
    "Dhaka Pet Hospital": ["Dr. Al Hasib", "Dr. Rakib Hasan"],
    "Chattogram Animal Care": ["Dr. Ashikur Rahman", "Dr. Rakib Hasan"],
    "Rajshahi Vet Center": ["Dr. Al Hasib"],
    "Sylhet Animal Clinic": ["Dr. Ashikur Rahman"]
  };

  function updateDoctors() {
    const hospital = document.getElementById('hospitalSelect').value;
    const doctorSelect = document.getElementById('doctorSelect');
    doctorSelect.innerHTML = '<option value="">-- Select Doctor --</option>';

    if (hospital && hospitalDoctorMap[hospital]) {
      hospitalDoctorMap[hospital].forEach(doctor => {
        const option = document.createElement('option');
        option.value = doctor;
        option.textContent = doctor;
        doctorSelect.appendChild(option);
      });
    }
  }

  document.getElementById('appointmentForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const token = 'APT-' + Math.floor(100000 + Math.random() * 900000);
    const box = document.getElementById('tokenBox');
    box.innerHTML = `✅ Appointment Confirmed!<br>Your Token: <strong>${token}</strong>`;
    box.style.display = 'block';
    this.reset();
    document.getElementById('doctorSelect').innerHTML = '<option value="">-- Select Doctor --</option>';
  });
</script>

</body>
</html>
