<?php
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0]. '<br>';
echo $cars[1]. '<br>';
echo $cars[2]. '<br><br>';

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old. <br><br>";



$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

print_r($numbers);
echo '<br>';

$search = array_search(1, $numbers);
print($search);

    $array_a = array(10,20,30,40);
    echo $array_a[3]."<br>";
    $array_b=array('banana','mango','berry','watermellon');
    echo $array_b[2];
    $array_c=array("key1"=>50,"key2"=>60, "key3"=>70,
    );
    echo "<br>";
    echo $array_c['key1'];
    rsort($array_b);
    echo "<br>";
    print_r($array_b);
    echo "<br>";
    echo "<br>";

    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );
        
      echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
      echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
      echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
      echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
    echo "<br>";

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo"<br>";
}
