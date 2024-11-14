<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoeringan</title>
    <style>
        /* Reset some basic styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Main styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        .container {
            text-align: center;
            max-width: 800px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1.5s ease;
        }

        h1 {
            font-size: 2.5em;
            color: #00796b;
            margin-bottom: 10px;
            animation: slideDown 1s ease;
        }

        .motto {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 30px;
            font-style: italic;
            animation: slideUp 1s ease;
        }

        .promo-image {
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
            margin-bottom: 30px;
            animation: zoomIn 1.5s ease;
        }

        .login-btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #00796b;
            color: #ffffff;
            font-size: 1.2em;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
            animation: fadeIn 2s ease;
        }

        .login-btn:hover {
            background-color: #004d40;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideDown {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes zoomIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Shoeringan</h1>
        <p class="motto">"Where only the most sigma of shoes are sold"</p>
        <!-- Promotional image -->
        <img src="../public/images/chad_tom.png" alt="Special Promotion" class="promo-image">
        <!-- Login button -->
        <a href="{{ route('login') }}" class="login-btn">Login</a>
    </div>
</body>
</html>