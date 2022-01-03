<?php 
    /*
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
    */
    
    /*   echo                           print 
       has no return valur  --- has a retun value of 1(used expressions)
       can multiable parameters -- can take one argument
        *** echo is marginally faster than print
    

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
    */
    /*
    // İsim ismi fonksiyona girip orada değişiyor ve öyle çıkıyor. & kullanınca
    $isim = "Furkan";
    function sayHi(&$isim) {
        $isim = "Damla";
        echo "Hi $isim";
    }
    sayHi($isim);
    echo $isim;
    */
    $kullanici_id = 131;
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
    
    <form action="post_get.php" method= "GET">
        Ad <input type="text" name= "ad" placeholder="adınızı girin">
        SoyAd <input type="text" name= "soyad" placeholder="Soyadınızı girin">
        <input type="submit" value="formu gönder">
    </form>
    
    <a href="post_get.php?kullanici_id=<?php echo $kullanici_id ?>"><button>Kullanıcıyı Sil</button></a>
        
</body>
</html>