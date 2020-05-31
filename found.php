
<!DOCTYPE html>
<head><title>Simple File Sharing Site </title>
 <link rel="stylesheet" href="login.css" />

 <?php
       session_start();
       $username = $_SESSION['user'];
       $dir = sprintf("users/%s/", $username);
       $files = scandir($dir);

   ?>
</head>

<body style = "background: url(file.jpg); background-size: 100%;">

	<div class="heading">
			<h1>Eazyfileshare.com </h1>
	</div>

<div class="box">
	<h3>Welcome <?php echo ucfirst($username).'!' ?></h3>
</div>

<div class="files">

</div>

<div class="main">

<h3>Click here to upload files!</h3>
<h6>Supported file formats = 'jpg', 'jpeg', 'png', 'pdf', 'docx', 'txt'</h6>

<form  action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<button type="submit" name="submit">Upload</button>
</form>

<h3>My files</h3>
<?php for ($i = 2; $i < count($files); $i++) {
    print_r (htmlentities($files[$i]));
    echo nl2br("\n");
} ?>


<h3>Click here to view files!</h3>
<form action="view.php" method="get">
      <label for = "viewfile">Enter the file name to view with the file extension:</label>
      <input type = "text" name = "viewfile" id = "viewfile"/>
      <input type = "submit" name="submit" value = "View"/>
  </form>

<h3>Click here to delete files!</h3>
<form action="deletefile.php" method="GET">
      <label for = "deletefile">Enter the file name to be deleted with the file extension:</label>
      <input type = "text" name = "deletefile" id = "deletefile"/>
      <input type = "submit" name="submit" value = "Delete"/>
  </form>

  <h3>Signout here!</h3>
      <form action="signout.php">
          <input type="submit" value="Signout" />
      </form>


</div>

</body>
</html>
