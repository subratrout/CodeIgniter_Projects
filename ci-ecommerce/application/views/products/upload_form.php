<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php if ( isset($error)) { echo $error;} ;?>


<form action='/products/do_upload' method='post' enctype='multipart/form-data' >

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>