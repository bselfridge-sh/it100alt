<?php
// NO PHP, BUT we need to create a sub-folder called upload in the it100alt1 root to upload to.
?>

<!DOCTYPE html>
<html>
<body>

<form action="file_upload_2.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
