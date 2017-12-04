
<?php
//Declaration of variables
$f1guestID = $f1guestFN = $f1guestMN = $f1guestLN = $f1guestPN = "";
$f1guestSTR = $f1guestCTY = $f1guestSTE = $f1guestCTRY = $f1guestZIP = "";
$f1guestAGE = $f1guestNIP = $f1guestRMN = $f1guestCHIN = $f1guestCHOT = "";
$f1guestRATE = $f1guestECN = $f1guestECPHN = $f1guestECADR = "";

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
    $f1guestID = clean($_POST['f1guestID']);
    $f1guestFN = clean($_POST["f1guestFN"]);
    $f1guestMN = clean($_POST["f1guestMN"]);
    $f1guestLN = clean($_POST["f1guestLN"]);
    $f1guestPN = clean($_POST["f1guestPN"]);
    $f1guestSTR = clean($_POST["f1guestSTR"]);
    $f1guestCTY = clean($_POST["f1guestCTY"]);
    $f1guestSTE = clean($_POST["f1guestSTE"]);
    $f1guestCTRY = clean($_POST["f1guestCTRY"]);
    $f1guestZIP = clean($_POST["f1guestZIP"]);
    $f1guestAGE = clean($_POST["f1guestAGE"]);
    $f1guestNIP = clean($_POST["f1guestNIP"]);
    $f1guestRMN = clean($_POST["f1guestRMN"]);
    $f1guestCHIN = clean($_POST["f1guestCHIN"]);
    $f1guestCHOT = clean($_POST["f1guestCHOT"]);
    $f1guestRATE = clean($_POST["f1guestRATE"]);
    $f1guestECN = clean($_POST["f1guestECN"]);
    $f1guestECPHN = clean($_POST["f1guestECPHN"]);
    $f1guestECADR = clean($_POST["f1guestECADR"]);
}

function clean($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$sql = "
INSERT INTO Guest1
VALUES ('".$f1guestID."', '".$f1guestFN."', '".$f1guestMN."', '".
$f1guestLN."', '".$f1guestSTR."', '".$f1guestCTY."', '".
$f1guestSTE."', '".$f1guestCTRY."', '".$f1guestZIP."', '".
$f1guestAGE."', '".$f1guestNIP."');";
$sql .= "
INSERT INTO 'Booking'
VALUES ('".$f1guestID."', '".$f1guestRMN."', '".$f1guestRATE.
"', '".$f1guestCHIN."', '".$f1guestCHOT."', '1');";

if($f1guestECN != ""){
    $sql .= "
    INSERT INTO EmergencyContact (GuestID,Name,PhoneNumber,Address)
    VALUES ('".$f1guestID."', '".$f1guestECN."', '".$f1guestECPHN.
    "', '".$f1guestECADR."');";
}

//$stmt = mysqli_prepare($sql);
//$stmt->execute();

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = ""

mysqli_close($conn);
?>
