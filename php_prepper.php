<?php 
// Need this for the WEB and General Debug to work right!
echo "<pre>\n\n";

// --------------------- Printing / Echoing ------------------------
// Echo Lines - echo  returns a NULL
    echo "I like PHP!";

// Print New Line Chars (2 of them)
    echo "\n\n";

// Print Lines print() returns a 1
    print("I love PHP!\n\n");

// Variables and printing via addition
    $txt1 = "LOVE";
    print("I crazy ".$txt1." PHP!\n\n");

// Variables and printing via referencing)
    $txt2 = "HATE";
    print("I don't {$txt2} PHP!\n\n");



// --------------------- ARRAYS ------------------------
// (ARRAY FUNCTIONS: https://www.w3schools.com/php/php_ref_array.asp) 

//Basic Array Creation, Referencing, & Printing
    $cars = array("Volvo", "BMW", "Toyota");
    print( "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".\n\n");
    print(count($cars));
    print( "\n\n" );


    $names = array( "John", "Jacob", "Tom", "Tim");
    echo "Array...
    ";
    foreach( $names as $value ) {
    echo "Value = $value 
    ";
    }
    echo "
    Displaying Array Values using echo...
    ";
    foreach( $names as $value ) {
    print( "Value = $value 
    ");
    }
    echo "
    Displaying Array Values using print_r...
    ";
    print_r($names);



// Array Indexing
    // index automatically starting at 0
    $cars2 = array("Volvo", "BMW", "Toyota");
    echo "I like my " . $cars2[0] . "\n";
    echo "I also like my " . $cars2[2] . "\n\n";

    // index can be assigned manually
    $cars3[0] = "Ford";
    $cars3[1] = "Chevy";
    $cars3[2] = "Toyota";
    echo "I really like my " . $cars3[0] . "\n";
    echo "I really also like my " . $cars3[2] . "\n\n";    

    //Looping through indexed array
    $cars4 = array("Kia", "Hyundai", "Mazda");
    $arrlength4 = count($cars4);
    
    for($x = 0; $x < $arrlength4; $x++) {
      echo $cars4[$x];
      echo "\n";
    }
    echo "\n";


    // Associative Arrays
    $age1 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // OR
    $age1 = array(
            "Peter"=>"35", 
            "Ben"=>"37", 
            "Joe"=>"43"
        );
    echo "Peter is " . $age1['Peter'] . " years old.\n\n";

    foreach($age1 as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "\n";
      }
    echo "\n";

    
    // Multi Dimensional Arrays
    $cars5 = array (
        array("Tesla",22,18),
        array("Dodge",15,13),
        array("Mitsubishi",5,2),
        array("Genesis",17,15)
      );

    // Print the MD Arrays
    echo $cars5[0][0].": In stock: ".$cars5[0][1].", sold: ".$cars5[0][2].".\n";
    echo $cars5[1][0].": In stock: ".$cars5[1][1].", sold: ".$cars5[1][2].".\n";
    echo $cars5[2][0].": In stock: ".$cars5[2][1].", sold: ".$cars5[2][2].".\n";
    echo $cars5[3][0].": In stock: ".$cars5[3][1].", sold: ".$cars5[3][2].".\n";
    echo "\n\n";
    
    // Loop Through the MD Arrays
    for ($row = 0; $row < 4; $row++) {
        echo "Row number $row\n";
        for ($col = 0; $col < 3; $col++) {
          echo "-".$cars5[$row][$col]."\n";
        }
    }
    echo "\n";

    // Sorting Numeric Arrays
    $numbers2 = array(4, 6, 2, 22, 11);
    print_r($numbers2);
    sort($numbers2);
    print_r($numbers2);
    rsort($numbers2);
    print_r($numbers2);
  

    // Sorting Arrays
    $cars6 = array("Lincoln","Cadilac","GMC");
    print_r($cars6); 
    sort($cars6);
    print_r($cars6);
   
    $age2 = array("Ben"=>"37", "Peter"=>"35", "Joe"=>"43");
    print_r($age2);
    asort($age2);
    print_r($age2);
   
    $age3 = array("Ben"=>"37", "Peter"=>"35", "Joe"=>"43");
    print_r($age3);
    ksort($age3);
    print_r($age3);
   
   
    $age4 = array("Ben"=>"37", "Peter"=>"35", "Joe"=>"43");
    print_r($age4);
    arsort($age4);
    print_r($age4);
    krsort($age4);
    print_r($age4);
   
// $GLOBALS
    $g_x = 75;
    $g_y = 25;
    
    function t_addition() {
        $GLOBALS['g_z'] = $GLOBALS['g_x'] + $GLOBALS['g_y'];
    }
    
    t_addition();
    echo $g_z."\n\n";

// SERVER Variables (only works on WEB)
    // echo $_SERVER['PHP_SELF'] . "\n";
    // echo $_SERVER['SERVER_ADDR'] . "\n";
    // echo $_SERVER['SERVER_NAME'] . "\n";
    // echo $_SERVER['REQUEST_METHOD'] . "\n";
    // echo $_SERVER['REQUEST_TIME'] . "\n";
    // echo $_SERVER['HTTP_REFERER'] . "\n";
    // echo $_SERVER['REMOTE_ADDR'] . "\n";
    // echo $_SERVER['SCRIPT_NAME'] . "\n";
    // echo $_SERVER['SCRIPT_URI'] . "\n";
    // echo "\n";


// $_REQUEST Variables (only works on WEB)
        // $incoming_name = $_REQUEST['incoming_name'];
        // if (empty($incoming_name)) {
        // echo "Incoming Name is empty";
        // } else {
        // echo $incoming_name;
        // }


// REGEX Usage
    $str10 = "Visit W3Schools";
    $pattern10 = "/w3schools/i";
    echo preg_match($pattern10, $str10) . "\n\n"; // Outputs 1

    $str11 = "The rain in SPAIN falls mainly on the plains.";
    $pattern11 = "/ain/i";
    echo preg_match_all($pattern11, $str11) . "\n\n"; // Outputs 4

    $str12 = "Visit Microsoft!";
    $pattern12 = "/microsoft/i";
    echo preg_replace($pattern12, "W3Schools", $str12) . "\n\n"; // Outputs "Visit W3Schools!"



// If .. Else .. ElseIF
    $t = date("H");

    if ($t < "10") {
    echo "Have a good morning!";
    } elseif ($t < "20") {
    echo "Have a good day!";
    } else {
    echo "Have a good night!";
    }






// Switch Statements
    $favcolor = "red";

    switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!\n\n";
        break;
    case "blue":
        echo "Your favorite color is blue!\n\n";
        break;
    case "green":
        echo "Your favorite color is green!\n\n";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!\n\n";
    }







// LOOPS
    //While Loops
    $x = 0;

    while($x <= 100) {
        echo "The number is: $x \n";
        $x+=10;
        }

    //DO While Loops
    $x = 6;

    do {
        echo "The number is: $x \n";
        $x++;
    } while ($x <= 5);


    // For Loops
    for ($x = 0; $x <= 100; $x+=10) {
        echo "The number is: $x \n";
      }

    
    // Foreach Loops
      $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

      foreach($age as $x => $val) {
        echo "$x = $val\n";
      }


    // Continue / Break Statements
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
          continue;
        }
        echo "The number is: $x \n";
      }




      $x = 0;
      while($x < 10) {
        if ($x == 4) {
          break;
        }
        echo "The number is: $x <br>";
        $x++;
      }



    $x = 0;
    while($x < 10) {
    if ($x == 4) {
        $x++;
        continue;
    }
    echo "The number is: $x <br>";
    $x++;
    }




// File Handling
    // File on the machine: webinfo.txt (contents below)
        // AJAX = Asynchronous JavaScript and XML
        // CSS = Cascading Style Sheets
        // HTML = Hyper Text Markup Language
        // PHP = PHP Hypertext Preprocessor
        // SQL = Structured Query Language
        // SVG = Scalable Vector Graphics
        // XML = EXtensible Markup Language

    echo readfile("webinfo.txt");














// Define Function to be lazy with \n
function echol($myText) {
    echo $myText."\n\n";
}
echol("Basic text string for new function");












echo "\n\n</pre>";
?>
