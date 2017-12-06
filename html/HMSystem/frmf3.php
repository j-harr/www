
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


if ($result->num_rows > 0) {
    echo '<div style="overflow-x:auto;">';
    echo "<table>";
    echo "<tr>";
    echo "<td>Guest ID</td>";
    echo "<td>First Name</td>";
    echo "<td>Middle Name</td>";
    echo "<td>Last Name</td>";
    echo "<td>Street</td>";
    echo "<td>City</td>";
    echo "<td>State</td>";
    echo "<td>Country</td>";
    echo "<td>ZIP Code</td>";
    echo "<td>Age</td>";
    echo "<td>Num. In Party</td>";
    echo "<td>Phone Number</td>";
    echo "<td>Room Number</td>";
    echo "<td>Room Type</td>";
    echo "<td>Capacity</td>";
    echo "<td>Room Rate</td>";
    echo "<td>Days Staying</td>";
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
    echo "Query executed.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>