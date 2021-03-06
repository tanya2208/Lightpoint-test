<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test B</title>
    <link rel="stylesheet" href="style-form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
  </head>
  <body>
      <header>
        <img class="logo" src="images/logo.png" alt="logo">
        <button type="button" name="button" class="busket"><img src="images/busket.png" alt="Busket"></button>
      </header>
      <div class="sidebar">
        <div class="sidebar-header">
          <p>Your order</p>
        </div>
        <p style="font-weight: bold; font-size: 20px;">Digital Access</p>
        <p>Unlimited access to website, and the smartphone and tablet apps.</p>
        <p class="price">$0.99</p>
        <p>Sales tax may apply.</p>
        <p style="font-weight: bold;">Total: $0.99</p>
      </div>
      <div class="main">
        <div class="progressBar">
      <ul class="progressBar">
        <li class="active">Create an account</li>
        <li >Billing address</li>
        <li>Payment</li>
      </ul>
    </div>
        <div class="package-type">
          <p style="font-weight: bold; font-size:22px;">Digital</p>
          <p>99¢ 4 weeks only then $1.99/week</p>
        </div>
        <div class="sign-up">
          <p style="font-weight: bold; font-size:23px;">Create an account</p>
          <div class="log-in">
            <div class="have-acc">
              <p>Already have an account?</p>
              <a href="#">LOG IN</a>
            </div>
            <div class="log-in-btn">
              <button class="facebook" type="button" name="button">FACEBOOK <img src="images/facebook.png" alt="Facebook"></button>
              <button class="google" type="button" name="button">GOOGLE <img src="images/google.png" alt="Google"></button>
            </div>
          </div>
          <form action="form.php" id="ajax_form" method="post">
            <p class="label">Email</p>
            <input class="email" type="email" name="email" value="" placeholder="Email">
            <p class="label">Password</p>
            <div class="password">
              <input class="my-password" type="password" name="password" placeholder="Password">
              <button class="show-pass" type="button" name="button">Show</button>
            </div>
            <p class="total-price">Price: $ 0.99</p>
            <button class="continue  trigger" id="continue" type="submit" name="button">CONTINUE</button>
          </form>
        </div>
      </div>
      <div class="modal">
        <div class="content" >
          <button type="button" name="button" class="close-button"><img src="images/cancel.png" alt="Close"></button>
            <div id="result_form">

            </div>
        </div>
      </div>
      <footer>
        <div class="links">
          <a href="#">Home</a>
          <a href="#">FAQ</a>
          <a href="#">Contact Us</a>
          <a href="#">Term of Service</a>
          <a href="#" style="margin-right: 0">Privacy Policy</a>
        </div>
      </footer>
      <script src="script.js"></script>

  </body>
</html>
