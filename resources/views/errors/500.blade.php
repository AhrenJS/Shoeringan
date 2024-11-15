<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - Server Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
            color: #333;
            text-align: center;
        }
        img {
            width: 50%;
            height: auto;
        }
        h1 {
            font-size: 5rem;
            margin: 0;
            color: #dc3545;
        }
        p {
            font-size: 1.5rem;
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            transition: color 0.3s;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div>
        <img src="../Shoeringan/public/images/Error.jpg" alt="Error image">
        <h1>500</h1>
        <p>Oops! Something went wrong on our end. Please try again later.</p>
        <a href="{{ url('/') }}">Go to Home</a>
    </div>
</body>
</html>