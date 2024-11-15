<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shoeringan | New Arrivals</title>
  
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
  <div class="navbar">
    <!-- navigation links -->
    <div class="nav-links">
      <a href="home-page.html">Home</a>
      <a href="./top-selling.html">Top Selling</a>
      <a class="active" href="./new-arrivals.html">New Arrivals</a>
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

  <div class="header">
    <p>NEW ARRIVALS</p>
  </div>

  <div class="products" id="products-container">
    <div class="product">
     <img alt="Placeholder image for SHOE NAME1" height="300" src="https://placehold.co/300x300" width="300"/>
     <div class="name">SHOE NAME1</div>
     <div class="price">Rp 1.900.000</div>
    </div>
    <div class="product">
     <img alt="Placeholder image for SHOE NAME2" height="300" src="https://placehold.co/300x300" width="300"/>
     <div class="name">SHOE NAME2</div>
     <div class="price">Rp 1.600.000</div>
    </div>
    <div class="product">
     <img alt="Placeholder image for SHOE NAME3" height="300" src="https://placehold.co/300x300" width="300"/>
     <div class="name">SHOE NAME3</div>
     <div class="price">Rp 1.800.000</div>
    </div>
    <div class="product">
     <img alt="Placeholder image for SHOE NAME4" height="300" src="https://placehold.co/300x300" width="300"/>
     <div class="name">SHOE NAME4</div>
     <div class="price">Rp 1.700.000</div>
    </div>
    <div class="product">
     <img alt="Placeholder image for SHOE NAME5" height="300" src="https://placehold.co/300x300" width="300"/>
     <div class="name">SHOE NAME5</div>
     <div class="price">Rp 1.900.000</div>
    </div>
    <div class="product">
     <img alt="Placeholder image for SHOE NAME6" height="300" src="https://placehold.co/300x300" width="300"/>
     <div class="name">SHOE NAME6</div>
     <div class="price">Rp 1.600.000</div>
    </div>
    <div class="product">
     <img alt="Placeholder image for SHOE NAME7" height="300" src="https://placehold.co/300x300" width="300"/>
     <div class="name">SHOE NAME7</div>
     <div class="price">Rp 1.800.000</div>
    </div>
    <div class="product">
     <img alt="Placeholder image for SHOE NAME8" height="300" src="https://placehold.co/300x300" width="300"/>
     <div class="name">SHOE NAME8</div>
     <div class="price">Rp 1.700.000</div>
    </div>
    <div class="product">
     <img alt="Placeholder image for SHOE NAME9" height="300" src="https://placehold.co/300x300" width="300"/>
     <div class="name">SHOE NAME9</div>
     <div class="price">Rp 1.900.000</div>
    </div>
    <div class="product">
     <img alt="Placeholder image for SHOE NAME10" height="300" src="https://placehold.co/300x300" width="300"/>
     <div class="name">SHOE NAME10</div>
     <div class="price">Rp 1.600.000</div>
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