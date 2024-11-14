<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link rel="stylesheet" href="style.css">
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