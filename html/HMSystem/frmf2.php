
<?php
//Declaration of variables
$f2guestID = "";

$servername = "localhost";
$username = "client";
$password = "guest01";
$dbname = "HMSystem";

//Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);;

//Check connection
if($conn->connect_error){
    die("NOT CONNECTED" . "Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $f2guestID = clean($_POST['f2guestID']);
}

function clean($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "DELETE FROM Guest2 WHERE GuestID='".$f2guestID."';
DELETE FROM EmergencyContact WHERE GuestID='".$f2guestID."';
DELETE FROM UsedFS WHERE GuestID='".$f2guestID."';
DELETE FROM Buy WHERE GuestID='".$f2guestID."';
DELETE FROM payment WHERE GuestID='".$f2guestID."';
DELETE FROM Booking WHERE GuestID='".$f2guestID."';
DELETE FROM Guest1 WHERE GuestID='".$f2guestID."';
";

if ($conn->multi_query($sql) === TRUE) {
    echo "Guest ".$f2guestID." record removed successsfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>