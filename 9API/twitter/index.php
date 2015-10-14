<?php

session_start();

require "twitteroauth/autoload.php" ;

use Abraham\TwitterOAuth\TwitterOAuth;

$apikey = "JkQaQPpNaawmG7Ggy24lkhmuf";

$apiSecret = "dRrX1fnn0T99HYb4Lc10za3Kg2kk9YKmxvskydWEE4MW0tNHeD";

$accessToken = "3831096495-0yqAAgk2YwvInGZiUR025Ir9OADdScn2NaWXwCl";

$accessSecret = "hbpE6H2jATPgZlGjEyJJBSvE6hzMuzbemjKkdKKInvEBM";

$connection = new TwitterOAuth($apikey, $apiSecret, $accessToken, $accessSecret);

//GET request

//more information check https://dev.twitter.com/rest/reference/get/search/tweets
//$statuses = $connection->get("statuses/user_timeline", array("count" => 10, "exclude_replies" => true, "screen_name" => "CPU"));
//$statuses = $connection->get("search/tweets", array("q" => "@tampere"));
//echo json_encode($tweets);
//$tweets = $statuses->statuses;
//echo json_encode($tweets);
//print_r($tweets);

/*foreach($tweets as $tweet){
   echo $tweet->text;
   echo "<br/><br/>";
}*/

//POST request
//$statues = $connection->post("direct_messages/new", array("text" => "hello world"));

/* GET user timeline and display only tweets with centain amount of count
*/
$tweets = $connection->get("statuses/user_timeline", array("screen_name"=>"cpu"));
//print_r($tweets);
foreach($tweets as $tweet){
  
  /*$embed=$connection->get("statuses/oembed", array("id"=>$tweet->id));
  echo $embed->html;
      
  echo "<br /><br />";
   */
   $favorites = $tweet->favorite_count;
  
  if($favorites > 2) 
   {  
      
      $embed=$connection->get("statuses/oembed", array("id"=>$tweet->id));
      echo $embed->html;
      
      echo "<br /><br />";
   } 
   
} 
?>