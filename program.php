<?php
$uid =[];
$text = "vishal choudhary";
 $text = explode(' ', trim($text));
 foreach ($text as $key => $value) {
    $valu =trim(' ',$value);
    
    echo $valu;    
    # code...
 }
 echo "vishal";
//  $uid[] = $text;
//  echo "<pre>";
//  print_r($uid);
//  die();
?>
