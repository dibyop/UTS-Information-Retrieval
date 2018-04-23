<?php
include 'header.php';
?>
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
File yang di upload : <center><input type="file" name="fupload"><br>
Deskripsi File : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=Upload>
</form>
<?php
include 'footer.php';
?>