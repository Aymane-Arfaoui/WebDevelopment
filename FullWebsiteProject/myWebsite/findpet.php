

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include '../myWebsite/templates/header.php';
include '../myWebsite/templates/footer.php';

?>

   <!-- <div style="text-align: center;" ><br><br>-->
    <?php

if (isset($_POST["submit"])) {
   
    $animal = $_POST['1'];
    if ($animal == 'cat') {
       $animal = "cat";
    }else
    $animal == 'dog';

    $breed = $_POST['2'];
    if ($breed == 'labrador') {
        $breed = "labrador";
     }else if($breed == 'german shepheard'){ 
     $breed = 'german shepheard';
     }else if($breed == 'british cat'){ 
        $breed = 'british cat';
     }else if($breed == 'persian cat'){ 
        $breed = 'persian cat';
     }

    $gender = $_POST['Gender'];
    if ($gender == 'female') {
        $gender = "female";
     }else
     $gender == 'male';

    $age = $_POST['ageCategory'];
    $getAlong = $_POST['3'];

    $file = fopen("petdata.txt", "r");

    $found_pet = false;

    while(!feof($file)) {
        $line = fgets($file);
        $pet_info = explode(":", $line);
       
    
        if ($animal == $pet_info[2] && $breed == $pet_info[3] && $gender == $pet_info[5] && $age == $pet_info[4] && $getAlong == $pet_info[7]) {
            $found_pet = true;
             echo "<p style='color: green; text-align: center;'>We found a pet that matches your preferences. Here is his email to contact him: " . $pet_info[10] . "!</p>";
            include 'Q8browse.php';
            break;
       }
    }

    if (!$found_pet) {

        echo "<p style='color: red; text-align:center;'>Sorry, we could not find a pet that matches your preferences.</p>";
        include 'Q8browse.php';
    }

    fclose($file);
}

?>


</div>
</body>
</html>


