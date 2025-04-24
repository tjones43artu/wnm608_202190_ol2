<?php

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json")



$classes = implode(",", $user->classes)


function showUserPage($user) {
// heredoc
echo <<<HTML
<nav class="nav nav-crumbs">
<div>
  <ul>
    <li><a href="admin/users.php">Back</a></li>
  </ul>
  </nav>
  <div>
  <h2>$user->name</h2>
  <div>
    <strong>Type</strong>
    <span>$user->type</span>
  </div>
  <div>
    <strong>Email</strong>
    <span>$user->email</span>
  </div>
  <div>
    <strong>Classes</strong>
    <span>$user->classes</span>
  </div>
</div>
HTML;
}


?>




<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Admin Page</title>

<?php include "../parts/meta.php"; ?>
</head>
<body>

  <?php include "../parts/navbar.php"; ?>
  
  <div class="container">
   <div class="card soft">
    <nav class="nav nav-crumbs">
  <ul>
    <li><a href="admin/user.php"></a></li>
  </ul>
</nav>

<form method="get" action="">
      <h2>$user-></h2>
      <div class="form-control">
        <label class="form-label" for="user-name">Name</label>
        <input class="form-input" name="user-name" id="user-name" type="text" value="$user->name" value="$classes"> placeholder="Enter the User Name, comma separated">
      </div>

      <div class="form-control">
        <label class="form-label" for="user-type">Email</label>
        <input class="form-input" name="user-type" id="user-email" type="text" value="$user->type" value="$classes"> placeholder="Enter the User Type, comma separated">
      </div>

      <div class="form-control">
        <label class="form-label" for="user-email">Email</label>
        <input class="form-input" name="user-email" id="user-email" type="text" value="$user->email" value="$classes"> placeholder="Enter the User Email, comma separated">
      </div>

    <div class="form-control">
        <label class="form-label" for="user-classes">Classes</label>
        <input class="form-input" name="user-classs" id="user-classes" type="text" value="$classes"> placeholder="Enter the User Classes, comma separated"
      </div>

    <div class="form-control">
        <input class="form-button" type="submit" value="Save Changes">
    </div>
</form>
   </div>
  </div>
</body>
</html>