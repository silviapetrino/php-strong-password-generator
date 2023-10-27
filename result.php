<?php
 session_start();
 $password = $_SESSION['passord_generated'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>Password generated</title>
  <style>
      body {
        background-color: #09182B;
        font-family: 'Trebuchet MS', sans-serif;
      }
      .container-sp{
        width: 50%;
        margin: 0 auto;
      }
      h2 {
        color: #808A98;
        font-weight: 700;
      }
      h3 {
        color: white;
      }
      .box {
        background-color: #CFF4FC;
        color: #4C8794;
      }
      .box.psw {
        background-color: white;
        color: #4C8794;
      }    
  </style>
</head>
<body>
<div class="container-sp my-5">
    <div class="title text-center">
     
    <h3>La password generata è:</h3>
    </div>
    <div class="row flex-column text-white ">
      <div class="col my-2 rounded-1 box py-2">
        <p><?php echo $password ?></p>
      </div>
    </div>
  </div>

</body>
</html>