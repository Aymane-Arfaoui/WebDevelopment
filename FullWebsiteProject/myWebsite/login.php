

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
<div class="main-container1" style="margin-top: 20px;">
<div style="text-align:center;">

<?php

include '../myWebsite/templates/header.php';
include '../myWebsite/templates/footer.php';
if(isset($_POST["name"]) && isset($_POST["password"]))
{
    // check if user exists
    $file=fopen("users.txt","r");
    $finduser = false;
    while(!feof($file))
    {
        $line = fgets($file);
        $array = explode(":",$line);
        if(trim($array[0]) == $_POST['name'])
        {
            // username found
            $finduser=true;
            if(trim($array[1]) == $_POST['password'])
            {
                // password matches too, start a new session and load the form
                session_start();
                echo "Logged In Successfully";
                $_SESSION["name"] = $_POST["name"];
                header("Location: Q8give.php");
                exit();
            }
            else
            {
                // password is incorrect
                echo "Login failed. Incorrect password.";
                include 'account.php';
                break;
            }
        }
    }
    fclose($file);

    if(!$finduser)
    {
        // user not found
        echo "Login failed. Username not found.";
    }
}
?>

</div>   
  </div>

</body>
</html>

<?php


  
?>

