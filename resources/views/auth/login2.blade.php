<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shoeringan | Login Page</title>
  
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

    input[type="email"], input[type="name-input"], input[type="text"], input[type="phone-input"], input[type="date-of-birth"], input[type="date"]{
      width: 477px;
      height: 30px;
      padding: 15px;
      margin-bottom: 30px;
      border: 1px solid black;
    }

    input[type="email"]::placeholder, input[type="name-input"]::placeholder, input[type="text"]::placeholder, input[type="phone-input"]::placeholder{
      color: #9C9C9C;
      font-size: 18px;
      text-align: left;
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

    .send-button{
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

    .send-button .text, .submit-button .text{
      color: white;
      font-size: 22px;
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

      <div class="sign-up">
        <span class="no-account">Don't have an account?</span>
        <span class="sign-up-link">
          <a href="#">Sign up for free!</a>
        </span>
      </div>

      <button class="send-button">
        <span class="text">SEND OTP</span>
      </button>
    </form>  
  </div>
</body>
</html>