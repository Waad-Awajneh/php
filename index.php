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
 