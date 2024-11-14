<!-- resources/views/admin/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Add any CSS frameworks here, such as Bootstrap, for styling if needed -->
</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>
    
    <!-- Logout button -->
    <form action="{{ route('logout') }}" method="POST" style="margin-bottom: 20px;">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <!-- Add New Item Button -->
    <a href="{{ route('admin.create') }}" style="display: inline-block; margin-bottom: 20px; padding: 10px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">Add New Item</a>

    <!-- Success Message -->
    @if(session('success'))
        <div style="color: green; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Items Table -->
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
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
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>
                        <!-- Edit Item Link -->
                        <a href="{{ route('admin.edit', $item) }}" style="margin-right: 10px; color: #ffc107;">Edit</a>

                        <!-- Delete Item Form -->
                        <form action="{{ route('admin.destroy', $item) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" style="background-color: #dc3545; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>