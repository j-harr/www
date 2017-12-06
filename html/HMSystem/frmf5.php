
<?php
//Declaration of variables
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

$sql = "SELECT * FROM Room R 
WHERE R.RoomNumber NOT IN(SELECT RoomNumber FROM Booking B);";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<div style='overflow-x:auto;'>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Room Number</td>";
    echo "<td>Room Type</td>";
    echo "<td>Capacity</td>";
    echo "</tr>";
    while($data = $result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$data["RoomNumber"]."</td>";
        echo "<td>".$data["RoomType"]."</td>";
        echo "<td>".$data["Capacity"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
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