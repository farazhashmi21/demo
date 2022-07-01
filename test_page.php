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
                echo "<p>$getGreetings.</p>";
            }
        }
        $tP = new test_page();
        //$tP->sysInfo();
        $tP->display();
        ?>
  </body>
  </html>