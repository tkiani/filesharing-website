<?php
    session_start();
        $file_to_delete = $_GET['deletefile'];
        $user = $_SESSION['user'];
        $path = sprintf("users/%s/%s", $user, $file_to_delete);
        chmod($path, 0777);
        if (file_exists($path)) {
            unlink($path);
          
          header("Location: found.php?user=$user/deletesucces");
        } else {
            echo htmlentities("Error deleting $file_to_delete.\n");
        }
    ?>
