<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . "<br />";
}
echo "<br />";

$count = 0;

while($count < 20){
    $count += 1;
    echo $count . "<br />";
}

$int = 0;

while ($int <= 100) {
    if ($int === 20) {
        break;
    }

    if ($int % 3 === 0) {
        $int++;
        continue;
    }
    echo $int . "<br />";
    $int++;
}

$num = 0;

do {
    echo "num = " . $num . "<br />";
    $num++;
} while ($num < 3);

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <=50; $i++) {
    if ($i % 15 === 0) {
        echo $FizzBuzz . "<br />";
    }
    elseif ($i % 5 === 0) {
        echo $Buzz . "<br />";
    }
    elseif ($i % 3 === 0) {
        echo $Fizz . "<br />";
    }
    else {
        echo $i . "<br />";
    }
}

for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        echo "●";
    }
    echo "<br />";
}