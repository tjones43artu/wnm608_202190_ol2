<?php

include "../lib/php/functions.php";

$filename = "notes.json";
$file = file_get_contents($filename);
$notes = json_decode($file);

$filename = "notes.json";
$file = file_get_contents($filename);
$notes = json_decode($file);

$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/notes.json");

// print_p($notes)

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reading Data</title>

<?php include "parts/meta.php" ?>
</head>
<body>

	<?php include "parts/navbar.php" ?>
		
	<div class="container">
		<div class="card soft">
			<h2>Notes</h2>
			
			<?php
			
			for($i=0;$i<count($notes_object->notes;$1++){
				echo "<li>{$notes_object->notes[$i]}</li>";
			}
			
			?>	
		</div>
		<div class="card soft">
			<h2>Users</h2>
			
			<?php
			
			for($i=0;$i<count($users_array);$1++){
				echo "<li>
					<strong>{$notes_object->notes[$i]}</strong>
					<span>{$users_array[$i]->type}</span>
				</li>";
			}
			
			?>	
		</div>
	</div>
	</body>
	</html>