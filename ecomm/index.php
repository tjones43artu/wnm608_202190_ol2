<html>
<head>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cool Website</title>

  <link rel="stylesheet" href="lib/css/styleguide.css">
  <link rel="stylesheet" href="lib/css/gridsystem.css">
  <link rel="stylesheet" href="css/storetheme.css">

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  </style>
</head>

<body>
  <!-- header>h1+p -->

<header class="navbar">
  <div class="container display-flex">
    <div class="flex-none">
    <h1 class="title">Oceanic Winds</h1>
    </div>
    <div class="flex-stretch"></div>
  <nav class="nav flex-none">
    <ul class="container display-flex">
      <li class="flex-stretch"><a href="index.html">Home</a></li>
      <li class="flex-stretch"><a href="about.php">About</a></li>
      <li class="flex-stretch"><a href="productlist.php">Shop</a></li>
      <li class="flex-stretch"><a href="blog.php">Blog</a></li>
      <li class="flex-stretch"><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
  </div>
  </header>

  <div class="view-window" style="background-image:url(img/junel-mujar-51jzoz1dsro-unsplash.jpg);">
    <h1 style="text-align:center; color: white; margin-top: 125px;" >Oceanic Winds</h1>
</div>

<div class="card">
  <h3 style="text-align:center;">Featured Products</h3>
  <div class="grid" style="margin-left: 7%;">
    <div class="col-1">
    <figure class="figure">
      <img src="https://via.placeholder.com/400x400?text=product">
      <figcaption>
        <div>Atlantic Breeze</div>
        <div>$18.00</div>
      </figcaption>
    </figure>
    </div>

    <div class="col-1">
    <figure class="figure">
      <img src="https://via.placeholder.com/400x400?text=product">
      <figcaption>
        <div>Surfer's Delight</div>
        <div>$18.00</div>
      </figcaption>
    </figure>
    </div>

    <div class="col-1">
    <figure class="figure">
      <img src="https://via.placeholder.com/400x400?text=product">
      <figcaption>
        <div>Vanilla Sand</div>
        <div>$18.00</div>
      </figcaption>
    </figure>
    </div>
  </div>
  <div style="margin-left: 45%;">
  <button class="button" type="button">Shop Now</button>
</div>
</div>
 
 <div class="badge-banner" style="background-color: #1A2629; padding: 50px;">
  <div class="grid">
  <img class="col-1" src="img/badge.png" alt="Coffee Badge Design" width="200px" style="margin-left: 90%; margin-top: 2%;">
  <h1 class="col-1" style="text-align:left; color: white;  margin-left: 50%; margin-top: 10%;">Making Coffee <br> Since 1985</h1>
  </div>
 </div>
<section>
  <div class="view-window" style="background-image:url(img/junel-mujar-51jzoz1dsro-unsplash.jpg);">
    <button style="margin-left: 45%; color: white; margin-top: 125px;" >Our Story</button>
</div>
</section>
<section>
  <div class="container" id="gridsystem"> 
    <div class="card soft">
      
      <div class="grid">
      <div style="font-size: 16px; align-items: center;" class="col-1">
      <h3>Sign Up To Our Newsletter</h3>Join our email newsletter for 10% off your first order</div>
      <div style="font-size: 16px; margin-top: 20px; margin-left: 10px" class="col-1;"><button class="button col-1" type="button">Sign Up</button></div>
      </div>
    </div>
    </section>
<br>

<div class="grid-container">
  <div class="article card soft">
    <img src="https://via.placeholder.com/400x400?text=product">
    <h2>A Brew Through History</h2>
    <div class="article-body">
      <p>Coffee's journey began in the highlands of Ethiopia, where the Coffea arabica plant was first discovered. Legend has it that a goat herder named Kaldi noticed his goats behaving unusually energetic after consuming the berries from this plant...</p>
    </div>
    <button class="button" type="button">Read more...</button>
  </div>

  <div class="article card soft">
    <img src="https://via.placeholder.com/400x400?text=product">
    <h2>Coffee Culture Around the World</h2>
    <div class="article-body">
      <p>Coffee's cultural significance varies dramatically across the globe. In Italy, espresso is a way of life, enjoyed quickly at the bar or lingered over in a cafe. </p>
    </div>
    <button class="button" type="button">Read more...</button>
  </div>


  <div class="article card soft">
    <img src="https://via.placeholder.com/400x400?text=product">
    <h2>The Daily Buzz: Key Takeaways</h2>
    <div class="article-body">
      <p>Coffee has a rich and fascinating history, with its origins in Ethiopia and its subsequent spread across the globe. The art of brewing offers a diverse range of methods, each with its own unique characteristics...</p>
    </div>
    <button class="button" type="button">Read more...</button>
  </div> 
 </div>



<section>
    <?php include 'parts/footer.php';?>
    
  </section>
</body>

</html>
