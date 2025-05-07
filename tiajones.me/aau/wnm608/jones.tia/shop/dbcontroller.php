<?php
// Configure your database details here
$conn = mysqli_connect("localhost", "root", "", "blog_eg");

$animalName = 'Elephant';
$animalColor = 'Grey';
$sqlStatement = $conn->prepare("INSERT INTO animals (animal_name, animal_color) VALUES (?, ?)");
$sqlStatement->bind_param("ss", $animalName, $animalColor);
if ($sqlStatement->execute()) {
    $message = "Added Successfully.";
} else {
    $message = "Problem in Adding New Record.";
}
$sqlStatement->close();
$conn->close();
print $message;
?>