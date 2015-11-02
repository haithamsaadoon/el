<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './mysqlcon.php';
$username=  mysql_real_escape_string($_POST["username"]);
$password=  md5(mysql_real_escape_string($_POST["password"]));
mysqli_query($conn,"SET NAMES 'utf8'") or die(mysqli_error($conn));

$sql = "SELECT use_username, use_password,use_permission FROM users where use_username='$username' and use_password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row=  mysqli_fetch_assoc($result);
    
    mysqli_close($conn);
    switch ($row["use_permission"])
    {
        case "admin":
            header("location: admin.php");
            break;
        case "student":
            header("location: admin.php");
            break;
        case "instructor":
            header("location: admin.php");
            break;
        default :
             header("location: admin.php");
            break;
        
    }
    
}
else
{  header("location: admin.php");
    }

