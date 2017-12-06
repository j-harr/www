<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Management System</title>
        <link rel = "stylesheet" type = "text/css" href = "index.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="index.js"></script>
    </head>
    <body>
        <h1>Hotel Management System</h1>
        <hr>
        <div class="function-select-bar">
            <button class="menuButton" id="btnf1">Add Guest</button>
            <button class="menuButton f2btn" id="btnf2">Remove Guest</button>
            <button class="menuButton f3btn" id="btnf3">Search Guest</button>
            <button class="menuButton f4btn" id="btnf4">Search Room</button>
            <button class="menuButton f5btn" id="btnf5">Available Rooms</button>
            <button class="menuButton f6btn" id="btnf6">Tender Payment</button>
        </div>
        <hr>
        <div class="body-block">
        <div class="body-chunk" style="width: 30%;">
        <form id="frmf1" name="frmf1" action="">
            <div class="form-row">
                <h3>Add Guest</h3>
            </div>
            <div class="form-row">
                <label>Guest ID *</label><input type="number" name="f1guestID" id="f1guestID"/>
            </div>
            <div class="form-row">
                <label>First Name</label><input type="text" name="f1guestFN" id="f1guestFN"/>
            </div>
            <div class="form-row">
                <label>Middle Name</label><input type="text" name="f1guestMN" id="f1guestMN"/>
            </div>
            <div class="form-row">
                <label>Last Name</label><input type="text" name="f1guestLN" id="f1guestLN"/>
            </div>
            <div class="form-row">
                <label>Primary Phone *</label><input type="tel" name="f1guestPN" id="f1guestPN"/>
            </div>
            <div class="form-row">
                <label>Phone 2</label><input type="tel" name="f1guestPN2" id="f1guestPN2"/>
            </div>
            <div class="form-row">
                <label>Phone 3</label><input type="tel" name="f1guestPN3" id="f1guestPN3"/>
            </div>
            <div class="form-row">
                <label>Street</label><input type="text" name="f1guestSTR" id="f1guestSTR"/>
            </div>
            <div class="form-row">
                <label>City</label><input type="text" name="f1guestCTY" id="f1guestCTY"/>
            </div>
            <div class="form-row">
                <label>State</label><input type="text" name="f1guestSTE" id="f1guestSTE"/>
            </div>
            <div class="form-row">
                <label>Country</label><input type="text" name="f1guestCTRY" id="f1guestCTRY"/>
            </div>
            <div class="form-row">
                <label>ZIP Code</label><input type="number" name="f1guestZIP" id="f1guestZIP"/>
            </div>
            <div class="form-row">
                <label>Age</label><input type="number" name="f1guestAGE" id="f1guestAGE"/>
            </div>
            <div class="form-row">
                <label># in Party</label><input type="number" name="f1guestNIP" id="f1guestNIP"/>
            </div>
            <div class="form-row">
                <label>Room Number *</label><input type="number" name="f1guestRMN" id="f1guestRMN"/>
            </div>
            <div class="form-row">
                <label>Days Staying *</label><input type="number" name="f1guestDS" id="f1guestDS"/>
            </div>
            <div class="form-row">
                <label>Rate/night *</label><input type="number" name="f1guestRATE" id="f1guestRATE"/>
            </div>
            <div class="form-row">
                <h4>Emergency Contact<h4>
            </div>
            <div class="form-row">
                <label>Name</label><input type="text" name="f1guestEC-N" id="f1guestECN"/>
            </div>
            <div class="form-row">
                <label>Phone Number</label><input type="tel" name="f1guestEC-PHN" id="f1guestECPHN"/>
            </div>
            <div class="form-row">
                <label>Address</label><input type="text" name="f1guestEC-ADR" id="f1guestECADR"/>
            </div>
            <div class="form-row">
                <input class="button" type="submit" value="Submit" name="Submit1" id="Submit1"/>
            </div>
        </form>

        <form id="frmf2" name="frmf2" onsubmit="" method="post">
            <div class="form-row">
                <h3>Remove Guest</h3>
            </div>
            <div class="form-row">
                <label>Guest ID *</label><input type="number" name="f2guestID" id="f2guestID">
            </div>
            <div class="form-row">
                <input class="button" type="submit" value="Submit" id="Submit2">
            </div>
        </form>

        <form id="frmf3" name="frmf3" onsubmit="" method="post">
            <div class="form-row">
                <h3>Search Guest</h3>
            </div>
            <div class="form-row">
                <label>Guest ID *</label><input type="number" name="f3guestID" id="f3guestID">
            </div>
            <div class="form-row">
                <input class="button" type="submit" value="Submit" id="Submit3">
            </div>
        </form>

        <form id="frmf4" name="frmf4" onsubmit="" method="post">
            <div class="form-row">
                <h3>Search Room</h3>
            </div>
            <div class="form-row">
                <label>Room Number *</label><input type="number" name="f4RoomNum" id="f4RoomN">
            </div>
            <div class="form-row">
                <input class="button" type="submit" value="Submit" id="Submit4">
            </div>
        </form>

        <form id="frmf5" name="frmf5" onsubmit="" method="post">
            <div class="form-row">
                <h3>Available Rooms</h3>
            </div>
            <div class="form-row">
                <input class="button" type="submit" value="Submit" id="Submit5">
            </div>
        </form>

        <form id="frmf6" name="frmf6"  method="post">
            <div class="form-row">
                <h3>Tender Payment</h3>
            </div>
            <div class="form-row">
                <label>Guest ID *</label><input type="text" name="f6guestID" id="f6guestID">
            </div>
            <div class="form-row">
                <input class="button" type="submit" value="Submit" id="Submit6">
            </div>
        </form>
        </div>
        <div class="body-chunk" style="width: 70%;">
            <div id="Output"></div>
        </div>
        </div>
    </body>
</html>