<?php
$a = 15;
$b = 3;
$c = 10;

$answer1 = $a + $b ;
$answer2 = $a - $b ;
$answer3 = $a * $b ;
$answer4 = $a / $b ;
$answer5 = $a % $c ;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo $answer5;

$d = 5;

$a = $b;
$c += $d;

echo "<br />";
echo $a;
echo "<br />";
echo $c;
echo "<br />";

$a = 20;
$b = 5;

echo ($a > $b);
echo "<br />";

echo (10 < $a) && ($a < 30);
echo "<br />";

$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;