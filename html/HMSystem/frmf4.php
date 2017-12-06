
<?php
//Declaration of variables
$f4RoomNum = "";

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
    $f4RoomNum = clean($_POST['f4RoomNum']);
}

function clean($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "SELECT * FROM Guest1 G1, Guest2 G2, Room R, Booking Bo
WHERE Bo.RoomNumber='".$f4RoomNum."'
AND G1.GuestID=G2.GuestID 
AND G1.GuestID=Bo.GuestID 
AND Bo.RoomNumber=R.RoomNumber;";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo '<div style="overflow-x:auto;">';
    echo "<table>";
    echo "<tr>";
    echo "<th>Guest ID</th>";
    echo "<th>First Name</th>";
    echo "<th>Middle Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Street</th>";
    echo "<th>City</th>";
    echo "<th>State</th>";
    echo "<th>Country</th>";
    echo "<th>ZIP Code</th>";
    echo "<th>Age</th>";
    echo "<th>Num. In Party</th>";
    echo "<th>Phone Number</th>";
    echo "<th>Room Number</th>";
    echo "<th>Room Type</th>";
    echo "<th>Capacity</th>";
    echo "<th>Room Rate</th>";
    echo "<th>Days Staying</th>";
    echo "</tr>";
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
        echo "<td>".$data["PhoneNumber"]."</td>";
        echo "<td>".$data["RoomNumber"]."</td>";
        echo "<td>".$data["RoomType"]."</td>";
        echo "<td>".$data["Capacity"]."</td>";
        echo "<td>".$data["RoomRate"]."</td>";
        echo "<td>".$data["DayStaying"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
} else {
    echo "0 results<br><br>";
}
if ($conn->multi_query($sql) === TRUE) {
    echo "<br>Query executed.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>