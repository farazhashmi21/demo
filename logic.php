<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Logic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1><?php echo "<h1>Assalam-O-Alaiqum</h1>"; ?></h1>
  <p>Lets Begin</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
<?php
// PHP Part: OOP Based;
class logic{ // PHP Class;
    public function __construct(){ // PHP Default Constructor;
        echo "<p>Array Values: </p>";
    }
    public function displ(){ // PHP Custom Function;
        $fruits = array("Apples", "Grapes", "Peaches"); // Sample Array;
        $total = count($fruits); // Array Count;
        $i = 0; // Starter variable for for loop;
        echo "<ul class='list-group'>"; // List Opened
        for($i = 0; $i < ($total-1); $i++){ // For Loop
            if($i !== ($total-2)){ // If Condition To Check The Current Array Index.
                $current = $fruits[$i].","; // Make Output Value.
                echo "<li  class='list-group-item'>$current</li>"; // List Index From Array Print.
              }else if($i !== ($total)){ // Else If is used for another Condition.
                $current = $fruits[$i] . " &#38;"; // Make Output Value.
                echo "<li class='list-group-item'>$current</li>"; // List Index From Array Print.
                $current = $fruits[$i+1] . "."; // Make Output Value.
                echo "<li class='list-group-item'>$current</li>"; // List Index From Array Print.
              }else{
                // No Content Here.
              }
            } // For Loop Closed.
        echo "</ul>"; // List Closed.
    } // PHP Custom Function Closed.
} // PHP Class Closed.
$L = new logic(); // PHP Class Object Named $L;
$L->displ(); // PHP Class Function Called From Object $L;
// PHP Code End Here.
?>
</div>
  </div>
</div>
<footer class="container-fluid text-center">
<p>&#169; Copyright <script>document.write(new Date().getFullYear());</script></p>
</footer>
</body>
</html>
