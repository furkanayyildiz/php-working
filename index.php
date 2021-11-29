<?php 
                // variables
 $number1 = 5;
 $number2 = 15;
 echo ($number1 + $number2);
 
 $name = "Furkan";
 echo "my name is $name";


                //Variables Scope
// global local ve static durumları
    $var2 = "global scope"; // myTest fonksiyonu globaldeki fonksiyona direk erişemiyor. 
function myTest(){
    $var1 = "local scope";
    global $var2;
     echo "<br/>",$var1,"<br/>",$var2; // globaldeki değere ulaşmak için global kelimesini kullanıyoruz
 }
 myTest();

 function myFunc() {
    static $staticVar = 18; // static olmasa  18 - 18 - 18 oluyor
    echo $staticVar;
    $staticVar++;
}
    myFunc();
    echo "<br/>";
    myFunc();
    echo "<br/>";
    myFunc();
    echo "<br/>";

    
    /*   echo                           print 
       has no return valur  --- has a retun value of 1(used expressions)
       can multiable parameters -- can take one argument
        *** echo is marginally faster than print
    */

    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print $x + $y;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
        <h1>User Profile Page</h1>
</body>
</html>