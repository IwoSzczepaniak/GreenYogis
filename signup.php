<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "greenyogis";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "gy_salt";
$password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO users (name, email, password) 
VALUES ('$name', '$email', '$password_encrypted')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('Values have been inserted');
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}


?>




















