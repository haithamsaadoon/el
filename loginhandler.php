<?php
require_once './mysqlcon.php';
$username=  mysql_real_escape_string($_POST["username"]);
$password=  md5(mysql_real_escape_string($_POST["password"]));
mysqli_query($conn,"SET NAMES 'utf8'") or die(mysqli_error($conn));

$sql = "SELECT use_username, use_password,use_permission,use_id FROM users where use_username='$username' and use_password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row=  mysqli_fetch_assoc($result);
    session_start();
     $_SESSION["use_permission"] =$row["use_permission"] ;
     $_SESSION["use_id"] =$row["use_id"] ;
     $_SESSION["use_dep_id"] =$row["use_dep_id"] ;
     $_SESSION["use_stage"] =$row["use_stage"] ;
    
     
    mysqli_close($conn);
   switch ($row["use_permission"])
    {
       
        case "admin":
            header("location: sbadmin/index.php");
            break;
        case "student":
            header("location: index.php");
            break;
        case "instructor":
            header("location: index.php");
            break;
        default :
             header("location: index.php");
            break;
        
    }
    
}
else
{  header("location: index.php?login=false");
    }

