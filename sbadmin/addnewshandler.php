<?php
//print_r($_POST);
//print_r($_FILES);
extract($_POST);
//$date= date("Y-m-d");
if($_FILES['newsimg']['size'] > 0)
{
    
$fileName = $_FILES['newsimg']['name'];
$tmpName  = $_FILES['newsimg']['tmp_name'];
$fileSize = $_FILES['newsimg']['size'];
$fileType = $_FILES['newsimg']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = mysql_real_escape_string($content);

fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = mysql_real_escape_string($fileName);
}
require '../mysqlcon.php';

$query = "INSERT INTO news(new_title,new_short,new_detail,new_image,new_image_size,new_date)".
"VALUES ('$title','$short','$detail','$content','$fileSize',NOW())";

if (mysqli_query($conn,$query) ) {
    header("location: addnews.php?error=success");
} else {
    header("location: addnews.php?error=failed");
}

mysqli_close($conn);

} 
  else 
  {
    header("location: addnews.php?error=failed");
  }
?>


