<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shoeringan | Account</title>

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
  <div class="navbar">
    <!-- navigation links -->
    <div class="nav-links">
      <a class="active" href="home-page.html">Home</a>
      <a href="./top-selling.html">Top Selling</a>
      <a href="./new-arrivals.html">New Arrivals</a>
      <a href="./favorites.html">Favorites</a>
    </div>

    <!-- insert logo -->
    <img class="logo" src="/images/logo.svg" alt="Shoeringan">

    <!-- search bar -->
    <input type="text" class="search-bar" name="search-bar">
    <img class="magnifying-glass" src="/images/magnifying-glass.svg">

    <!-- account -->
    <a href="user-account.html">
      <img class="user" src="/images/user.svg" alt="User Account">
    </a>

    <!-- shopping bag -->
    <a href="shopping-bag.html">
      <img class="bag" src="/images/handbag.svg" alt="Shopping Bag">
    </a>
  </div>

  <div class="container">
    <div class="profile-section">
        <p>PROFILE</p>

        <form>
            <label for="first-name">Your Name</label>
            <input type="text" id="first-name" value="First Name...">
            <input type="text" id="last-name" value="Last Name...">

            <label for="phone">Phone</label>
            <input type="text" id="phone" value="Your phone number...">

            <label for="dob">Date of Birth</label>
            <div style="display: flex; justify-content: space-between;">
                <select id="dob-day" style="width: 32%;"></select>
                <select id="dob-month" style="width: 32%;"></select>
                <select id="dob-year" style="width: 32%;"></select>
            </div>

            <label>Gender (Optional)</label>
            <div class="gender">
                <input type="radio" id="men" name="gender" value="men">
                <label for="men">Men</label>
                <input type="radio" id="women" name="gender" value="women">
                <label for="women">Women</label>
            </div>

            <label for="email">Email</label>
            <input type="email" id="email" value="Your email..">
            <button type="submit">SAVE CHANGES <i class="fas fa-arrow-right"></i></button>
        </form>

        <div class="account-actions">
            <button>LOG OUT <i class="fas fa-arrow-right"></i></button>
            <button>DELETE ACCOUNT <i class="fas fa-arrow-right"></i></button>
        </div>
    </div>

    <div class="divider"></div>

    <div class="password-section">
        <header class="label"></header>
        <form>
            <label for="old-password">Old Password *</label>
            <input type="password" id="old-password">
            <label for="new-password">New Password *</label>
            <input type="password" id="new-password">
            <button type="submit">UPDATE PASSWORD <i class="fas fa-arrow-right"></i></button>
        </form>
    </div>
  </div>
</body>

<footer>
  <div class="extra-info">
    <section class="contact-us">
      <p class="label">CONTACT US</p>
      <div class="content">
        <p>+62 012-3456-7890</p>
        <p>asdasd@gmail.com</p>
      </div>
    </section>

    <section>
      <p class="label">SUPPORT</p>
      <div class="content">
        <a href="#">Returns and Refunds</a>
        <a href="#">Ordering</a>
        <a href="#">Payment</>
        <a href="#">Delivery</a>
        <a href="#">Size Charts</a>
        <a href="#">Order Tracker</a>
      </div>
      </section>

    <section>
      <p class="label">COMPANY</p>
      <div class="content">
        <a href="#">About Us</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms and Conditions</a>
        <a href="#">Delivery Terms</a>
      </div>
    </section>
    
  </div>
</footer>

<div class="credit">
  <div class="footer-content">
    <a href="#">Privacy Policy</a> | <a href="#">Terms and Conditions</a>
    <span>© 2024 Shoeringan Indonesia</span>
  </div>
</div>
</html>