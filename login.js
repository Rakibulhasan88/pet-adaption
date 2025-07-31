

// Form validation for login

document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".login-form-container form");
    const emailInput = document.getElementById("log-email");
    const passwordInput = document.getElementById("log-password");

    form.addEventListener("submit", function (e) {
        let valid = true;
        let messages = [];

        // Email validation
        const emailValue = emailInput.value.trim();
        if (emailValue === "") {
            valid = false;
            messages.push("Email is required.");
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailValue)) {
            valid = false;
            messages.push("Please enter a valid email address.");
        }

        // Password validation
        const passwordValue = passwordInput.value.trim();
        if (passwordValue === "") {
            valid = false;
            messages.push("Password is required.");
        } else if (passwordValue.length < 8) {
            valid = false;
            messages.push("Password must be at least 8 characters.");
        }

        if (!valid) {
            e.preventDefault();
            alert(messages.join("\n"));
        }
    });
});