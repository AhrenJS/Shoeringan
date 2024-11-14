<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Successful</title>
    <style>
        /* General reset and styling */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1f8e9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
            padding: 30px;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            animation: fadeIn 1s ease;
        }

        h1 {
            font-size: 2.5em;
            color: #388e3c;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 30px;
        }

        .back-link {
            display: inline-block;
            padding: 12px 25px;
            background-color: #00796b;
            color: #ffffff;
            font-size: 1.1em;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .back-link:hover {
            background-color: #004d40;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Successful!</h1>
        <p>Thank you for your purchase. Your items have been successfully processed.</p>
        <a href="{{ route('home') }}" class="back-link">Go back to Home</a>
    </div>
</body>
</html>