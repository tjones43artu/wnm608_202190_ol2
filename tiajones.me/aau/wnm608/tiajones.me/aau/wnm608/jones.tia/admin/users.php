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
    <h2>User List</h2>
    <p>This is item # <?= $_GET['id'] ?></p>
   </div>
  </div>
</body>
</html>