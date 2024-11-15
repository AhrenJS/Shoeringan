<html>
<head>
    <title>Shoeringan Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

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
    <script>
        function toggleSearchBar() {
            var searchBar = document.getElementById('search-bar');
            if (searchBar.style.display === 'none' || searchBar.style.display === '') {
                searchBar.style.display = 'block';
            } else {
                searchBar.style.display = 'none';
            }
        }

        function populateDOB() {
            var daySelect = document.getElementById('dob-day');
            var monthSelect = document.getElementById('dob-month');
            var yearSelect = document.getElementById('dob-year');

            for (var i = 1; i <= 31; i++) {
                var option = document.createElement('option');
                option.value = i;
                option.text = i;
                daySelect.appendChild(option);
            }

            for (var i = 1; i <= 12; i++) {
                var option = document.createElement('option');
                option.value = i;
                option.text = i;
                monthSelect.appendChild(option);
            }

            var currentYear = new Date().getFullYear();
            for (var i = 1900; i <= currentYear; i++) {
                var option = document.createElement('option');
                option.value = i;
                option.text = i;
                yearSelect.appendChild(option);
            }
        }

        window.onload = populateDOB;
    </script>
</head>
<body>
    <header>
        <nav>
            <a href="#">Home</a>
            <a href="#">Top Selling</a>
            <a href="#">New Arrivals</a>
            <a href="#">Favorites</a>
        </nav>
        <div class="logo">Shoeringan</div>
        <div class="icons">
            <i class="fas fa-search" onclick="toggleSearchBar()"></i>
            <i class="fas fa-user"></i>
            <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="search-bar" id="search-bar">
            <input type="text" placeholder="Search...">
            <i class="fas fa-times" onclick="toggleSearchBar()"></i>
        </div>
    </header>
    <div class="container">
        <div class="profile-section">
            <h2>PROFILE</h2>
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
            <h2>Change Password</h2>
            <form>
                <label for="old-password">Old Password *</label>
                <input type="password" id="old-password">
                <label for="new-password">New Password *</label>
                <input type="password" id="new-password">
                <button type="submit">UPDATE PASSWORD <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>
    </div>
    <footer>
        <div class="column">
            <h3>CONTACT US</h3>
            <p>+62 012-3456-7890</p>
            <p>asdasd@gmail.com</p>
            <div class="social-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
        <div class="column">
            <h3>SUPPORT</h3>
            <a href="#">Returns and Refunds</a>
            <a href="#">Ordering</a>
            <a href="#">Payment</a>
            <a href="#">Delivery</a>
            <a href="#">Size Charts</a>
            <a href="#">Order Tracker</a>
        </div>
        <div class="column">
            <h3>COMPANY</h3>
            <a href="#">About Us</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Delivery Terms</a>
        </div>
        <div class="bottom">
            <p>Privacy Policy | Terms and Conditions | © 2024 Shoeringan Indonesia</p>
        </div>
    </footer>
</body>
</html>