<?php
  
  $link = mysqli_connect("localhost", "cl58-example-3t1", "CR!9W.UDy", "cl58-example-3t1");

  if (mysqli_connect_error()) {

    die("Could not connect to database");

  }

  // $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Beth', 'Beth@gmail.com', 'apples')";

  // $query = "UPDATE `users` SET `name` = 'Bethany' WHERE `name`='Beth'";

  // mysqli_query($link, $query);

  $query = "SELECT * FROM users WHERE email LIKE '%h%'";

  if ($result = mysqli_query($link, $query)) {

    while ($row = mysqli_fetch_array($result)) {

      print_r($row);

    }

  } else {


    echo "It failed.";

  }

?>