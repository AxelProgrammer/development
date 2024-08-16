<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form #00001</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-wrapper">
        <form action="#">
            <h2>Login</h2>
            <div class="input-field">
                <input type="text" required>
                <label>Enter your email</label>
            </div>
            <div class="input-field">
                <input type="password" required>
                <label>Enter your password</label>
            </div>
            <div class="password-options">
                <label for="rememver">
                    <input type="checkbox" id="remember">
                    <p>Remember me</p>
                </label>
                <a href="#">Forgot password</a>
            </div>
            <button type="submit">Log in</button>
            <div class="account-options">
                <p>Don't have an account?
                    <a href="#">Register</a>
                </p>
            </div>
        </form>
    </div>
    <script>
        document.querySelector('form').addEventListener('submit', function(event) {
            const inputField = document.querySelector('.input-field input');
            const emailValue = inputField.value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 

            if (!emailPattern.test(emailValue)) {
                alert('Пожалуйста, введите корректный адрес электронной почты.');
                event.preventDefault(); 
            }
        });
    </script>S
</body>

</html>