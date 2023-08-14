<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" name="up" method="POST" enctype="multipart/form-data">
        <input type="file" name="upload"><br>
        <input type="submit" name="submit" value="upload">
    </form>
</body>
</html>


<?php
$image=$_FILES["upload"]["name"];
$usize=$_FILES["upload"]["size"];
$utype=$_FILES["upload"]["type"];
$utem=$_FILES["upload"]["tmp_name"];

$dest="../uploads".$image;
if(move_uploaded_file($utem,$dest)){
    echo "Sucessfully Uploaded";
}else{
    echo "Fail to Upload";
}

?>