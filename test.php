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
  .mainButtonStyle{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 2%;
  }
  </style>
  </head>
  <body class="bodyStyle">
    <div class="page-headng">
      <h1 style="padding: 0; !important;">Pakistan</h1>
      <p>Zindabad</p>
    </div>
    <button class="mainButtonStyle" onClick="JavaScriptTestFunction();">Click</button>
    <script type="text/javascript">
      function JavaScriptTestFunction(){
        c = 1;
        console.log(typeof "WWE");
      }
    </script>
</body>
</html>