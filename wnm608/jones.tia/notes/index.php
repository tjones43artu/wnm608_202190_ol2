    <!DOCTYPE html>
    <html>
    <head>
      <title>Your Page Title</title>
    </head>
    <body>
      <?php  


        phpinfo();  
        
        echo "<div> Hello World </div>";
        echo "<div> Goodbye World </div>"

        // Variables
        $a = 5;

        echo $a;


        // String Interpolation
        echo "<div>I have $a things</div>"
        echo '<div> I have $a things</div>'

        // Number
        // Integer

        $b = 15;
        //Float
        $b = 0.576;

        $b = 10;


        //String
        $name = "Yerguy2";

        //Boolean
        $isOn = true;









        // Math
        // PEMDAS
        echo (5-4) * 2;

        //Concentation
        echo "<div>b + a" . " = c</div>"
        echo "<div>b + a" . ".($a+$b)." = c</div>"

      ?>

      <hr>
      <div>This is my name</div>

      <?php

      $firstname = "Hamilton";
      $lastname = "Cline";
      $fullname = "$firstname $lastname";

      echo $fullname;

    ?>
    <hr>
    <?php

    // superglobal
    // ?name=Joey
    echo "<div>My name is {$_GET['name']}</div>"

    // ?name=Joey&type=textarea
    echo "<div>My name is {$_GET['name']}<{$_GET['name']}>"

    ?>

    //Array
    $colors = array("red","green","blue");

    echo $colors[2];

    echo "
        <br>$colors[0]
        <br>$colors[1]
        <br>$colors[2]
    ";

    echo count($colors);

  ?>

  <div style="color:<?= $colors[1] ?>"> This text is green 
  </div>

  <hr>
  <?php

  // Associative Array
  $colorsAssociative = [
    "red" => "#f00",
    "red" => "#0f0",
    "red" => "#00f"
  ];

  echo $colorsAssociate['green'];

?>
<hr>
<?php

//Casting
$c = "$a";
$d = "$c*1";

$colorsObject = (object)$colorsAssociative;

// echo $colosObject;

echo "<hr>";

//Array Index Notation
echo $colors[0]."<br>";
echo $colorsAssociative['red']. "<br>";
echo $colorsAssociative[$colors[0]]. "<br>";

// Object Property Notation
echo $colorsObject->red."<br>";
echo $colorsObject->{$colors[0]}."<br>";

?>

<hr>

<?php

print_r($colors);
echo "<hr>";
print_r($colorsAssociative);
echo "<hr>";
echo "<pre>",print_r($colorsObject),"</pre>"

// Function
function print_p($v)  {
  echo <pre>,print_r($v),</pre>
}

print_p($_GET)
?>

    </body>
    </html>
