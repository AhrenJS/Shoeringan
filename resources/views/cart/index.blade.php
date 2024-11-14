<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Cart - Shoeringan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
        }

        td {
            background-color: #fafafa;
            font-size: 16px;
        }

        td button {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 8px 16px;
            margin-top: 8px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        td button:hover {
            background-color: #d32f2f;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-controls button {
            font-size: 20px;
            width: 30px;
            height: 30px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .quantity-controls button:hover {
            background-color: #e0e0e0;
        }

        .quantity-controls input {
            width: 50px;
            text-align: center;
            font-size: 18px;
            margin: 0 10px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .quantity-controls input:focus {
            outline: none;
            border-color: #4CAF50;
        }

        .cart-total {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        }

        .cart-total span {
            font-weight: bold;
        }

        .alert {
            text-align: center;
            font-size: 18px;
            color: #ff5722;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <h1>Your Shopping Cart</h1>

    @if(session('success'))
        <p class="alert" style="color: green;">{{ session('success') }}</p>
    @endif
    @if(session('error'))
        <p class="alert" style="color: red;">{{ session('error') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $cartItem)
                <tr>
                    <td>{{ $cartItem->item->name }}</td>
                    <td>${{ number_format($cartItem->item->price, 2) }}</td>
                    <td>
                        <form action="{{ route('cart.update', $cartItem->item) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="quantity-controls">
                                <button type="button" class="decrease" data-item-id="{{ $cartItem->item->id }}">-</button>
                                <input type="number" name="quantity" id="quantity-{{ $cartItem->item->id }}" value="{{ $cartItem->quantity }}" min="1" max="{{ $cartItem->item->quantity }}" required>
                                <button type="button" class="increase" data-item-id="{{ $cartItem->item->id }}">+</button>
                            </div>
                            <button type="submit" style="background-color: #4CAF50; color: white;">Update</button>
                        </form>
                    </td>
                    <td>${{ number_format($cartItem->quantity * $cartItem->item->price, 2) }}</td>
                    <td>
                        <form action="{{ route('cart.remove', $cartItem->item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="cart-total">
        <span>Total: ${{ number_format($total, 2) }}</span>
    </div>

    <a href="{{ route('home') }}">Continue Shopping</a>

    <script>
        // Increase and decrease quantity buttons
        const decreaseButtons = document.querySelectorAll('.decrease');
        const increaseButtons = document.querySelectorAll('.increase');

        decreaseButtons.forEach(button => {
            button.addEventListener('click', function () {
                const inputField = document.getElementById('quantity-' + this.dataset.itemId);
                let currentValue = parseInt(inputField.value);
                if (currentValue > 1) {
                    inputField.value = currentValue - 1;
                }
            });
        });

        increaseButtons.forEach(button => {
            button.addEventListener('click', function () {
                const inputField = document.getElementById('quantity-' + this.dataset.itemId);
                let currentValue = parseInt(inputField.value);
                const maxQuantity = parseInt(inputField.max);
                if (currentValue < maxQuantity) {
                    inputField.value = currentValue + 1;
                }
            });
        });
    </script>
</body>
</html>