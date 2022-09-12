<?php
# Q1 Write a PHP script to see if the specified year is a leap year or not.

$year = 2016;

if ($year % 4 == 0 && $year % 100 != 0  || $year % 400 == 0) {
    print " This year is a leap year <br>";
} else {
    print "This year is not a leap year <br>";
}

# Q2 Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20,
# we are in winter otherwise the season is summer.
// Sample Input: 27
// Sample Output: ‘It is summertime!’
$temperature = 20;

if ($temperature < 20) {
    print "It is wintertime! <br>";
} else {
    print "It is summertime! <br>";
}




// Q3 Write a PHP script to calculate the sum of the two integers. If the two values ​​are the same, then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12

$firstInteger = 2;
$secondInteger = 2;
$sum = 0;
if ($firstInteger == $secondInteger) {
    $sum = ($firstInteger + $secondInteger) * 3;
} else {
    $sum = ($firstInteger + $secondInteger);
}
echo "$sum <br>";


// Q4 Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false"



$firstIntege = 10;
$secondIntege = 10;

if (($firstIntege + $secondIntege) == 30) {
    echo "$firstIntege" + "$secondIntege";
} else {
    echo "false";
}

//Q5 Write in PHP script to check if the given positive number is a multiple of 3.
$num = 20;

if ($num % 3 == 0) {
    echo ' true';
} else {
    echo '<br>false';
}

//Q6 Write a PHP script to check if the integer value ​​is in the range of [20-50] inclusive.

$int = 50;
if ($int >= 20 && $int <= 50) {
    echo '<br> true';
} else {
    echo 'false';
}

//Q7 Write PHP script to find the largest number between the three integers
$arr = [1, 5, 9];
$largest = 0;
foreach ($arr as $n) {
    if ($n > $largest) {
        $largest = $n;
    }
}
echo "<br>$largest";

//Q8 Write PHP script to calculate the monthly electricity bill according to these rules
$unit = 145;
$pill = 0;

if ($unit <= 50) {
    echo $pill = $unit * 2.50;
} elseif ($unit <= 150) {
    echo $pill = $unit * 5;
} elseif ($unit <= 250) {
    echo   $pill = $unit * 6.20;
} else {
    echo  $pill = $unit * 7.50;
}




# Q9
/*
 Write php script to make a calculator, the calculator should contain the four main operations 
    Addition
    Subtraction
    Multiplication
    Division */

$num1 = 3;
$num2  = 9;

$op = '+';

switch ($op) {
    case '+':
        print $num1 + $num2;
        break;
    case '-':
        print $num1 - $num2;
        break;
    case '':
        print $num1 * $num2;
        break;
    case '/':
        print $num1 / $num2;
        break;
}
echo "<br><br>";



# Q10

/*Write php script to check if a person is eligible to vote, minimum age required for voting is 18.
      Sample Input: 15
      Sample Output: ‘is no eligible to vote’
*/

$age = 15;
if ($age < 18)
    print "is not eligible to vote";
else
    print "eligible to vote";

echo "<br><br>";



# Q11
/*  Write php script  to check whether a number is positive, negative or zero

     Sample Input: -60
      Sample Output: ‘Negative’ */

$posORneg = -60;
if ($posORneg < 0)
    print "Negative";
elseif ($posORneg > 0)
    print "Positive";
else
    print "zero";

echo "<br><br>";


# Q12

/*Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

  Sample Inputs: [60,86,95,63,55,74,79,62,50]
  Sample Output: ‘D’ */

$marks = array(60, 86, 95, 63, 55, 74, 79, 62, 50);

$sum = 0;

foreach ($marks as $val) {
    $sum += $val;
}
$avg = $sum / count($marks);
if ($avg < 60)
    print "F";
elseif ($avg < 70)
    print "D";
elseif ($avg < 80)
    print "C";
elseif ($avg < 90)
    print "B";
elseif ($avg < 100)
    print "A";



//  Q13   Write a script to generate the following paragraph 

// "The memory of that scene for me is like a frame of film forever frozen at that moment:
//  the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// The words 'red', 'green' and 'white' should come from $colors array.

$colors = array('red', 'green', 'white');
echo "<pre>";
echo <<<"paragraph"
   The memory of that scene for me is like a frame of film forever frozen at that moment:
   the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
paragraph;
echo "<pre>";

#Q13
// $colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list :
// Expected Output:  
// green
// red
// white

$colors = array('red', 'green', 'white');
echo "<pre>";
echo <<<"unorderedList"
       <ul>
         <li> $colors[0] </li>
         <li> $colors[1] </li>
         <li> $colors[2] </li>
      </ul>
    unorderedList;
echo "</pre>";



#Q14
// $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 

$cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

echo "<pre>";
foreach ($cities as $capital => $city) {
    echo "The capital of $capital is  $city \n";
}
echo "</pre>";



