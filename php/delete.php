<?php

include_once'config.php';

$ID = $_POST['email'];
$sql = "DELETE FROM teacher_register WHERE Email = '".$ID."'";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('location:feedbackdetailsread.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

mysqli_close($con);

?>