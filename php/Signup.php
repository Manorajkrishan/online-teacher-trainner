
<?php
include_once'config.php';
?>
<?php
$F_name=$_POST["f1"];
$L_name=$_POST["f2"];
$Email=$_POST["f3"];
$Password=$_POST["f4"];
$Con_Password=$_POST["f5"];
$Qual=$_POST["f6"];

$sql="insert into 
teacher_register(Teacher_ID,First_Name,Last_Name,Email,Password,Confirm_password,Qualification)values('','$F_name','$L_name','$Email','$Password','$Con_Password','$Qual')";
//execute the query
if(mysqli_query($conn,$sql)){
    echo"<script>alert('Record inserted succesful')</script>";
header("Location:../html/Home.html");
}else{
    echo"<script>alert('Error ')</script>";
}

//close the connection 
mysqli_close($conn);
?>