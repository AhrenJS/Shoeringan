<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Shoeringan</title>
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
            max-width: 500px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1.5s ease;
        }

        h1 {
            font-size: 2.5em;
            color: #00796b;
            margin-bottom: 20px;
            animation: slideDown 1s ease;
        }

        p, .alert {
            font-size: 1em;
            color: #555;
            margin-bottom: 15px;
            animation: fadeIn 1.5s ease;
        }

        .alert {
            color: #d32f2f;
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            margin-top: 20px;
        }

        input[type="text"], input[type="email"] {
            padding: 10px;
            width: 80%;
            max-width: 400px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, input[type="email"]:focus {
            border-color: #00796b;
        }

        button {
            padding: 12px 25px;
            background-color: #00796b;
            color: #ffffff;
            font-size: 1em;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #004d40;
        }

        .login-link {
            margin-top: 15px;
            font-size: 0.9em;
        }

        .login-link a {
            color: #00796b;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Register</h1>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit">Register</button>
        </form>

        <div class="login-link">
            <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
        </div>

        @if($errors->any())
            <div class="alert">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>