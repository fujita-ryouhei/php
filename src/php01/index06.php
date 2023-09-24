<?php
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2, 3);
echo $total;
echo "<br />";

function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo $total . "点なので合格です";
    }else {
        echo $total . "点なので不合格です";
    }
}
echo (exam(80, 60, 90));
echo "<br />";

function Square($base, $height)
{
  return $base * $height;
}
function Triangle($base, $height)
{
  return $base * $height / 2;
}
function Trapezoid($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo Square(5, 5) . "<br/>";
echo Triangle(7, 8) . "<br/>";
echo Trapezoid(4, 5, 4);