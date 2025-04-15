<?php

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json")

function showUserPage() {

$classes =implode(",", $user->classes);

//heredoc
echo <<<HTML
<nav class="nav nav-crumbs">
  <ul>
    <li><a href="admin/user.php"></a></li>
  </ul>
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
HTML;
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>

</body>
</html>
  print_p($users);
}


?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Admin Page</title>

  <?php include "../parts/meta.php"; ?>
</head>

<body>

  <header class="navbar">
     <div class="container display-flex">
      <div class="flex-none">
        <h1>User Admin</h1>
      </div>
      <div class="flex-stretch"></div>
      <nav class="nav nav-flex flex-none">
        <ul>
          <li><a href="admin/user.php">User List</a></li>
        </ul>
      </nav>
    </div>
  </header>

<div class="container">

  <div class="card soft">
    <h2>Users List</h2>

    <nav>
      <ul>
        <?php

    for($i=o;$i<count($users);$i++){
      echo "<li>
        <a href='admin/users.php?id=$i'>{$users[$i]->name</a>
      </li>;
    }

      ?>
      </ul>
    </nav>

    
  </div>
</div>
    

</body>
</html>