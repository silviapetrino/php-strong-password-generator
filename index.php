<?php
include_once __DIR__ . '/partials/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>strong-password-generator</title>
  <style>
      body {
        /* background-color: #09182B; */
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
      h4 {
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
      <h2>Strong Password Generator</h2>
      <h4>Genera una password sicura</h4>
    </div>
    <div class="row flex-column text-white ">
      <div class="col my-2 rounded-1 box">
        <p class="py-1"><?php echo $Msg ?></p>
      </div>
      
      <div class="col box psw">

        <form action="index.php" method="POST">
          
            <label class="form-label" for="typeNumber">Lunghezza Password:</label>
            
            <input min="0" type="number" id="typeNumber" class="form-control" name="userNum" />
            
            <button class="btn btn-primary my-2" type="submit">Invia</button>
            <button class="btn btn-secondary my-2" type="reset">Annulla</button>
            
        </form>

      </div>
    </div>
  
  </div>
  
</body>
</html>