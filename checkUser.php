<?php
$userName = $_GET["userName"];

    session_start();
    $_SESSION['user'] = $_GET['userName'];
    $h = fopen("users.txt", "r");

if ($userName == ""){
        header("Location: empty.html");
        exit;
    }

$h = fopen("users.txt", "r");

$linenum = 1;

while( !feof($h) ){
$str1 = trim(fgets($h));
if(strcmp($str1, $userName) == 0){
   $x = 1;
   break;
}
else{
 $x = 0;
}
}

if ($x == 1){
            header('location:found.php');
            fclose($h);
  exit;
}
else  {
  fclose($h);
  session_destroy();
  header("Location: fail.html");
  exit;
}

 ?>
