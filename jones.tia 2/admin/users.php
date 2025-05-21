<?php 

$users_array = file_get_json("../data/users.json");









function showUserPage() {

$classes = implode(", ", $user->classes);

// heredoc
echo <<<HTML

  <form>
    <h2>$user->name</h2>
    <div class="form-control">
      <label class="label">Type</label>
      <input class="form-input" name="user-name" type="text" value="$user->type" placeholder="Enter the User Class">
    </div>
    <div class="form-control">
      <label class="label">Email</label>
      <input class="form-input" name="user-email" type="text" value="$user->email" placeholder="Enter the User Class">
    </div>
    <div class="form-control">
      <label class="label">Classes</label>
      <input class="form-input" name="user-classes" type="text" value="$classes" placeholder="Enter the User Class">
    </div>
    <div>
      <input class="form-button" type="submit" name="Save Changes">
    </div>
  </form>
  HTML;
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Admin Page</title>

  <?php include "../parts/meta.php"; ?>
</head>
<body>
<header class="navbar">
  <div class="container display-flex">
    <h2>User Admin</h2>

    <nav class="container nav">
      <ul style="float: right; margin-top: 20px; margin-left: 800px;">
        <li>
          <a href="https://tiajones.me/aau/wnm608/jones.tia/admin/users.php">User List</a>
        </li>
      </ul>
  </nav>

  </div>

  <div class="flex-stretch">
    
  </div>

  

</header>
<br>
  
  <div class="container">
    <nav class="nav">
      <ul>
    <li>
      <a href="https://tiajones.me/aau/wnm608/jones.tia/admin/users.php">Back</a>
    </li>
      </ul>
    </nav>

    <div class="card soft">

      <?php

        if (isset($_GET['id'])) {
            showUserPage($users[$_GET['id']]);
          } else {
       
      ?>
        <h2>User List</h2>

        <nav class="nav">
          <ul>
            
          
        
        <?php  }


        for ($i=0; $i <count($users_array) ; $i++) {
        echo "<li>
          <a href='https://tiajones.me/aau/wnm608/jones.tia/admin/users.php?id=$i'{$users[$i]->name}</a>
          <span>{$users_array[$i]->name}</span>
        </li>";
        }
  

  ?>
      </ul>
    </div>
    </div>

  </body>
</html>