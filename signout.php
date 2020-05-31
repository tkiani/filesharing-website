<!DOCTYPE html>
<html lang="en">
<head><title>Signout</title></head>
<body>
  <?php
    session_start();
    session_destroy();
    header("Location: loginPage.html");
    exit;
  ?>
</body>
</html>
