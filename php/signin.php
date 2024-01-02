

<?php
include_once'config.php';
?>

<?php
session_start();



    $email = $_POST["Email"];
    $password = $_POST["pss"];
    $conpassword = $_POST["pssc"];
    $valid = false;


    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM teacher_register WHERE Email='$email' AND Password='$password'";
   
   $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0) {
        $valid = true;
    } else {
        $valid = false;
    }

    if ($valid) {
        $_SESSION["username"] = $email;
        header('Location: ../html/Home.html');
        exit();
    } else {
        $error = "Invalid username or password";
		echo "$error";
    }

?>


