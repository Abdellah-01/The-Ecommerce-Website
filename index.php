<?php
require'admin/dbcon.php';
$database=mysqli_query($con, "select * from preference_settings WHERE `sno`='1'");
$preference=mysqli_fetch_array($database);


if ($preference['status']=="Active") {
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background-color: #111;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .container {
            text-align: center;
            max-width: 500px;
            padding: 20px;
            width: 100%;
        }

        h1 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: 400;
            letter-spacing: 1px;
        }

        .container p {
            margin-bottom: 30px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            width: 100%;
            max-width: 350px;
            margin-left: auto;
            margin-right: auto;
        }

        .email-input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #28282b;
            font-size: 0.9rem;
            outline: none;
            background-color: #111;
            color: #fff;
            margin-bottom: 10px;
        }

        .email-input:focus {
            border-color: #fff;
        }

        /* Label effect for focused input */
        .input-container {
            position: relative;
            margin-bottom: 10px;
        }

        .email-input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #28282b;
            font-size: 0.9rem;
            outline: none;
            background-color: #111;
            color: #fff;
        }

        .floating-label {
            position: absolute;
            top: 12px;
            left: 15px;
            color: #aaa;
            font-size: 0.9rem;
            pointer-events: none;
            transition: all 0.2s ease;
            background-color: #111;
            padding: 0 5px;
        }

        .email-input:focus+.floating-label,
        .email-input:not(:placeholder-shown)+.floating-label {
            top: -10px;
            left: 10px;
            font-size: 0.7rem;
            color: #fff;
        }

        .notify-btn {
            width: 100%;
            padding: 12px;
            background-color: #fff;
            color: #111;
            border: none;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .notify-btn:hover {
            background-color: #ddd;
        }

        .password-link {
            color: #aaa;
            text-decoration: underline;
            cursor: pointer;
            font-size: 0.9rem;
            display: inline-block;
            margin-top: 10px;
        }

        .password-link:hover {
            color: #fff;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 450px;
            height: 100%;
            background-color: #fff;
            /* Changed to white */
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.3);
            z-index: 100;
            transform: translateX(100%);
            transition: transform 0.3s ease-out;
            color: #111;
            /* Text color changed for white background */
        }

        .modal.active {
            transform: translateX(0);
        }

        .modal-content {
            padding: 30px;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .modal-header h2 {
            font-size: 1.2rem;
            color: #111;
            /* Changed for white background */
            font-weight: 400;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #555;
            /* Changed for white background */
        }

        .password-input {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            /* Changed for white background */
            font-size: 0.9rem;
            background-color: #fff;
            color: #111;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #111;
            /* Changed to dark for white background */
            color: #fff;
            /* Changed to white for dark button */
            border: none;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #333;
            /* Darker hover for button */
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 99;
        }

        .overlay.active {
            display: block;
        }

        /* Password input with floating label */
        .password-input-container {
            position: relative;
            margin-bottom: 20px;
        }

        .password-input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            font-size: 0.9rem;
            outline: none;
            background-color: #fff;
            color: #111;
        }

        .password-floating-label {
            position: absolute;
            top: 12px;
            left: 15px;
            color: #777;
            font-size: 0.9rem;
            pointer-events: none;
            transition: all 0.2s ease;
            background-color: #fff;
            padding: 0 5px;
        }

        .password-input:focus+.password-floating-label,
        .password-input:not(:placeholder-shown)+.password-floating-label {
            top: -10px;
            left: 10px;
            font-size: 0.7rem;
            color: #111;
        }

        /* Mobile styles */
        @media (max-width: 768px) {
            .modal {
                width: 100%;
                right: auto;
                bottom: 0;
                top: auto;
                height: auto;
                max-height: 80vh;
                transform: translateY(100%);
            }

            .modal.active {
                transform: translateY(0);
            }

            .container {
                padding: 20px 15px;
            }

            h1 {
                font-size: 1.5rem;
            }
        }

        .logo {
            margin: 0 auto 20px auto;
            max-width: 150px;
            height: auto;
            position: absolute;
            top: 100px;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="../images/logo/Logo-White.png" alt="Logo" class="logo">

        <h1>Opening soon</h1>
        <p>Exciting Changes Coming Soon!</p>

        <div class="input-group">
            <div class="input-container">
                <input type="email" class="email-input" id="emailInput" placeholder=" ">
                <label for="emailInput" class="floating-label">Your e-mail</label>
            </div>
            <button class="notify-btn">NOTIFY ME</button>
        </div>

        <a class="password-link" id="passwordLink">Enter using password</a>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="modal" id="passwordModal">
        <div class="modal-content">
            <form action="validation.php" method="POST">
            <div class="modal-header">
                <h2>Enter Password</h2>
                <button class="close-btn" id="closeModal">&times;</button>
            </div>
            <div class="password-input-container">
                <input type="password" class="password-input" id="passwordInput" name="password" placeholder=" ">
                <label for="passwordInput" class="password-floating-label">Password</label>
            </div>
            <button class="submit-btn">SUBMIT</button>
        </div></form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordLink = document.getElementById('passwordLink');
            const passwordModal = document.getElementById('passwordModal');
            const overlay = document.getElementById('overlay');
            const closeModal = document.getElementById('closeModal');

            passwordLink.addEventListener('click', function () {
                passwordModal.style.display = 'block';
                overlay.classList.add('active');
                setTimeout(() => {
                    passwordModal.classList.add('active');
                }, 10);
            });

            closeModal.addEventListener('click', function () {
                passwordModal.classList.remove('active');
                overlay.classList.remove('active');
                setTimeout(() => {
                    passwordModal.style.display = 'none';
                }, 300);
            });

            overlay.addEventListener('click', function () {
                passwordModal.classList.remove('active');
                overlay.classList.remove('active');
                setTimeout(() => {
                    passwordModal.style.display = 'none';
                }, 300);
            });

            // Add focus effect for email input
            const emailInput = document.getElementById('emailInput');
            emailInput.addEventListener('focus', function () {
                this.parentNode.querySelector('.floating-label').classList.add('focused');
            });

            emailInput.addEventListener('blur', function () {
                if (!this.value) {
                    this.parentNode.querySelector('.floating-label').classList.remove('focused');
                }
            });

            // Add focus effect for password input
            const passwordInput = document.getElementById('passwordInput');
            passwordInput.addEventListener('focus', function () {
                this.parentNode.querySelector('.password-floating-label').classList.add('focused');
            });

            passwordInput.addEventListener('blur', function () {
                if (!this.value) {
                    this.parentNode.querySelector('.password-floating-label').classList.remove('focused');
                }
            });
        });
    </script>
</body>

</html>
<?php
} else {
 ?>
 <script>
        location.replace("website/index.php");
      </script>
<?php
}

?>