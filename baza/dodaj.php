	<?php


	$imie = $_POST["imie"];
	$nazwisko = $_POST["nazwisko"];
	$login = $_POST["login"];
	$haslo = $_POST["haslo"];
	$rola = $_POST["rola"];

	include("db.php");

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("connection failed: " . mysqli_connect_error());

	}


	

	$sql = "INSERT INTO uzytkownicy (Imie, Nazwisko, Login, Haslo, rola) VALUES ('".$imie."', '".$nazwisko."', '".$login."', '".$haslo."', '".$rola."')";

	if (mysqli_query($conn, $sql)) {
echo "New record created successfully";

	}else {
		echo "Error: " . $sql . "<br>" . mysqli_errno($conn);
	}

		mysqli_close($conn);
		
		header("Location: /mlodzi/index1.html?" . SID);
    exit();

?>