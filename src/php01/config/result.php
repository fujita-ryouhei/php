<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print "私の名前は、" . $name . "です";
echo "<br/>";

$choice = htmlspecialchars($_POST['choice'], ENT_QUOTES);
print "ご希望商品は、" . $choice;
echo "<br/>";

$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "注文数は、" . $number;