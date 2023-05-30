<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Q8style.css">
    <title>Pawsome</title>
</head>
<body>
        <div class="sidebar">
                <a href="Q8home.php" class="animal">
                    <img src="animal.png" alt="pawsome" class="logoimg">
                </a>

                <div onload="setTimeout(function() {
                    Update();
                    }, 1000);" id="date">
                </div>
                <script>
                    function Update() {
                      let today = new Date();
                      document.getElementById("date").innerHTML = today;
                      setTimeout(function() {
                        Update();
                      }, 1000);
                    }
                    Update();
                  </script>
                <ul class="links">
                <li><a href="Q8home.php">Home</a></li>
                  <!--  <li><a href="Q8browse.php">Browse Available Pets</a></li> -->
                    <li><a href="Q8find.php">Find a Dog/Cat</a></li>
                    <li><a href="Q8dog.php">Dog Care</a></li>
                    <li><a href="Q8cat.php">Cat Care</a></li>
                    <li><a href="Q8give.php">Give a Pet</a></li>
                    <li><a href="Q8contact.php">Contact Us</a></li>
                    <?php
                    if (isset($_SESSION['name'])) {
                      // user is logged in, show "Sign Out" link
                      echo '<li><a href="signout.php">Sign Out</a></li>';
                    } else {
                      // user is not logged in, show "Create an account" link
                      echo '<li><a href="account.php">Create an account</a></li>';
                    }
                    ?>
                    <div class="active"></div>
        
                </ul>
            </div>
                <div class="num1">
                    <div class="num2">
                        <h1 class="title1">Browse A PET ! </h1>
                         <div> 
                            <p> <b>Meet Rex</b></p> <br/>
                               <p>Rex is a loyal and energetic dog who loves to play and go for walks. He is always eager to please his owner and is quick to learn new tricks and commands. He is also protective of his family and can be wary of strangers</p><br/>
                            <img src="dog1.jpeg"><br/>
                            <input id="button" type="submit" value="Interested"/>

                        </div>  

                        <div> 
                              <p> <b>Meet Drago</b></p><br/>
                                   <p>Drago is most likely a friendly and loyal companion who loves to play and cuddle with his owners. He might enjoy going on walks or runs with his owners. He also has a protective nature.</p><br/>
                                <img src="dog2.jpg"><br/>
                                <input id="button" type="submit" value="Interested"/>
    
                            </div> 
                            <div> 
                                    <p> <b>Meet Banjo</b></p><br/>
                                       <p>Banjo is the best</p><br/>
                                    <img style= "width: 70px;" src="dog3.jpeg"><br/>
                                    <input id="button" type="submit" value="Interested"/>
        
                                </div> 
                                <div>
                                <?php
$filename = "petdata.txt";

if(file_exists($filename)) {
    // Opens fiels
    $file = fopen($filename, "r");
    
    echo "<table border='1'>
            <tr>
                <th>Animal</th>
                <th>Breed</th>
                <th>Age Category</th>
                <th>Gender</th>
               
            </tr>";

    while(!feof($file)) {
        $line = fgets($file);
        $pet_data = explode(":", $line);

        echo "<tr>";
        for ($i = 1; $i < 6; $i++) {
            echo "<td>" . $pet_data[$i] . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    // Close the file
    fclose($file);

} else {
    echo "File not found!";
}

?>
 <input id="button" type="submit" value="Interested"/>



                                </div>
                        </div>
                    </div>

                    <div class="footer">
                        <p style="display: inline-block;"> Privacy/Disclaimer Statement</p>
                         <button style="border-radius: 20px; width: 50px; display: inline-block; margin-left: 10px;" ondblclick="myalert()">Read</button>
                         
                         <script>
                             function myalert(){
                                 alert("At Pawsome, we value your privacy and security. Rest assured that any information you provide will never be sold or misused in any way. Our website is built to protect both pet owners and our community. In the event that incorrect information is posted, Pawsome will not be held liable. Thank you for choosing us as your trusted source for pet-related information and services.");
                             }
                             </script>
                       </div>
    
</body>
</html>