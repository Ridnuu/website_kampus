<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #0a2942;
            font-family: Arial, sans-serif;
            color: #ffc857;
        }

        .login-container {
            background-color: transparent;
            padding: 30px;
            border: 2px solid #ffc857;
            border-radius: 10px;
            width: 320px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 25px;
            font-size: 24px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: calc(100% - 20px); /* Kurangi padding */
            padding: 10px;
            margin: 12px 0;
            border: 2px solid #ffc857;
            border-radius: 5px;
            background-color: transparent;
            color: #ffc857;
            font-size: 16px;
            box-sizing: border-box;
        }

        .login-container input[type="text"]:focus,
        .login-container input[type="password"]:focus {
            outline: none;
            border-color: #ffb344; /* Warna border saat fokus */
        }

        .login-container input[type="button"] {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            border: none;
            border-radius: 5px;
            background-color: #ffc857;
            color: #0a2942;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .login-container input[type="button"]:hover {
            background-color: #ffb344;
            color: #ffffff;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
            transform: translateY(-2px);
        }

        .login-container input[type="button"]:active {
            background-color: #e6a335;
            transform: translateY(0);
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>LOGIN</h2>
        <form id="loginForm" method="post">
            <input type="text" id="user_id" name="user_id" placeholder="ID" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="button" value="LOGIN" onclick="handleLogin()">
        </form>
    </div>

    <script>
        function handleLogin() {
            const username = document.getElementById('user_id').value;
            const password = document.getElementById('password').value;

            if (username === 'admin' && password === 'admin1') {
                // Jika login berhasil
                window.location.href = 'index.php';
            } else {
                // Jika login gagal
                alert('ID atau Password salah!');
            }
        }
    </script>
</body>
</html>
