<?php

$fullname = $_POST['fullname'];
$regno = $_POST['regno']; 
$email = $_POST['email'];
$phno = $_POST['phno'];
$event = $_POST['event'];
$conn = new mysqli('localhost','root','','login_sample_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		//$stmt = $conn->prepare("insert into registration set full_name='$fullname', regno='$regno', email='$email', phno='$phno', event='$event'");
        $stmt = $conn->prepare("INSERT INTO `registration` ( `fullname`, `regno`, `email`, `phno`, `event`) VALUES (?, ?, ?, ?, ?)");
		
		$stmt->bind_param("sssis", $fullname, $regno, $email, $phno, $event);
		$execval = $stmt->execute();
		echo $execval;
		echo "<script>
				alert('Registration successfully...');
				window.location.href='index.php';
</script>";
		$stmt->close();
		$conn->close();
	}
 ?>

