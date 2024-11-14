<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Shoeringan</title>
</head>
<body>
    <h1>Welcome to Shoeringan, {{ $user->name }}</h1>

    <!-- Display Success Message -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <!-- Display Error Message -->
    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <!-- Profile Section -->
    <h2>Your Profile</h2>
    <p>Name: {{ $user->name }}</p>
    @if($user->profile_photo_path)
        <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="Profile Photo" width="100">
    @else
        <p>No profile photo set.</p>
    @endif

    <a href="{{ route('profile.edit') }}">
        <button>Edit Profile</button>
    </a>
    <br><br>

    <!-- Add Check Cart button -->
    <a href="{{ route('cart.index') }}">
        <button>Check Cart</button>
    </a>

    <br><br>

    <!-- Display Available Items to Add to Cart -->
    @foreach($items as $item)
        <div>
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
                <p style="color: red;">Out of Stock</p>
            @endif
        </div>
        <hr>
    @endforeach

    <!-- Payment Button (Only display if the cart is not empty) -->
    @if(count($cartItems) > 0)
        <form action="{{ route('cart.pay') }}" method="POST">
            @csrf
            <button type="submit">Pay Now</button>
        </form>
    @else
        <p>Your cart is empty. Add some items before proceeding to checkout.</p>
    @endif
    <br><br>

    <!-- Logout Form -->
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

</body>
</html>