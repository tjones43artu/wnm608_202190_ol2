<?php 

$filename = "../notes/notes.json";
$file = file_get_contents($filename);
$notes_object = json_decode($file);

$filename = "../notes/notes.json";
$file = file_get_contents($filename);
$notes_object = json_decode($file);

$notes_object = file_get_json("../notes/notes.json");
$users_array = file_get_json("../data/users.json");



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
    <h2 style="padding-left: 50px; ">User Admin</h2>
  </div>

  <div class="flex-stretch">
  </div>

  <nav class="nav nav-flex">
      <ul>
        <li>
          <a href="admin/users.php">User List</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
  
  <div class="container">

    <div class="card soft">
        <h2>User List</h2>

        <nav class="nav">
          <ul>
            
          
        
  <?php 

  for ($i=0; $i <count($users_array) ; $i++) {
    echo "<li>
        <a href='admin/users.php?id=$i'{$users[$i]->name}</a>
        <span>{$users_array[$i]->name}</span>
    </li>";
  }
  

  ?>

    </div>
    </div>

  </body>
</html>