#Q15
// $color = array (4 => 'white', 6 => 'green', 11=> 'red');
// Write a PHP script to display the first element of the above array. 
// Expected Output:  white

$color = array(4 => 'white', 6 => 'green', 11 => 'red');
print $color['4'];




#Q16
// Write a PHP script that inserts a specific new item in an array in any position.
// Sample Input:
// Array 1 2 3 4 5   
// Location: 4
// New Item: $
// Expected Output: 1 2 3 $ 4 5

function addNewItem($arr, $item, $location)
{
    $arr[$location] = $item;
    return $arr;
}

$color = array(4 => 'white', 6 => 'green', 11 => 'red');
$color = addNewItem($color, "blue", '10');
print_r($color);




#Q17
// Write a PHP script to sort the following associative array depending on the key value [asc] : 
// Sample Input: 
// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);

echo "<pre>";
foreach ($fruits as $alph => $fruit) {
    echo "$alph =  $fruit \n";
}
echo "</pre>";




#Q18
// Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 

// Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

// Expected Output:
// Average Temperature is: 70.6 
// List of seven lowest temperatures: 60, 62, 63, 63, 64, 
// List of seven highest temperatures: 76, 78, 79, 81, 85,








// Functions


#Q1
// Write a PHP script to check if the inserted number is a prime number 

// Sample Input:  3
// Expected Output: 3 is a prime number 




function test_prime($n) {
    if ($n === 1) {
      return "$n is not a prime number ";
    }
    elseif ($n === 2) {
      return "$n is a prime number ";;
    }
    else {
      for ($x = 2; $x <= sqrt($n); $x++) {
        if ($n % $x === 0 && $x != $n) {
          return  "$n is not a prime number ";
        }
      }
      return  "$n is a prime number ";
    }
  }
  echo "<pre>";
  echo test_prime(8);
  echo "<br>";
  echo test_prime(6);
  echo "<br>";
  echo test_prime(3);
  echo "<br>";
  echo test_prime(10);
  echo "<br>";
  echo test_prime(11);
  echo "</pre>";




#Q2 
// Write a PHP script to reverse a string 
// Sample Input:  remove
// Expected Output: evomer
$str = "remove";
echo Strrev($str);


#Q3
//  Write a PHP script to check if the all string characters are lower cases

// Sample Input:  remove
// Expected Output: Your String is Ok 

echo "<pre>";
$str ="remove";
if (ctype_lower($str)) {
    echo "Your String is Ok ";
}else 
echo "Your String is NOT Ok ";

echo "</pre>";


/* Q4
 Write a PHP function to swap to variables?
 
Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10 

 */


 // Using list() method –
 function swap ($x,$y){
 return list($x,$y)=array($y ,$x);

 }

//compact() method create array containing variables and their values.

 function swap2 ($x,$y){
    $temp=$x;
    $x=$y;
    $y=$temp;
   return compact('x','y'); 
 }

 
echo "<pre>";
print_r( swap(2,10));
echo "<hr>";
print_r (swap2(2,10));

echo "</pr,e>";



/*Q6
*Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.
 
        Sample Input:  407
        Expected Output: 407 is Armstrong Number 
 */
function isArmstrong($num){
//     $count=1;
//     while($num/10>1){
//         $count++;
//        $num=$num/10;
//     }
// echo $count; 
$armNum=0;

$digits=(string)$num;
for($i=0;$i<strlen($digits);$i++){
$armNum+=pow( $digits[$i],3);
}
if ($armNum==$num){
  print_r ("is Armstrong Number\n" );  
}else{
    print_r ("is Not Armstrong Number \n" ) ; 
}
}

isArmstrong(407);


#Q7
/*
  
Write a PHP function that checks whether a passed string is a palindrome or not?
Sample Input:  Eva, can I see bees in a cave?
Expected Output: Yes it is a palindrome 
  
*/

function isPalondrome($text){
// echo preg_replace("/\s+||\W+/", "", $text);echo "<br>";  echo preg_replace("/\s+||\W+/", "",Strrev($text));
//    echo str_replace (' ','', Strrev($text));echo "<br>";
//    echo str_replace (' ','',$text); strcmp("Hello world!","Hello world!") 

   if(strcmp(Strtolower(
         preg_replace("/\s+||\W+/", "", $text)) , 
     Strtolower(
         preg_replace("/\s+||\W+/", "",Strrev($text))
                )
            )
    )
   {
    print_r ("Yes it is a palindrome \n" ) ; 
   }else{
    print_r ("No it is NOT a palindrome \n" ) ; 

   }
}

isPalondrome("Eva, can I see bees in a cave");





/* #Q8
    Write a PHP function to remove duplicates from an array ?
    
    Sample Input:  
    $array1 = array(2, 4, 7, 4, 8, 4);
    
    Expected Output:
    $array1 = array(2, 4, 7, 8);
 
 */

$array1 = array(2, 4, 7, 4, 8, 4);
$array1=array_unique($array1);

print_r($array1);