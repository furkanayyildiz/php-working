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

    foreach($fruitOne as $x => $x_value) {
        echo "My Favorite fruit is " . $x . " and color is that " . $x_value ;
        echo "<br>";
    }

    // multi-dimensinal arrays
    $blogs = [
		['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem'],
		['title' => 'mariokart cheats', 'author' => 'toad', 'content' => 'lorem'],
		['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem']
	];

	//print_r($blogs);
	//print_r($blogs[2]);
	//echo $blogs[1]['title'];
	//echo count($blogs);

	$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem'];
	//print_r($blogs);

	$popped = array_pop($blogs);
	//print_r($popped);
?>

<!DOCTYPE html>
<html>
<head>
	<title>my first PHP file</title>
</head>
<body>
	
</body>
</html>