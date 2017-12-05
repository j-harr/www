
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
WHERE G1.GuestID='".$f3guestID."'
AND G1.GuestID=G2.GuestID 
AND G1.GuestID=Bo.GuestID 
AND Bo.RoomNumber=R.RoomNumber;";

$result = $conn->query($sql);
echo "<table border='1' >";

if ($result->num_rows > 0) {
while($data = $result->fetch_assoc())
{
    echo "<tr>";
    echo "<td>".$data["GuestID"]."</td>";
    echo "<td>".$data["F_Name"]."</td>";
    echo "<td>".$data["M_Name"]."</td>";
    echo "<td>".$data["L_Name"]."</td>";
    echo "<td>".$data["Street"]."</td>";
    echo "<td>".$data["City"]."</td>";
    echo "<td>".$data["State"]."</td>";
    echo "<td>".$data["Country"]."</td>";
    echo "<td>".$data["ZIP"]."</td>";
    echo "<td>".$data["Age"]."</td>";
    echo "<td>".$data["NumInParty"]."</td>";
    echo "</tr>";
}
echo "</table>";
} else {
    echo "0 results\n";
}
if ($conn->multi_query($sql) === TRUE) {
    echo "Query executed.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>