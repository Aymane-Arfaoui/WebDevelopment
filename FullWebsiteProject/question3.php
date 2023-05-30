<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3 </title>
</head>
<body style="text-align:center;">
<br><br>
<h2>Form</h2>
<form method="POST">
    <label>Name: </label>
    <input type="text" placeholder="Enter your name" name="name" ></input><br><br><br>
    <label>Phone Number: </label>
    <input type="text" placeholder="ddd-ddd-dddd" name="phone"  ></input><br><br>
    <input type="Submit"></input>
   <br><br>
   <?php 
    
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $pattern = '/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/';
    if(isset($phone) && isset($name)){
        validate($phone);
    }else{
        echo "Please fill out both entries";
    }

    function validate($phone){
        $name = $_POST['name'];
         $pattern = '/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/';
        if(preg_match($pattern,$phone)){ 
        echo "Thank you, $name. Your telephone number, ($phone), is valid.";
        }
    else
    echo "$name, Please respect the format for the phone number";
    }
    ?>
</form>
</body>
</html>