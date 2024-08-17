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
    <div class="wrapper">
        <div class="login">
            <form action="#">
                <h2>Login</h2>
                <div class="input-field">
                    <input type="text" required>
                    <label>Enter your email</label>
                    <span class="svg_login"></span>
                </div>
                <div class="input-field">
                    <input id="login_input_password" type="password" required>
                    <label>Enter your password</label>
                    <span class="svg_password"></span>
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
                        <a class="login-link" href="#">Register</a>
                    </p>
                </div>
            </form>
        </div>

        <div class="register">
            <form action="#">
                <h2>Registration</h2>
                <div class="input-field">
                    <input type="text" required>
                    <label>Enter your username</label>
                    <span class="svg_user"></span>
                </div>
                <div class="input-field">
                    <input type="text" required>
                    <label>Enter your email</label>
                    <span class="svg_login"></span>
                </div>
                <div class="input-field">
                    <input id="login_input_password" type="password" required>
                    <label>Enter your password</label>
                    <span class="svg_password"></span>
                </div>
                <div class="password-options">
                    <label for="rememver">
                        <input type="checkbox" id="remember">
                        <p>i agree to the terms & conditions</p>
                    </label>
                </div>
                <button type="submit">Log in</button>
                <div class="account-options">
                    <p>Already have an account?
                        <a class="register-link" href="#">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <script>
        const wrapper = document.querySelector('.wrapper');
        const login = document.querySelector('.login');
        const register = document.querySelector('.register');
        const loginLink = document.querySelector('.login-link');
        const RegisterLink = document.querySelector('.register-link');

        loginLink.addEventListener('click', () => {
            wrapper.classList.add('active');
        });

        RegisterLink.addEventListener('click', () => {
            wrapper.classList.remove('active');
        });

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