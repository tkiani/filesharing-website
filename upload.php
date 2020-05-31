<?php
session_start();
$name = $_SESSION['user'];
if (isset($_POST['submit'])){
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.',$fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'docx', 'txt');

  if(in_array($fileActualExt, $allowed)){
  if($fileError === 0){
    if($fileSize < 500000){
      $fileDestination = 'users/'.$name.'/'.$fileName;
      move_uploaded_file($fileTmpName, $fileDestination);
      header("Location: found.php");
    }else {
            echo "File too big!";
    }
  }
  else {
    echo "There was an error uploading your file!";
  }
  }
  else {
    echo "You can not upload files of this type!";
  }

}
 ?>
