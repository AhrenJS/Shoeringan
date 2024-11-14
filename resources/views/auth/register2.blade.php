<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  {{-- <link rel="stylesheet" href="style.css"> --}}
  <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            flex-direction: row;
            margin: 0;
            display: grid;
            grid-template-rows: auto 1fr auto;
        }

        /* Navigation Bar */

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-right: 20px;
            margin: 0px 30px;
            position: relative;
            margin-bottom: 65px;
        }

        .logo{
            width: 210px;
            height: auto;
        }

        .nav-links {
            display: flex;
            list-style: none;
            padding-right: 220px;
        }

        .nav-links a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
        }

        .nav-links a.active {
            font-weight: bold;
        }

        .search-bar {
            width: 260px;
            height: 10px;
            padding: 10px;
            border: none;
            font-size: 16px;
            color: #333;
            background-color: #EBEDEE;
            margin-left: 195px;
        }

        .magnifying-glass{
            color: black;
            width: 24px;
            height: 24px;
            margin-left: 10px;
        }

        .user, .bag{
            display: flex;
            align-items: center;
            color: black;
            width: 24px;
            height: 24px;
            margin-left: 20px;
            cursor: pointer;
        }

        /* Main */

        .header{
            font-size: 40px;
            font-style: italic;
            font-weight: bold;
            padding-left: 80px;
        }

        .products{
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 0px 80px;
            justify-items: center;
        }

        .product{
            text-align: center;
            padding-bottom: 50px;
        }

        .product img{
            width: 100%;
            height: auto;
            max-width: 300px;
        }

        .name{
            color: black;
            margin-top: 10px;
            font-size: 14px;
            text-align: left;
        }

        .price{
            color: black;
            font-size: 13px;
            text-align: left;
        }

        /* Footer */

        footer{
            background-color: black;
            color: white;
            padding: 60px 0px 60px 200px;
            margin-top: 150px;
        }

        .extra-info{
            display: flex;
            align-items: flex-start;
        }

        section{
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-right: 135px;
            font-size: 16px;
        }

        .label{
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .socials {
            display: flex;
        }

        .content{
            margin-bottom: 20px;
        }

        .content a{
            color: white;
            text-decoration: none;
            margin-bottom: 20px;
            display: block;
        }

        .content a:hover{
            text-decoration: underline;
        }

        /* Privacy Policy and Terms Conditions */

        .credit{
            background-color: #1E1E1E;
            color: #9A9A9A;
            padding: 15px 0px 15px 400px;
            text-align: center;
            font-size: 12px;
            bottom: 0;
        }

        .footer-content a{
            color: #9A9A9A;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer-content a:hover{
            text-decoration: underline;
        }

        .footer-content span{
            display: inline-block;
            margin-left: 15px;
        }
  </style>
</head>

<body>
  <div class="register-form">
    <div class="register-header">
      <header>REGISTER</header>
    </div>

    <form action="#" method="post">
      <div class="name-input">
        <header class="label">Your Name <span>*</span></header>
        <input type="text" class="first-name" name="first-name" placeholder="First Name" required>
        <br>
        <input type="text" class="last-name" name="last-name" placeholder="Last Name" required>
      </div>

      <div class="phone-input">
        <header class="label">Phone Number <span>*</span></header>
        <input type="text" class="phone-number" name="phone-number" placeholder="08xxxxxxxxxx" pattern="[0-9]{12}" maxlength="12" required>
      </div>

      <div class="date-of-birth">
        <header class="label">Date of Birth <span>*</span></header>
        <input type="date" class="date" name="date" placeholder="dd" required>
      </div>

      <div class="gender-opt">
        <header class="label">Gender (Optional)</header>
        <input type="radio" name="gender" id="Men">
        <label class="gender" for="Men">Men</label>
        <input type="radio" name="gender" id="Women">
        <label class="gender" for="Women">Women</label>
      </div>

      <div class="email-input">
        <header class="label">Email <span>*</span></header>
        <input type="email" class="email" name="email" placeholder="Email" aria-label="email" required>
      </div>

      <div class="password-input">
        <header class="label">Password <span>*</span></header>
        <input type="password" class="password" name="password" placeholder="Password" aria-label="password" required>
        <br>
        <input type="password" class="confirm-password" name="confirm-password" placeholder="Confirm Password" aria-label="password" required>
      </div>

      <button class="submit-button">
        <span class="text">SUBMIT</span>
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