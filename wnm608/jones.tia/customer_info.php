<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "parts/meta.php"; ?>
    <title>Customer Info</title>
</head>
<body>
<?php include "parts/navbar.php"; ?>

<div class="table">
    <div class="form-input">
        <form action="store_data.php" method="POST" id="form">

        <label for="firstname">First Name: <input type="text" name="firstname" id="firstname" required></label>
            <br>
        <label for="lastname">Last Name: <input type="text" name="lastname" id="lastname" required>
        </label>
            <br>
        <label for="age">Age: <input type="text" name="age" id="age" required>
        </label>
            <br>
        <label for="phonenumber">Phone Number: <input type="text" name="phonenumber" id="phonenumber" required>
        </label>
            <br>
        <div class="hotdog">
        <input type="submit" value="Submit">
        </div>




</form>
</div>
</div>





</body>
</html>