<?php

session_start();

// Get thedform data
if (isset($_POST["submit"])) {
    //haves randoin  userid
    $userid = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 6);

  
    $counter = isset($_SESSION['counter']) ? intval($_SESSION['counter']) : 0;

  
    $counter++;

    $_SESSION['counter'] = $counter;

    
  
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

    $ageCategory = $_POST['ageCategory'];
    $getAlong = $_POST['3'];
    $suitableForChildren = $_POST['5'];
    $brag = $_POST['6'];
    $ownerName = $_POST['7'];
    $email = $_POST['8'];

    
    $filename = "petdata.txt";
    $file = fopen($filename, "a");

  
    fwrite($file, "$counter:$userid:$animal:$breed:$ageCategory:$gender:$getAlong:$suitableForChildren:$brag:$ownerName:$email\n");
    
    
    fclose($file);

    echo "Information has been recorded";

    header('Location: Q8find.php');
    exit();
}

?>
