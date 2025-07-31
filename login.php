<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
    <!-- link To JS -->
    <script src="login.js" defer></script>
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
    <title>Login</title>
</head>
<body>
    <!-- login start -->
    <div class="login-form-container">
        <form action="">
            <h3>User login</h3>
            <input type="email" placeholder="Enter your email" class="box" id="log-email">
            <input type="password" placeholder="Enter password" class="box" id="log-password">
            <p>forget your password <a href="#">click here</a></p>
            <input type="submit" value="login now" class="btn" id="log-submit">
            <p>or login with</p>
            <div class="buttons">
                <a href="#" class="btn">google</a>
                <a href="#" class="btn">facebook</a>
            </div>
            <p>don't have an account <a href="registration.php">create one</a></p>
        </form>
    </div>
    <!-- login end -->
    <script src="https://kit.fontawesome.com/4def3c32ad.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="login.js"></script>
</body>
</html>