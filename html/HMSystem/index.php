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
?>
 to the database.</h6>
        <hr>
        <div class="function-select-bar">
            <button id="btnf1" class="menuButton">Add Guest</button>
            <button class="menuButton f2btn" id="btnf2">Remove Guest</button>
            <button class="menuButton f3btn" id="btnf3">Search Guest</button>
            <button class="menuButton f4btn" id="btnf4">Search Room</button>
            <button class="menuButton f5btn" id="btnf5">Available Rooms</button>
            <button class="menuButton f6btn" id="btnf6">Tender Payment</button>
        </div>
        <hr>
        <form id="frmf1" name="frmf1" onsubmit="return validateForm()" method="post">
            <div class="form-row">
                <h3>Add Guest</h3>
            </div>
            <div class="form-row">
                <label>Guest ID</label><input type="text" name="f1guestID">
            </div>
            <div class="form-row">
                <label>First Name</label><input type="text" name="f1guestFN">
            </div>
            <div class="form-row">
                <label>Middle Name</label><input type="text" name="f1guestMN">
            </div>
            <div class="form-row">
                <label>Last Name</label><input type="text" name="f1guestLN">
            </div>
            <div class="form-row">
                <label>Phone Number</label><input type="tel" name="f1guestPN">
            </div>
            <div class="form-row">
                <label>Street</label><input type="text" name="f1guestSTR">
            </div>
            <div class="form-row">
                <label>City</label><input type="text" name="f1guestCTY">
            </div>
            <div class="form-row">
                <label>State</label><input type="text" name="f1guestSTE">
            </div>
            <div class="form-row">
                <label>Country</label><input type="text" name="f1guestCTRY">
            </div>
            <div class="form-row">
                <label>ZIP Code</label><input type="number" name="f1guestZIP">
            </div>
            <div class="form-row">
                <label>Age</label><input type="number" name="f1guestAGE">
            </div>
            <div class="form-row">
                <label># in Party</label><input type="number" name="f1guestNIP">
            </div>
            <div class="form-row">
                <label>Room Number</label><input type="number" name="f1guestRMN">
            </div>
            <div class="form-row">
                <label>Check In</label><input type="date" name="f1guestCHIN">
            </div>
            <div class="form-row">
                <label>Check Out</label><input type="date" name="f1guestCHOT">
            </div>
            <div class="form-row">
                <label>Rate/night</label><input type="number" name="f1guestRATE">
            </div>
            <div class="form-row">
                <h4>Emergency Contact<h4>
            </div>
            <div class="form-row">
                <label>Name</label><input type="text" name="f1guestEC-N">
            </div>
            <div class="form-row">
                <label>Phone Number</label><input type="tel" name="f1guestEC-PHN">
            </div>
            <div class="form-row">
                <label>Address</label><input type="text" name="f1guestEC-ADR">
            </div>
            <div class="form-row">
                <input class="submit" type="submit" value="Submit">
            </div>
            
        </form>

        <script>
            btnf1 = document.getElementById('btnf1');
            var btnf2 = document.getElementById("btnf2");
            var btnf3 = document.getElementById("btnf3");
            var btnf4 = document.getElementById("btnf4");
            var btnf5 = document.getElementById("btnf5");
            var btnf6 = document.getElementById("btnf6");
            frmf1 = document.getElementById('frmf1');

            btnf1.onlick = function {
                frmf1.style.display = "flex";
            }

    </body>
</html>