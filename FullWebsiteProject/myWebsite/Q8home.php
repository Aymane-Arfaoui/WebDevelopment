
<?php

    session_start();
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <li><a href="Q8give.php">Give Away a Pet</a></li>
                    <li><a href="Q8contact.php">Contact Us</a></li>
                    <?php
                    if (isset($_SESSION['name'])) {
                      
                      echo '<li><a href="signout.php">Sign Out</a></li>';
                    } else {
                      
                      echo '<li><a href="account.php">Create an account</a></li>';
                    }
                    ?>
                    <div class="active"></div>
        
                </ul>
            </div>

                <div class="num1">
                    <div class="num2">
                        <h1 class="title1">Welcome To PAWSOME !</h1><br><br><br>
                            <p>    
                                Welcome to Pawsome, the ultimate destination for pet lovers on the hunt for their furry forever friend! Are you tired of scrolling through countless pet adoption websites with lackluster options? Well, say hello to your new one-stop shop! 
                            </p><br>

                            <p>
                            At Pawsome, we believe that every pet deserves a loving and caring home. That's why we've brought together a wide range of adoptable cats and dogs, all waiting for their chance to steal your heart. From cute and cuddly kittens to goofy and playful pups, our pet selection is guaranteed to make your heart skip a beat.
                            </p>
                            <p> <br>
                                So, what are you waiting for? Get ready to fall in love with your next best friend and join the Pawsome family today! Whether you're looking for a snuggly companion to curl up with on the couch or a hiking buddy to explore the great outdoors, we've got you covered. Come and see what the pawsome buzz is all about!
                                </p>

                            
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