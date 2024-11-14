<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Shoeringan</title>
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
            justify-content: flex-start;
            padding: 30px;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            width: 100%;
            max-width: 800px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            animation: fadeIn 1s ease;
        }

        h1 {
            font-size: 2.5em;
            color: #00796b;
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 1.8em;
            color: #00796b;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 10px;
        }

        .alert {
            font-size: 1.1em;
            color: #d32f2f;
            font-weight: bold;
            margin: 10px 0;
        }

        .success {
            color: #388e3c;
            font-weight: bold;
        }

        .item {
            padding: 15px;
            background-color: #f9fbe7;
            border-radius: 5px;
            margin-bottom: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
            animation: fadeIn 1.5s ease;
        }

        .item h3 {
            font-size: 1.6em;
            margin-bottom: 10px;
        }

        .item p {
            font-size: 1.1em;
            margin-bottom: 10px;
        }

        .item form button {
            padding: 8px 15px;
            background-color: #04a693;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        .item form button:hover {
            background-color: #004d40;
        }

        .out-of-stock {
            color: red;
            font-weight: bold;
        }

        .profile-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-section img {
            border-radius: 50%;
            margin-top: 10px;
        }

        .profile-section button {
            padding: 12px 25px;
            background-color: #00796b;
            color: #ffffff;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .profile-section button:hover {
            background-color: #004d40;
        }

        /* Buttons for Check Cart, Pay Now, Logout */
        .action-button {
            padding: 12px 25px;
            background-color: #ff7043;
            color: #ffffff;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 15px;
        }

        .action-button:hover {
            background-color: #bb2c00;
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
        <h1>Welcome to Shoeringan, {{ $user->name }}</h1>

        <!-- Display Success Message -->
        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <!-- Display Error Message -->
        @if(session('error'))
            <p class="alert">{{ session('error') }}</p>
        @endif

        <!-- Profile Section -->
        <div class="profile-section">
            @if($user->profile_photo_path)
                <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="Profile Photo" width="100">
            @else
                <p>No profile photo set.</p>
            @endif
            <br>
            <a href="{{ route('profile.edit') }}">
                <button class="action-button">Edit Profile</button>
            </a>
        </div>

        <!-- Add Check Cart button -->
        <a href="{{ route('cart.index') }}">
            <button class="action-button">Check Cart</button>
        </a>
        <hr>

        <!-- Display Available Items to Add to Cart -->
        @foreach($items as $item)
            <div class="item">
                <h3>{{ $item->name }}</h3>
                <p>{{ $item->description }}</p>
                <p>${{ $item->price }}</p>
                <p>Stock: {{ $item->quantity }}</p>
                @if($item->quantity > 0)
                    <form action="{{ route('cart.add', $item) }}" method="POST">
                        @csrf
                        <button type="submit">Add to Cart</button>
                    </form>
                @else
                    <p class="out-of-stock">Out of Stock</p>
                @endif
            </div>
        @endforeach

        <!-- Payment Button (Only display if the cart is not empty) -->
        @if(count($cartItems) > 0)
            <form action="{{ route('cart.pay') }}" method="POST">
                @csrf
                <button type="submit" class="action-button">Pay Now</button>
            </form>
        @else
            <p>Your cart is empty. Add some items before proceeding to checkout.</p>
        @endif
        <br><br>

        <!-- Logout Form -->
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="action-button">Logout</button>
        </form>
    </div>
</body>
</html>