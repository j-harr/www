
<?php
//Declaration of variables
$f6guestID = "";

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
    $f6guestID = clean($_POST['f6guestID']);
}

function clean($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "
SELECT GuestID, SUM(TotalCost)
FROM(
SELECT G1.GuestID, (RoomRate*DayStaying) AS TotalCost
FROM Guest1 G1, Booking Bo
WHERE G1.GuestID='".$f6guestID."' AND Bo.GuestID=G1.GuestID

UNION

SELECT G1.GuestID, SUM(FoodCost) AS TotalCost
FROM Guest1 G1, Food F, Buy B
WHERE G1.GuestID='".$f6guestID."' AND G1.GuestID=B.GuestID AND B.FoodID=F.FoodID

UNION

SELECT G1.GuestID, SUM(FSRate) AS TotalCost
FROM Guest1 G1, FAndS FS, UsedFS U
WHERE G1.GuestID='".$f6guestID."' AND G1.GuestID=U.GuestID AND FS.FacilityID=U.FacilityID) AS T;";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table border='1' >";
    echo "<tr>";
    echo "<td>Guest ID</td>";
    echo "<td>Total Cost</td>";
    echo "</tr>";
    while($data = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$data["GuestID"]."</td>";
        echo "<td>".$data["SUM(TotalCost)"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results<br>";
}
if ($conn->multi_query($sql) === TRUE) {
    echo "Query executed.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>