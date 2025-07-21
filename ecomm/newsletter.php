<head>
<title>About Page</title>
<?php include "meta.php"; ?>
</head>

<body>
<?php include 'parts/navbar.php';?>
<div class="view-window" style="background-image:url(img/junel-mujar-51jzoz1dsro-unsplash.jpg);"><h1 style="text-align: center; color: white; margin-top: 120px;">Contact Us</h1>
</div>

<form action="contact.php" style="border:1px solid #ccc">
  <div class="container card soft">
    
    <h3>Newsletter Sign Up</h3>
    <p style="font-size:15px">Please fill in this form to create an account.</p>
      <form>
        <input type="text" placeholder="Text" class="form-input">
        <input type="number" placeholder="Number" class="form-input"><br>
        <input type="password" placeholder="Password" class="form-input"><br>
        <input type="search" placeholder="Search" class="form-input">
      </form>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px; font-size:12px"> Send Promotions
    </label>

    <p style="font-size:15px">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
<style>
  footer {
    background-color:dimgrey;
    position: relative;
    width: 100%;
  }
</style>

  <div class="card flat ">
  <p>Oceanic Winds. All rights reserved.</p>
  </div>
</footer>
</body>
