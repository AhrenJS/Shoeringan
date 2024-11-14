<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="login-style.css">
</head>

<body>
  <div class="login-form">
    <div class="login-header">
      <header>LOGIN</header>
    </div

    <form action="#" method="post">
      <div class="email-input">
        <header class="label">Email <span>*</span></header>
        <input type="email" class="email" name="email" placeholder="Email" aria-label="email" required>
      </div>

      <div class="password-input">
        <header class="label">Password <span>*</span></header>
        <input type="password" class="password" name="password" placeholder="Password" aria-label="password" required>
      </div>

      <div class="sign-up">
        <span class="no-account">Don't have an account?</span>
        <span class="sign-up-link">
          <a href="#">Sign up for free!</a>
        </span>
      </div>

      <div class="forgot-password">
        <a href="#">Forgot password?</a>
      </div>

      <button class="login-button">
        <span class="text">LOGIN</span>
        <img class="arrow-right" src="/image/arrow-right.svg" />
      </button>
    </form>

    <div class="or">OR</div>
    
    <button class="google-button">
      <span class="text">Google</span>
      <img class="google-logo" src="/image/google-logo.svg" />
    </button>    
  </div>
</body>
</html>