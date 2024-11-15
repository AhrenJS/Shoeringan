<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
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
            max-width: 600px;
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

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 1.1em;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #00796b;
            outline: none;
        }

        .form-group img {
            border-radius: 50%;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .form-group button {
            padding: 12px 25px;
            background-color: #00796b;
            color: #ffffff;
            font-size: 1.1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #004d40;
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

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 1.1em;
            color: #00796b;
            text-decoration: none;
        }

        .back-link:hover {
            color: #004d40;
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
        <h1>Edit Profile</h1>

        <!-- Display Success Message -->
        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        <!-- Display Errors -->
        @if($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Display name input -->
            <div class="form-group">
                <label for="name">Display Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
            </div>

            <!-- Profile photo upload -->
            <div class="form-group">
                <label for="profile_photo">Profile Photo:</label>
                <input type="file" name="profile_photo" id="profile_photo">
                @if($user->profile_photo_path)
                    <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="Profile Photo" width="100">
                @endif
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit">Update Profile</button>
            </div>
        </form>

        <!-- Back to Home -->
        <a href="{{ route('home') }}" class="back-link">Back to Home</a>
    </div>
</body>
</html>