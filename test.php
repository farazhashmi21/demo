<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .page-headng{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 2%;
  }
  .bodyStyle{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-content: center;
  }
  </style>
  </head>
  <body class="bodyStyle">
    <div class="page-headng">
      <h1 style="padding: 0; !important;">Pakistan</h1>
      <p>Zindabad</p>
    </div>
    <button onClick="JavaScriptObjects();">Click</button>
    <script type="text/javascript">
      function JavaScriptObjects(){
        let cars = {
          car_name: "Audi S8"
          // run: => (){ console.log("Drive The Car!") };
        };
        console.log(typeof cars);
      }
    </script>
</body>
</html>