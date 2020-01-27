<?php
$cars = array("Volvo","BMW","Toyota");

foreach ($cars as $c) {
  echo "$c <br>";
}
for($x = 0; $x < count($cars); $x++) {
    echo $cars[$x];
    echo "<br>";
}
function value($t,$a)
{

	if ($t < 20) {
    echo "The value is less than 20.";
	}
	else
	echo "The value is greater than 20.";
		$c=$a+$t;
	return $c;
}

echo "<br>".value(50,10);
?>