

<?php
require 'config.php';
if(isset ($_POST['save'])){
    $firstname=$_POST['Firstname'];
    $lastname=$_POST['Lastname'];
    $Emailaddress=$_POST['email'];
    $Paasword=$_POST['password'];
    $Shortbio=$_POST['bio'];

    $query="Insert into userdetails values('','$firstname','$lastname',' $Emailaddress','$Paasword',' $Shortbio')";
    if(mysqli_query($conn,$query)===true){
        echo("<script> alert ('Information inserted successfully')</script>");
        header('Location:../html/Home.html');
    }
    else{
        echo "error";
    }
 }
   mysqli_close($conn)
?>