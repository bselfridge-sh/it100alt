<?php 
// Need this for the WEB and General Debug to work right!
echo "<pre>\n\n";


// Print/Echo Lines
echo "I love PHP!";


// Print New Line Chars (2 of them)
echo "\n\n";


// Define Function to be lazy with \n
function echol($myText) {
    echo $myText."\n\n";
}
echol("Basic text string for new function");


// Variables and printing
$txt1 = "LOVE";
echol("I crazy ".$txt1." PHP!");


// Variables and printing (Referencing)
$txt2 = "HATE";
echol("I don't {$txt2} PHP!");


// Arrays 1
$cars = array("Volvo", "BMW", "Toyota");
echol( "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".");
echol(count($cars));



echo "\n\n</pre>";
?>
