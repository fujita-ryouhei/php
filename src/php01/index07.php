<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);
echo "<br/>";

echo $people[0] . "<br/>";

$people = [
    ["Tarou", 25, "men"],
    ["Jiro", 20, "men"],
    ["Hanako", 16, "women"]
];

foreach ($people as $person) {
    echo $person[0] . "(" . $person[1] . "歳" . $person[2] . ")";
    echo "<br/>";
}