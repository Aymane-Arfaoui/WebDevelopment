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
                <a href="Q8home.html" class="animal">
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
                        <h1 class="title1">Taking Care of Your Cat</h1><br><br><br>
                            <p>    
                                Taking care of a cat involves providing the necessary physical, emotional, and medical needs to keep them healthy and happy. Here are some general steps you can follow:
                            </p><br>

                            <p>
                                Feeding: Feed your cat a balanced and nutritious diet that meets their specific needs. Provide fresh water at all times.
                                Litter Box: Keep a clean litter box, and change the litter regularly to prevent odors.
                                Exercise: Encourage your cat to exercise daily through play, toys, and climbing trees.
                            </p>
                            <p> <br>
                                Grooming: Regularly brush and groom your cat to keep their fur healthy, remove dead hair, and prevent matting.
                                Health Care: Regular veterinary check-ups, vaccinations, and flea prevention are important for keeping your cat healthy.
                                Mental Stimulation: Provide mental stimulation for your cat through toys, scratching posts, and interactive
                                </p>

                            
                        </div>
                    </div>
        <div class="footer">
            <p style="white-space: nowrap; display: inline-block;"> Privacy/Disclaimer Statement</p>
             <button style="border-radius: 20px; width: 50px; display: inline-block; margin-left: 10px;" ondblclick="myalert()">Read</button>
             
             <script>
                 function myalert(){
                     alert("At Pawsome, we value your privacy and security. Rest assured that any information you provide will never be sold or misused in any way. Our website is built to protect both pet owners and our community. In the event that incorrect information is posted, Pawsome will not be held liable. Thank you for choosing us as your trusted source for pet-related information and services.");
                 }
                 </script>
           </div>

   
</body>
</html>