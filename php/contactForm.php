

<?php
	require 'config.php';
	
	if(isset($_POST["submit"])){
		$FirstName= $_POST["FirstName"];
		$LastName= $_POST["LastName"];
		$Email= $_POST["Mail"];
		$Password= $_POST["Hint"];
		$ContactNumber= $_POST["YourNumber"];
		$Issues = $_POST["YourProblem"];
		
		$sql= "INSERT INTO contactus VALUES('','$FirstName','$LastName','$Email','$Password','$ContactNumber','$Issues')";
		//mysqli_query($connection, $sql)//
		
		if(mysqli_query($conn,$sql)===true){
			echo "<script>alert('Uploaded Successfully')</script>";
			header('Location: ../html/Home.html');
		}
		else{
			echo "Upload Failed ";
			header('Location:../html/ContactUs.html');
			echo "<script>alert('Retry')</script>";
		}
	}
	echo "<script>alert('Our term will respond you ASAP!')</style>";
	$conn -> close();
?>