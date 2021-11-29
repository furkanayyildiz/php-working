<?php 

    // indexed arrays
	$peopleOne = ["Ahmet","Ali","Veli"];
    $peopleTwo = array("Burcu","Buse");

    //echo $peopleOne[1]; // printing index of array
    $ages = [10, 20, 30, 40];
    $ages[1] = 25; // changing element value

    //adding new element which is exting array
    $ages[] = 50;
    array_push($ages, 60);
    //print_r($ages);
    //echo count($ages);

    //sorting 2 array into array
    $peopleThree = array_merge($peopleOne, $peopleTwo);
    //print_r($peopleThree);

    // Associative array (key & value pairs)

    $fruitOne = [ "apple" => "red", "orange" => "orange", "kiwi" => "green"];
    $fruitTwo = array("lemon" => "yellow", "strawberry" => "pink");
    echo $fruitOne["kiwi"];
    print_r($fruitTwo);

?>

<!DOCTYPE html>
<html>
<head>
	<title>my first PHP file</title>
</head>
<body>
	
</body>
</html>