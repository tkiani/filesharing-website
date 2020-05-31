
    <?php
      $new_user = $_GET['new_user'];

      if(is_dir("users/".$new_user)) {
          header("Location: userNameTaken.html");
      }
       else {
        mkdir("users/".$new_user, 0777);
        file_put_contents ("users.txt", $new_user."\n", FILE_APPEND);
        header("Location:userSuccess.html");
      }
    ?>


