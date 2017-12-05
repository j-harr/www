
<?php
//Declaration of variables
$f3guestID = "";

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
    $f3guestID = clean($_POST['f3guestID']);
}

function clean($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "SELECT * FROM Guest1 G1, Guest2 G2, Room R, Booking Bo
WHERE G1.GuestID='".$f3guestID."' AND G1.GuestID=G2.GuestID AND
G1.GuestID=Bo.GuestID AND Bo.RoomNumber=R.RoomNumber;";

$result=mysqli_query($sql,$conn);
echo "<table border='1' >";

while($data = mysqli_fetch_row($result))
{
    echo "<tr>";
    echo "<td>$data[0]</td>";
    echo "<td>$data[1]</td>";
    echo "<td>$data[2]</td>";
    echo "<td>$data[3]</td>";
    echo "<td>$data[4]</td>";
    echo "<td>$data[5]</td>";
    echo "<td>$data[6]</td>";
    echo "<td>$data[7]</td>";
    echo "<td>$data[8]</td>";
    echo "<td>$data[9]</td>";
    echo "<td>$data[10]</td>";
    echo "<td>$data[11]</td>";
}
echo "</table>";
if ($conn->multi_query($sql) === TRUE) {
    echo "Guest ".$f2guestID." record removed successsfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>