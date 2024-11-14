<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login with OTP</h1>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form action="{{ route('login.request') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Send OTP</button>
    </form>
    <p>Don't have an account? <a href="{{ route('register.form') }}">Register here</a></p>

    @if($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

</body>
</html>