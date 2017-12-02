<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Management System</title>
        <script>
        function validateForm() {
            var x = document.forms["searchBox"]["fName"].value;
            if(x == "") {
                alert("Please enter search data.");
                return false;
            }
        }
        </script>
    </head>
    <body>
        <h1>Hotel Management System</h1>
        <h6>You are 
        <?php
$servername = "localhost";
$username = "client";
$password = "guest01";

//Create Connection
$conn = new mysqli($servername, $username, $password);

//Check connection
if($conn->connect_error){
    die("NOT CONNECTED" . "Connection failed: " . $conn->connect_error);
}

echo "CONNECTED";
?> to the database.</h6>
        <hr>
        <form name="searchBox" onsubmit="return validateForm()" method="post">
        Search: <input type="text" name="fName">
        <input type="submit" value="Submit">
        </form>

    </body>
</html>