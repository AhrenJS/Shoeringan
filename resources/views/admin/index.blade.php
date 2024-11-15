<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* General reset and styling */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            padding: 30px;
        }

        h1 {
            color: #00796b;
            margin-bottom: 20px;
            font-size: 2.5em;
            text-align: center;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Logout Button Styling */
        .logout-form {
            text-align: right;
            margin-bottom: 20px;
        }

        .logout-form button {
            padding: 12px 20px;
            background-color: #f44336;
            color: white;
            border: none;
            font-size: 1.1em;
            cursor: pointer;
            border-radius: 5px;
        }

        .logout-form button:hover {
            background-color: #e53935;
        }

        /* Action Buttons */
        .action-btns {
            margin-bottom: 30px;
            text-align: center;
        }

        .action-btns a {
            display: inline-block;
            padding: 12px 25px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            font-size: 1.1em;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .action-btns a:hover {
            background-color: #218838;
        }

        /* Success Message */
        .success-message {
            color: green;
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.2em;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #00796b;
        }

        td {
            background-color: #ffffff;
        }

        /* Action Links Styling */
        .edit-link, .delete-btn {
            padding: 6px 12px;
            color: #ffffff;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin: 5px;
            transition: background-color 0.3s;
        }

        .edit-link {
            background-color: #ffc107;
        }

        .edit-link:hover {
            background-color: #e0a800;
        }

        .delete-btn {
            background-color: #dc3545;
            border: none;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        /* Hover Effect */
        tbody tr:hover {
            background-color: #f9f9f9;
        }

        /* Image Styling */
        .item-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Admin Dashboard</h1>

        <!-- Logout button -->
        <div class="logout-form">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>

        <!-- Add New Item Button -->
        <div class="action-btns">
            <a href="{{ route('admin.create') }}">Add New Item</a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <!-- Items Table -->
        <table>
            <thead>
                <tr>
                    <th>Image</th> <!-- New column for Image -->
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>
                            @if($item->image_path)
                                <img src="{{ asset('storage/' . $item->image_path) }}" alt="{{ $item->name }}" class="item-image">
                            @else
                                <p>No Image</p>
                            @endif
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>${{ number_format($item->price, 2) }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>
                            <!-- Edit Item Link -->
                            <a href="{{ route('admin.edit', $item) }}" class="edit-link">Edit</a>

                            <!-- Delete Item Form -->
                            <form action="{{ route('admin.destroy', $item) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="delete-btn">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>