<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Test_Page</title>
  </head>
  <body>
      <?php
      class test_page{
          public function sysInfo(){
              phpinfo();
            }
            public function display($get_greetings = "Assalam-O-Alaiqum"){
                $getGreetings = htmlspecialchars(trim($get_greetings));
                $developer = [
                    "Mobile Model" => "RMX3201",
                    "Mobile Number" => "0000-0000000"
                ];
                echo "<p>$getGreetings.</p>";
                foreach($developer as $d => $p){  
                    echo "<p>Developer ".$d. " = " .$p. "</p>";                  
                }
        }
    }
        $tP = new test_page();
        //$tP->sysInfo();
        $tP->display();
        ?>
  </body>
  </html>