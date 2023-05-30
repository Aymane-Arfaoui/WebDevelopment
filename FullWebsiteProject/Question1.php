<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body style="text-align: center;">
    <h2>Function 1</h2>
<form method="get">
    <label>Please enter a number</label>
        <input type="number" name="input"></input>
        <button type="submit">Submit</button>
        <br>
</form>
    <?php 
    $input = $_GET['input'];
    if(isset($input) && $input >= 0){
        $result = findSummation($input);
        echo $result;
    }else if($input < 0)
        echo "ERROR: Must be a positive number";
    function findSummation($input){
        $sum = 0;
        if (is_numeric($input)){
            for($i = 1; $i<=$input; $i++){
                $sum +=$i;
            }   
            return "The addition for $input is: ".$sum;
        }
    }
    ?>

<h2>Function 2</h2>
<form method="get">
    <label>Please enter a number</label>
        <input type="text" name="string"></input>
        <button type="submit">Submit</button>
        <br>
</form>

        <?php
        $string  = $_GET['string'];
        if(isset($string)){
            $result = uppercaseFirstandLast($string);
            echo $result;
         }
        function uppercaseFirstandLast($string){
            if(isset($string)){
                $words = explode(" ", $string);
                $output = "";

                foreach($words as $word){

                $first = strtoupper(substr($word, 0, 1));
                $last = strtoupper(substr($word, -1));
                $output .= $first . substr($word, 1, -1) . $last . " ";
                
            }

                return "the modified string is: ". $output;
            }
        }
        ?>

<h2>Function 3</h2>
<style>
    #num1{
        color: red;
    }
</style>

<form method="get">
    <label>Please enter an array of numbers <label id="num1">(seperated by a COMMA) </label></label>
        <input type="text" name="arr"></input>
        <button type="submit">Submit</button>
        <br>
</form>

    <?php
        $arr  = $_GET['arr'];
        if(isset($arr)){
            $result = findAverage_and_Median($arr);
            echo $result;
         }
        function findAverage_and_Median($arr){
            if(isset($arr)){
                $arrnum = explode(",", $arr);
              
                // calculate the average
                $sum = array_sum($arrnum);
                $ctr = count($arrnum);
                $avg = $sum/$ctr;
                

                //calculate the median 
                $length = count($arrnum);

                //divide lenght by 2
                $half = $length/2;

                //index 

                $halfindex = (int) $half;
                //get the median number
                $median = $arrnum[$halfindex];

                echo "The average is: ".$avg. "<br> And the median is: " . $median;
            }
        }
    ?>

    <h2>Function 4</h2>
    <form method="get">
        <label>Please enter a string of numbers <label id="num1">(seperated by a SPACE) </label>  </label>
            <input type="text" name="func4"></input>
            <button type="submit">Submit</button>
            <br>
    </form>

    <?php
        $str = $_GET['func4'];
        if(isset($str)){
            $output = find4Digits($str);
            //echo $output;
        }

        function find4Digits($str){
                $num = explode(" ",$str);
                for($i=0; $i<4; $i++){
                    echo " ".$num[$i]."";
                }
                
        }

    ?>


</body>
</html>