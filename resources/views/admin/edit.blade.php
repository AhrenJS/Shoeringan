<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
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
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Back to Dashboard Button */
        .back-btn {
            display: inline-block;
            padding: 12px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 30px;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }

        /* Form Styling */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-size: 1.1em;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        input:focus, textarea:focus {
            border-color: #00796b;
            outline: none;
        }

        textarea {
            resize: vertical;
        }

        /* Validation Error Styling */
        .error-message {
            color: red;
            margin-bottom: 20px;
            font-size: 1.1em;
        }

        .success-message {
            color: green;
            margin-bottom: 20px;
            font-size: 1.2em;
        }

        /* Submit Button Styling */
        .submit-btn {
            padding: 12px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Item</h1>

        <!-- Back to Admin Dashboard Link -->
        <a href="{{ route('admin.index') }}" class="back-btn">Back to Dashboard</a>

        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Edit Item Form -->
        <form action="{{ route('admin.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $item->name) }}" required>
            </div>

            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="4">{{ old('description', $item->description) }}</textarea>
            </div>

            <div>
                <label for="price">Price ($)</label>
                <input type="number" name="price" id="price" value="{{ old('price', $item->price) }}" step="0.01" required>
            </div>

            <div>
                <label for="quantity">Quantity</label>
                <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $item->quantity) }}" required>
            </div>

            <button type="submit" class="submit-btn">Update Item</button>
        </form>
    </div>
</body>
</html>