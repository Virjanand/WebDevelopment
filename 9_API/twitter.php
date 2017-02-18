<?php

  session_start();

  require("twitteroauth/autoload.php");

  use Abraham\TwitterOAuth\TwitterOAuth;

  $apikey="uHUB1XEE4IWAhxTi6KUBoow2x";
  $apisecret="pRwPP91mRfyBBQwH0Rss4Kek75VltJZdxXNoxJImZquOSywInp";
  $accesstoken="4817697555-XfkZzUNA43T4SdNO6hEAO9WqWoSxtbFj13XsHhb";
  $accesssecret="pBgThLfoSISEB7JvowIikjWuzqyZVhSHrX7G6mI2z83U7";

  $connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);

  $response = $connection->post("statuses/update", array("status" => "This is a test", "exclude_replies" => true));

  //echo json_encode($tweets)

print_r($response);


?>
