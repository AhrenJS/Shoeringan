<!-- resources/views/admin/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <!-- Add any CSS frameworks here, such as Bootstrap, for styling if needed -->
</head>
<body>
    <h1>Edit Item</h1>
    
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

    <!-- Edit Item Form -->
    <form action="{{ route('admin.update', $item->id) }}" method="POST" style="max-width: 400px;">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 15px;">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $item->name) }}" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4" style="width: 100%; padding: 8px; margin-top: 5px;">{{ old('description', $item->description) }}</textarea>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="price">Price ($)</label>
            <input type="number" name="price" id="price" value="{{ old('price', $item->price) }}" step="0.01" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $item->quantity) }}" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>

        <button type="submit" style="padding: 10px 15px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer;">Update Item</button>
    </form>
</body>
</html>