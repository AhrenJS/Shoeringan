<!DOCTYPE html>
<html>
<head>
    <title>Verify OTP</title>
</head>
<body>
    <h1>Verify OTP</h1>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form action="{{ route('otp.verify.post') }}" method="POST">
        @csrf
        <!-- Include the email field to pass the email -->
        <input type="hidden" name="email" value="{{ old('email', request()->email) }}">
        <input type="text" name="otp" placeholder="Enter OTP" required>
        <button type="submit">Verify OTP</button>
    </form>

    @if($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
</body>
</html>