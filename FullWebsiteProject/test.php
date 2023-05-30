
<?php
print "<table>";

?> 



<h2>Function 2</h2>
    <label>Please enter a number</label>
        <input type="text" name="string"></input>
        <button type="submit">Submit</button>
        <br>

        <?php
        $string  = $_GET['string'];
        function uppercaseFirstandLast($string){
        if(isset($string)){
            $words = (explode(" ", $string));
            $word = "";
            echo "$words";
         }
        }
        ?>