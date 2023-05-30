




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
                         
                         <script>
                             function myalert(){
                                 alert("At Pawsome, we value your privacy and security. Rest assured that any information you provide will never be sold or misused in any way. Our website is built to protect both pet owners and our community. In the event that incorrect information is posted, Pawsome will not be held liable. Thank you for choosing us as your trusted source for pet-related information and services.");
                             }
                             </script>
                       </div>
    
</body>
</html>