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
    <title>Create Your Account</title>

</head>
<body>
    <div style="text-align: center; color:grey; size:2px;">
    <?php



if (!isset($_SESSION['name'])) {
    echo "Please Log in to give a pet";
}
?>

</div>
    <style>
    #signup-button{
    width: 180px;
    height: 40px;
    color: whitesmoke;
    font-size: 20px;
    background: #0d74f5;
    border: 0;
    border-radius: 20px;
    outline: none;
    margin-top: 30px;
    font-size: 20px;
    
}
        #signup-button:hover{
            background-color: black;
            color: white;
        }
    </style>
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
                      // user is not logged in, show "Create an account" link
                      echo '<li><a href="account.php">Create an account</a></li>';
                    }
                    ?>
                    <div class="active"></div>
        
                </ul>
            </div>
            <div class="main-container1" style="margin-top: 150px;">
               <div style="margin-right: 80px;">
                <div class="findtitle1">
                    <h1>Create Your Account !</h1>
                </div>
                
             
                    <form id="form" action="signup.php" method="POST"> 
                        <div>
                                <label for="name">Username:</label>
                                <input style="width: 30%;" type="text" id="name" name="name" placeholder="Please enter a Username" required>
                        </div>

                        <div>
                                <label for="password">Password:</label>
                                <input placeholder="Please enter a password" style="width: 30%;box-sizing: border-box; border-radius: 5px; border: 1px solid #ccc;
                                    margin-bottom: 10px; padding: 5px;" type="password" id="password" name="password" required>
                        </div>
                        <button id="signup-button">Sign Up</button>
                    </form>
                </div>
                    <div style="padding-left: 450px; margin-top: -280px;">
                    <h1>Log In !</h1>
                    <form action="login.php" method="POST"> 
                        <div>
                                <label for="name">Username:</label>
                                <input style="width: 40%;" type="text" id="name" name="name" placeholder="Please enter a Username" required>
                        </div>

                        <div>
                                <label for="password">Password:</label>
                                <input placeholder="Please enter a password" style="width: 40%;box-sizing: border-box; border-radius: 5px; border: 1px solid #ccc;
                                    margin-bottom: 10px; padding: 5px;" type="password" id="password" name="password" required>
                        </div>
                        <input for="submit" type="submit" value="Log In" id="button"></input>
                    </form>
                </div>
            </div>
     <div class="footer">
        <p style="white-space: nowrap; display: inline-block;"> Privacy/Disclaimer Statement</p>
         <button style="border-radius: 20px; width: 50px; display: inline-block; margin-left: 10px;" ondblclick="myalert()">Read</button>
         
         <script>
             function myalert(){
                 alert("At Pawsome, we value your privacy and security. Rest assured that any information you provide will never be sold or misused in any way. Our website is built to protect both pet owners and our community. In the event that incorrect information is posted, Pawsome will not be held liable. Thank you for choosing us as your trusted source for pet-related information and services.");
             }

             const signupButton = document.getElementById("signup-button");
                signupButton.addEventListener("click", validateForm);

             function validateForm(event) {
                event.preventDefault(); 
                const username = document.getElementById("name").value;
                const password = document.getElementById("password").value;
                const usernameRegex = /^[a-zA-Z0-9]+$/;
                const passwordRegex = /^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{4,}$/;
                
                if (!usernameRegex.test(username)) {
                    alert("Invalid username. Username can only contain letters (both upper and lower case) and digits.");
                    return false;
                }
                
                if (!passwordRegex.test(password)) {
                    alert("Invalid password. Password must be at least 4 characters long and have at least one letter and one digit.");
                    return false;
                }
                
                document.getElementById("form").submit();
                }


             

            
             </script>
       </div>
    
</body>
</html>