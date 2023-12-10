<?php 
include("db.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
    die ("Connection failed: ".mysqli_connect_error());
}
$sql = "SELECT * FROM uzytkownicy";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]." - Imię i nazwisko: " . $row["imie"]. " " . $row["nazwisko"] .", login: ".$row["login"].", rola: ".$row["rola"].;
    echo '<a href="usun.php?id='.$row["id"].'"> usuń </a>';
    echo "<br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
 ?>