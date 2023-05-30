<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>

<h1 style="text-align:center;">Signing up...</h1>
<div class="main-container1" style="margin-top: 0;">
<div style="margin-left: 20px;">
<?php

include '../myWebsite/templates/header.php';
include '../myWebsite/templates/footer.php';
if(isset($_POST["name"]) && isset($_POST["password"]))
  {
      // check if user exist.
      $file=fopen("users.txt","r");
      $finduser = false;
      while(!feof($file))
      {
          $line = fgets($file);
          $array = explode(":",$line);
          if(trim($array[0]) == $_POST['name'])
          {
              $finduser=true;
              break;
          }
      }
      fclose($file);
  
      if($finduser)
      {
          echo $_POST["name"];
          echo ' exists Already !';
          include 'account.php';
      }
      else
      {
          $file = fopen("users.txt", "a");
          fputs($file,$_POST["name"].":".$_POST["password"]."\r\n");
          fclose($file);
          echo $_POST["name"];
          echo "<p> registered successfully! Please Log In Now </p>";
          include 'account.php';
        exit();
          
      }
  }
  else
  {
      include 'account.php';
  }
?>

</div>   
  </div>

</body>
</html>

<?php


  
?>


