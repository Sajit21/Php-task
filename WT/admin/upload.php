<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload the Photo</title>
</head>
<body>
    <form method="post" name="gallery" action="" enctype="multipart/form-data">
        <input type="file" name="upload">
        <input type="submit" name="submit" value="Upload">

</form>
<?php
if(isset($_POST['submit'])){
    //getting fiels info
    $name=$_FILES['upload']['name'];
    $type=$_FILES['upload']['type'];
    $size=$_FILES['upload']['size'];
    $tmpname=$_FILES['upload']['tmp_name'];
    echo "Name = ".$name. "<br>";
    echo "type = ".$type. "<br>";
    echo "Size = ".$size. " bytes<br>";
    echo "tmp Name = ".$tmpname. "<br>";
    $upload="uploads/".$name;
    //uploading the file in uploads directory
    if(move_uploaded_file($tmpname, $upload)){
        echo "File uploaded";
    }
    else{
        echo "unable to upload the file";
    }
}
?>
    
</body>
</html>
