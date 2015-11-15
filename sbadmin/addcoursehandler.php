<?php
extract($_POST);
if($_FILES['coursefile']['size'] > 0)
{
$fileName = $_FILES['coursefile']['name'];
$tmpName  = $_FILES['coursefile']['tmp_name'];
$fileSize = $_FILES['coursefile']['size'];
$fileType = $_FILES['coursefile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = mysql_real_escape_string($fileName);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = mysql_real_escape_string($fileName);
}
require '../mysqlcon.php';

$query = "INSERT INTO courses (cou_dep_id,cou_name,cou_pdf_content,cou_pdf_size,cou_prof_id,cou_stage)".
"VALUES ('$dep_id','$coursename','$content','$fileSize','$prof_id','$stage')";

if (mysqli_query($conn,$query) ) {
    header("location: addcourse.php?error=success");
} else {
    header("location: addcourse.php?error=failed");
}

mysqli_close($conn);


} 
?>


