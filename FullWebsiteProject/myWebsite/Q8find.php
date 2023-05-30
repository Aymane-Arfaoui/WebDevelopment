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
            <div class="main-container1">
                    <h1>FIND A DOG OR A CAT !</h1>
                <p> Help us find you the PERFECT for YOU !</p><br>
                    
                       
                            <form class="form" id="myForm" method="POST" action="findpet.php">
                                    <label>Select either cat or dog: </label>
                                    <input class ="radio" type="radio" name="1"  value="cat"/>cat
                                    <input class = "radio" type="radio" name="1" value="dog"/>dog<br/><br/>
                                    <label>Select the breed of your dog: </label>
                                    <input type="radio" name="2" value="labrador"/>labrador
                                    <input type="radio" name="2" value="german shepheard"/>german shepheard<br/><br/>
                                    <label for="FirstName">Select the breed of your cat:</label>
                                    <input type="radio" name="2" value="british cat"/>british cat
                                    <input type="radio" name="2" value="persian cat"/>persian cat <br/><br/>
                        
                                    <label class="gender" for="gender">
                                       <label>Gender: </label> 
                                        <input type="radio" name="Gender" id="F" value="female">Female
                                        <input type="radio" name="Gender" id="M" value="male">Male
                                    </label><br/><br/>
                        
                                    <label for="age">Preferred age of the animal</label>
                                    <select name="ageCategory">
                                        <option>0-5 </option>
                                        <option> 5-12 </option>
                                        <option> 12-20 </option>
                                        <option> more than 20 </option>
                        
                                    </select><br><br>
                                    <label>
                                        Do you want your pet to get along with others (dogs, cats, children) ?
                                    </label><br><br>
                                    <label>
                                        <input class ="radio" type="radio" name="3" />YES
                                        <input class = "radio" type="radio" name="3" />NO<br/><br/>
                                    </label>
                        
                               <label>Thank You for taking the time to fill out our survey !</label>
                                <label>
                                    <input id="button" name="submit" type="submit"/>
                                    <input id="button" type="reset"/>
                                </label>
                            </form>
            <div class="form">
              
            </div>
        </div>

     <div class="footer">
        <p style="white-space: nowrap; display: inline-block;"> Privacy/Disclaimer Statement</p>
         <button style="border-radius: 20px; width: 50px; display: inline-block; margin-left: 10px;" ondblclick="myalert()">Read</button>
         
         <script>
             function myalert(){
                 alert("At Pawsome, we value your privacy and security. Rest assured that any information you provide will never be sold or misused in any way. Our website is built to protect both pet owners and our community. In the event that incorrect information is posted, Pawsome will not be held liable. Thank you for choosing us as your trusted source for pet-related information and services.");
             }

             function validateForm() {
                const radio1 = document.getElementsByName("1");
                const selectedRadio1 = Array.prototype.slice.call(radio1).some((radio) => radio.checked);

                const radio2 = document.getElementsByName("2");
                const selectedRadio2 = Array.prototype.slice.call(radio2).some((radio) => radio.checked);

                const radio3 = document.getElementsByName("3");
                const selectedRadio3 = Array.prototype.slice.call(radio3).some((radio) => radio.checked);

                const gender = document.getElementsByName("Gender");
                const selectedGender = Array.prototype.slice.call(gender).some((radio) => radio.checked);

                const ageCategory = document.querySelector('select[name="ageCategory"]').value;

                if (!selectedRadio1 || !selectedRadio2 || !selectedRadio3 || !selectedGender || ageCategory === "") {
                    alert("Please fill out all fields before submitting the form");
                    return false;
                }

                
                
                return true;
                }

                document.addEventListener('DOMContentLoaded', () => {
                let form = document.querySelector('.form');
                form.addEventListener('submit', (event) => {
                    if (!validateForm()) {
                    event.preventDefault();
                    }
                });
                });



                        

             </script>
       </div>
</body>
</html>