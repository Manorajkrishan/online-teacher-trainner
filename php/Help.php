

<?php
include_once'config.php';
?>
<?php
$Name=$_POST["n1"];
$email=$_POST["n2"];
$help=$_POST["n3"];

$sql="insert into 
help(Help_ID,Name,Email,Help) values ('','$Name','$email','$help')";
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