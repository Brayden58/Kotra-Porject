<?php

include("config/DB_config.php");

$id=$_GET('id');

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
}
else {
    $sql = "DELETE INTO 구직자_DB WHERE 구직자_ID='$id'";
    if ($conn->query($sql)) {
        header("location:Employee_Result.php?");

    } else {
        echo "Error: " . $sql . "
" . $conn->error;
    }
    $conn->close();
}
?>
