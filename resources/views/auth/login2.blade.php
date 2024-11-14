<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  {{-- <link rel="stylesheet" href="login-style.css"> --}}
  <style>
    body{
      font-family: Arial, Helvetica, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: auto;
      margin: 0;
    }

    .login-form{
      max-width: 477px;
      margin: 90px 0px;
    }

    .register-form{
      max-width: 477px;
      margin: 90px 0px;
    }

    .login-header, .register-header{
      font-size: 58px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 70px;
    }

    .label{
      font-size: 22px;
      font-weight: bold;
      text-align: left;
      margin-bottom: 15px;
    }

    span{
      color: #DC6262;
    }

    input[type="email"], input[type="password"], input[type="name-input"], input[type="text"], input[type="phone-input"], input[type="date-of-birth"], input[type="date"]{
      width: 477px;
      height: 30px;
      padding: 15px;
      margin-bottom: 30px;
      border: 1px solid black;
    }

    input[type="email"]::placeholder, input[type="password"]::placeholder, input[type="name-input"]::placeholder, input[type="text"]::placeholder, input[type="phone-input"]::placeholder{
      color: #9C9C9C;
      font-size: 18px;
      text-align: left;
    }

    .gender-opt{
      margin-bottom: 30px;
    }

    .gender{
      font-size: 20px;
    }

    .sign-up{
      margin-bottom: 35px;
    }

    .no-account{
      color: #B3B3B3;
      font-size: 16px;
      padding-right: 180px;
    }

    .sign-up-link a{
      color: black;
      font-size: 16px;
      font-weight: bold;
    }

    .sign-up-link a:hover{
      text-decoration: none;
    }

    .forgot-password a{
      color: black;
      font-size: 18px;
      margin-bottom: 40px;
    }

    .forgot-password a:hover{
      text-decoration: none;
    }

    .login-button{
      background-color: black;
      font-weight: bold;
      width: 146px;
      height: 54px;
      display: flex;
      padding: 15px;
      border: none;
      cursor: pointer;
      margin-top: 40px;
      margin-bottom: 50px;
      text-align: left;
    }

    .submit-button{
      background-color: black;
      font-weight: bold;
      width: 163px;
      height: 54px;
      display: flex;
      padding: 15px;
      border: none;
      cursor: pointer;
      margin-top: 40px;
      margin-bottom: 50px;
      text-align: left;
    }

    .login-button .text, .submit-button .text{
      color: white;
      font-size: 22px;
    }

    .arrow-right{
      color: white;
      font-size: 24px;
      padding-left: 15px;
    }

    .or{
      margin-bottom: 50px;
    }

    .google-button{
      background-color: white;
      width: 325px;
      height: 54px;
      display: flex;
      border: 1px solid black;
      align-items: center;
      text-align: left;
      padding: 15px;
      cursor: pointer;
    }

    .google-button .text{
      color: #9C9C9C;
      font-size: 18px;
      letter-spacing:.2em;
    }

    .google-logo{
      color: black;
      font-size: 24px;
      padding-left: 190px;
    }
  </style>
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
        <img class="arrow-right" src="/images/arrow-right.svg" />
      </button>
    </form>

    <div class="or">OR</div>
    
    <button class="google-button">
      <span class="text">Google</span>
      <img class="google-logo" src="/images/google-logo.svg" />
    </button>    
  </div>
</body>
</html>