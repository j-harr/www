<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Management System</title>
        <link rel = "stylesheet" type = "text/css" href = "index.css"/>
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
        <div class="function-select-bar">
            <button class="menuButton" id="function1">Add Guest</button>
            <button class="menuButton f2btn" id="function2">Remove Guest</button>
            <button class="menuButton f3btn" id="function3">Search Guest</button>
            <button class="menuButton f4btn" id="function4">Search Room</button>
            <button class="menuButton f5btn" id="function5">Available Rooms</button>
            <button class="menuButton f6btn" id="function6">Tender Payment</button>
        </div>
        <form name="searchBox" onsubmit="return validateForm()" method="post">
        Search: <input type="text" name="fName">
        <input type="submit" value="Submit">
        </form>

    </body>
</html>