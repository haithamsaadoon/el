<?php
if($_FILES['coursefile']['size'] > 0)
{
$fileName = $_FILES['coursefile']['name'];
$tmpName  = $_FILES['coursefile']['tmp_name'];
$fileSize = $_FILES['coursefile']['size'];
$fileType = $_FILES['coursefile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
require '../mysqlcon.php';

$query = "INSERT INTO courses (cou_name, cou_prof_id, type, content ) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

mysql_query($query) or die('Error, query failed'); 

echo "<br>File $fileName uploaded<br>";
} 
?>
