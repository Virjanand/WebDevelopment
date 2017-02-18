<?php

/*

    $test = "I'm a variable!";
    $test2 = "Me too!";

    $number = 75;

    $name = "Virjanand";

    $a = "name";

    echo $number/2;

    echo "<br /><br />";

    echo "This is PHP!";
    echo "<br /><br />";
    echo "My name is $name";

    echo "<br /><br />";
    echo $$a;

    $myArray = array("pizza", "chocolate", "coffee");

    print_r ($myArray);
    echo "<br /><br />";

    echo $myArray[5];
    echo "<br /><br />";

    echo "I'm still going!";

    echo "<br /><br />";

    $anotherArray[0] = "pizza";
    $anotherArray[1] = "yoghurt";

    print_r($anotherArray);

    echo "<br /><br />";

    $thirdArray = array (
      "France" => "French",
      "USA" => "English",
      "Germany" => "German"
    );

    print_r($thirdArray);

    $anotherArray[] = "salad";

    echo "<br /><br />";

    print_r($anotherArray);

    echo "<br /><br />";

    unset($thirdArray["Germany"]);

    print_r($thirdArray);

    echo "<br /><br />";

    $name = "Virjanand";

    unset($name);
    echo $name;

    echo "<br /><br />";

    $number = 1;
    $otherNumber = 2;
    $thirdNumber = 2;

    if($thirdNumber == $otherNumber OR $number ==otherNumber) {

      echo "True!";
    } else {

      echo "False!";
    }

    echo "<br /><br />";

    for ($i = 500; $i >= 100; $i = $i - 5) {

      echo $i."<br />";

    }

    */
/*
    $array = array("cat", "dog", "turtle", "kangaroo");

    //print_r($array);

    foreach ($array as $key => $value) {

      echo "Key: $key Value: $value <br />";
    }
    */

    $i = 0;

    $array = array("apple", "banana", "grape");

    while ($array[$i]) {
      echo "Key: $i Value: $array[$i] <br />";
      $i++;
    }

    foreach ($array as $key => $value)
      echo "Key: $key Value: $value <br />";


?>