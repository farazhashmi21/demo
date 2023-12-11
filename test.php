<!doctype html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"/>
  </head>
  <body class="container-fluid">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    class Test{
      function displ(){
        phpinfo();
      }
      function costCalculator($num = 0.00,$var = 0.00, $tum = 0.00){
        $calc = array($num, $var, (($num+$var)*$tum));
        return ($calc);
    
      }
    }
    $test = new Test();
    $test->displ();
    ?>
  </body>
</html>