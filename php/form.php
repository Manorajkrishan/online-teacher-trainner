

<?php
   require "config.php";
?>
<?php 
$email = $_POST['email'];
$newPassword = $_POST['Password'];

// Check if the email exists in the database
$query = "SELECT * FROM teacher_register WHERE Email = '$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Update the password
   
    $updateQuery = "UPDATE teacher_register SET Password = '$newPassword' WHERE Email = '$email'";
    if (mysqli_query($conn, $updateQuery)) {
        echo "<script>alert('Password reset successful')</script>";
        header('Location:../html/Home.html');
    } else {
        echo "<script>alert('Failed to update password')</script>";
    }
} else {
    echo "<script>alert('Email not found')</script>";
}
mysqli_close($conn);

?>