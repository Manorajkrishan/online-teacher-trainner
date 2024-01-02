

<?php
require 'config.php';

if (isset($_POST["Submit"])) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $nameoncard = $_POST['nameoncard'];
    $creditno = $_POST['creditno'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];

    $query = "INSERT INTO payment
     (Pay_ID, fullName, email, country, address, city, state, zipcode, nameoncard, creditno, expmonth, expyear, cvv) 
              VALUES ('', '$fullName', '$email', '$country', '$address', '$city', '$state', '$zipcode', '$nameoncard', '$creditno', '$expmonth', '$expyear', '$cvv')";
    mysqli_query($conn, $query);
    echo "<script> alert('Payment details entered Successfully'); </script>";
    header('Location:../html/Home.html');
}
mysqli_close($conn);
?>
