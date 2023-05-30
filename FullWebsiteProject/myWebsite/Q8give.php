

<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['name'])) {
    echo "Not Connected";
    include 'account.php';
    exit();
}
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
</div>

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
            <div class="main-container1">
                <div class="findtitle1">
                    <h1>GIVE A DOG OR A CAT !</h1>
                </div>
                <p class="error"> </p><br>
                    <div id="myForm">
                       
                            <form class="form1" action="givefile.php" method="POST">
                              
                                <style>
                                    .labels{
                                        display: inline-block;
                                         margin-right: 10px;
                                    }
                                 </style>

                                    <label class="labels">Select if you are donating a cat or dog: </label>
                                    <input class ="radio" type="radio" name="1" value="cat"/>cat
                                    <input class = "radio" type="radio" name="1" value="dog"/>dog<br/><br/>
                                    <labelclass="labels">Select the breed of your dog: </label>
                                    <input type="radio" name="2" value="labrador"/>labrador
                                    <input type="radio" name="2" value="german shepheard"/>german shepheard<br/><br/>
                                    <label class="labels"for="FirstName">Select the breed of your cat:</label>
                                    <input type="radio" name="2" value="british cat"/>british cat
                                    <input type="radio" name="2" value="persian cat"/>persian cat <br/><br/>
                        
                                    <label class="gender" for="gender">
                                       <label class="labels" >Gender: </label> 
                                        <input type="radio" name="Gender" id="F" value="female">Female
                                        <input type="radio" name="Gender" id="M" value="male">Male
                                    </label><br/>
                        
                                    <label class="labels" for="age">Preferred age of the animal</label>
                                    <select name="ageCategory">
                                        <option>0-5 </option>
                                        <option> 5-12 </option>
                                        <option> 12-20 </option>
                                        <option> more than 20 </option>
                        
                                    </select><br><br>
                                    <label >
                                        Do you want your pet to get along with others (dogs, cats, children) ?
                                    </label>
                                    <label >
                                        <input class ="radio" type="radio" name="3" value="getalong"/>YES
                                        <input class = "radio" type="radio" name="3" value="dontgetalong"/>NO<br/><br/>
                                    </label>


                                    <label>
                                       Suitable for a family with small children ?
                                    </label>
                                    <label >
                                        <input class ="radio" type="radio" name="5"/>YES
                                        <input class = "radio" type="radio" name="5"/>NO<br/><br/>
                                    </label>
                                    <label>
                                       brag about your PET (in a few words) !
                                     </label>
                                    <label class="labels">
                                        <textarea  name="6" rows="4" cols="50"></textarea><br><br>
                                    </label><br>

                                    <label class="labels" for="FirstName" >First Name of the OWNER:</label>
                                    <input type="text" id="FirstName" name="7" placeholder="Please enter your name" value=""/><br/><br>

                                    <label class="labels" for="email" >Email: </label>
                                 <label class="labels">
                                     <input type="email" id="email" name="8" value="" placeholder="email"/>
                                </label>
                               <p>Thank You for taking the time to fill out our survey !</label>
                                <p>
                                    <input id="button" name="submit" type="submit"/>
                                     <input id="button" type="reset"/><br><br><br>
                                </label>
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

             function validateForm() {
  let radios1 = document.getElementsByName('1');
  let selectedRadio1 = Array.prototype.slice.call(radios1).some(radio => radio.checked);

  let radios2 = document.getElementsByName('2');
  let selectedRadio2 = Array.prototype.slice.call(radios2).some(radio => radio.checked);

  let radios3 = document.getElementsByName('3');
  let selectedRadio3 = Array.prototype.slice.call(radios3).some(radio => radio.checked);

  let radios4 = document.getElementsByName('Gender');
  let selectedRadio4 = Array.prototype.slice.call(radios4).some(radio => radio.checked);

  let radios5 = document.getElementsByName('5');
  let selectedRadio5 = Array.prototype.slice.call(radios5).some(radio => radio.checked);

  let text6 = document.getElementsByName('6')[0];
  let selectedText6 = text6.value.trim();

  let text7 = document.getElementsByName('7')[0];
  let selectedText7 = text7.value.trim();

  let text8 = document.getElementsByName('8')[0];
  let selectedText8 = text8.value.trim();

  let ageCategory = document.querySelector('select[name="ageCategory"]').value;

  if (!selectedRadio1 || !selectedRadio2 || !selectedRadio3 || !selectedRadio4 || !selectedRadio5 || !selectedText6 || !selectedText7 || !selectedText8 || ageCategory === '') {
    alert('Please fill out all fields before submitting the form');
    return false;
  }
  return true;
}

document.addEventListener('DOMContentLoaded', () => {
  let form = document.querySelector('.form1');
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

