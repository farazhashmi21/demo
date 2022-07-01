<?php
class login(){
    public function __construct(){
        echo "Assalam-O-Alaiqum";
    }
    public function displ(){
        $cars = array("BMW","Mercedes","Lemborghini");
        foreach ($cars as $c) {
            echo "<p>$c</p>";
          } 
    }
}
?>