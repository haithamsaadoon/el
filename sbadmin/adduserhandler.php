<?php

require_once '../mysqlcon.php';

extract($_POST);
print_r($_POST);
$sql = "INSERT INTO users (use_first, use_second, use_last,use_username,use_password,use_permission,use_dep_id,use_stage)"
        . " VALUES ('$first', '$second', '$third','$use_username',md5('$use_password'),'$role','$dep_id','$stage')";




if (mysqli_query($conn, $sql)) {
    header("location: adduser.php?error=success");
} else {
    header("location: adduser.php?error=failed");
}

mysqli_close($conn);

?>