<!-- resources/views/admin/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Item</title>
    <!-- Add any CSS frameworks here, such as Bootstrap, for styling if needed -->
</head>
<body>
    <h1>Add New Item</h1>
    
    <!-- Back to Admin Dashboard Link -->
    <a href="{{ route('admin.index') }}" style="display: inline-block; margin-bottom: 20px; padding: 10px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">Back to Dashboard</a>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Add Item Form -->
    <form action="{{ route('admin.store') }}" method="POST" style="max-width: 400px;">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4" style="width: 100%; padding: 8px; margin-top: 5px;"></textarea>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="price">Price ($)</label>
            <input type="number" name="price" id="price" step="0.01" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>

        <button type="submit" style="padding: 10px 15px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">Add Item</button>
    </form>
</body>
</html>