<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cool Website</title>

	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../lib/css/gridsystem.css">
	<link rel="stylesheet" href="../css/storetheme.css">

	<style>
	@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
	</style>
</head>

<body>

	<?php include "../parts/navbar.php";
	?>
<div class="view-window" style="background-image:url(../img/junel-mujar-51jzoz1dsro-unsplash.jpg);">
	<article class="view" id="view">
			<h1 style="color:white; text-align: center; padding: 50px; margin-top:75px; ">Admin Login</h1>
		</article>
</div>
<div class="container">
	<div class="card soft">
    <form action="userpage.php" method="post">
        <div class="login-box">
            <h3>Login</h3>

            <div class="form-control">
                <input class="form-input flex-stretch" type="text" placeholder="Username"
                         name="username" value="">
            </div>
            <br>
            <div class="form-control">
                <input class="form-input flex-stretch" type="text" placeholder="Password"
                         name="password" value="">
            </div>
            <br>
            <div>
            <input class="form-button" type="submit"
                     name="login" value="Sign In"></div>
        </div>
        </div>
        </div>
    </form>
    <?php include "../parts/footer.php";
	?>
</body>

</html>