<?php
 
//Ex:1

 echo Ucwords("hello world , how are you all?") . "<br>";
 echo strtoupper("hello world , how are you all?") . "<br>";
 echo strtolower("hello world , how are you all?") . "<br>";
 echo ucfirst("hello world , how are you all?") . "<br>";
//Ex:2

 $num = "082307";
 $new = str_split($num , 2);
  echo  implode(':' , $new) . "<br>" ;
 //Ex:3

  $C =  'The quick brown fox jumps over the lazy dog.';
  $F1 = "jumps";
  $found1 = strpos($C , $F1);
  if($found1 === FALSE){
    echo "$F1 Not Found in $C" . "<br>";
      
  } else{
    echo "$F1 Found In $C" . "<br>";
  }
  //Ex:4

  $A = 25;
  echo strval($A) . "<br>";
  //Ex:5

  $email = 'www.example.com/pubIic_htmI/index.php';
  echo substr($email , 28) . "<br>";
  echo substr(strrchr($email, "/") ,1) . "<br>";
  //Ex:6

  $email1 =  'Ayham@example.com';
  echo strstr($email1, "@" , true)."<br>";
  //Ex:7

  $email2 = 'Ayham@example.com';
  echo substr($email2 , -3) . "<br>";
  //Ex:8

  $value1 = 65.45;
  $value2 = 104.35;
  $Tot = $value1 + $value2 ; 
  echo sprintf("%1.2f", $Tot) . "<br>";

  //Ex:9

  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  echo substr(str_shuffle($data) , 0 , 10) . "<br>";

  //EX:10

  $as = 'the quick brown fox jumps over the lazy dog.';
  echo preg_replace("/the/", "That", $as, 1) . "<br>";

  //Ex:11

  $String1 = 'football';
  $String2 = 'footboll';

  $ss = strspn($String1 , $String2);
  $sen = "First difference between two strings at position %d : '%s' vs '%s'";
  echo sprintf($sen , $ss ,  $String1[$ss] ,$String2[$ss]) . "<br>";

  //Ex:12

  $Sen = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";

  print_r(var_dump(explode("\n" , $Sen)));
  echo "<br>";

  //Ex:13
  $Path = "https://www.orange.com/index.php";
  echo basename($Path ,".php") . "<br>";

  //Ex : 14
  $ch = "z";
  $chNext = ++$ch; // aa
  if(strlen($chNext) > 1){
      echo $chNext[0] . "<br>";
  } else{
      echo $chNext . "<br>";
  }

  //Ex:15 
  $E15 = 'rayy@example.com';
  echo strstr($E15,"e" , false) ."<br>";

  //Ex16
  $Ex16 = 'rayy@example.com';
  echo bin2hex($Ex16) . "<br>";

  //Ex17
  $E17 = 'The brown fox';
  echo substr_replace($E17,' quick', 3 , 0) . "<br>";

  //Ex18
  $E18 = 'The quick brown fox';
  $arr = explode(" ",$E18);
  echo $arr[0]. "<br>";
  echo reset($arr) ."<br>"; // end($arr)

  //Ex19
  $E19 = '000547023.24';

  echo ltrim($E19, "0") . "<br>";

  //Ex20

  $E20 = 'The quick brown fox jumps over the lazy dog';
  echo substr_replace("$E20","", 16 ,3) . "<br>";

  $E201 = 'The quick brown fox jumps over the lazy dog';
  echo str_replace("fox" , "",$E201) . "<br>";

  //Ex21
  $E21 = 'The quick brown fox jumps over the lazy dog///';
  echo str_replace("/","",$E21) . "<br>";

  $E210 = 'The quick brown fox jumps over the lazy dog///';
  echo chop($E210 , "/") . "<br>";
  
  $E2100 = 'The quick brown fox jumps over the lazy dog///';
  echo rtrim($E2100, "/") . "<br>";

  //Ex22
  $E22 = 'http://www.example.com/5478631';
  echo strstr($E22 , "5" , false) . "<br>";
  echo substr(strrchr($E22, '/'),1) . "<br>";

  //Ex23
  $E23 = '\"\1+2/3*2:2-3/4*3';
  echo str_replace(str_split('"\+/*:-')," ",$E23) . "<br>";

  //Ex24
  $E24 = 'The quick brown fox jumps over the lazy dog';
  $arr2 = explode(" ",$E24);
  echo $arr2[0] . " " . $arr2[1] . " " . $arr2[2] . " " . $arr2[3] . " " . $arr2[4] . "<br>";
  $ae = array_slice($arr2,0,5);
  $eqw = implode(" ",$ae);
  echo $eqw . "<br>";

  //Ex25

  $E25 = '2,543.12';
  echo str_replace(",","",$E25) . "<br>";

  //Ex26 

 for($E26 = ord('a'); $E26 <= ord('z');$E26++){
     
    echo chr($E26);
    echo "\n";

  }



  
  

 
  


?>

