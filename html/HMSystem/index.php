<!DOCTYPE html>
<html>
    <head>
        <title>Hotel Management System</title>
        <link rel = "stylesheet" type = "text/css" href = "index.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
        <div class="body-chunk">
        <form id="frmf1" name="frmf1" action="">
            <div class="form-row">
                <h3>Add Guest</h3>
            </div>
            <div class="form-row">
                <label>Guest ID</label><input type="number" name="f1guestID" id="f1guestID"/>
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
                <label>Phone Number</label><input type="tel" name="f1guestPN" id="f1guestPN"/>
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
                <label>Room Number</label><input type="number" name="f1guestRMN" id="f1guestRMN"/>
            </div>
            <div class="form-row">
                <label>Check In</label><input type="number" name="f1guestCHIN" id="f1guestCHIN"/>
            </div>
            <div class="form-row">
                <label>Check Out</label><input type="number" name="f1guestCHOT" id="f1guestCHOT"/>
            </div>
            <div class="form-row">
                <label>Rate/night</label><input type="number" name="f1guestRATE" id="f1guestRATE"/>
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
                <label>Guest ID</label><input type="number" name="f2guestID" id="f2guestID">
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
                <label>Guest ID</label><input type="number" name="f3guestID" id="f3guestID">
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
                <label>Room Number</label><input type="number" name="f4RoomNum" id="f4RoomN">
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
                <label>Guest ID</label><input type="text" name="f6guestID">
            </div>
            <div class="form-row">
                <input class="submit" type="submit" value="Submit">
            </div>
        </form>
        </div>
        <div class="body-chunk">
            <div id="Output"></div>
        </div>
        </div>

        <script>
            var btnf1 = document.getElementById("btnf1");
            var btnf2 = document.getElementById("btnf2");
            var btnf3 = document.getElementById("btnf3");
            var btnf4 = document.getElementById("btnf4");
            var btnf5 = document.getElementById("btnf5");
            var btnf6 = document.getElementById("btnf6");

            var frmf1 = document.getElementById("frmf1");
            var frmf2 = document.getElementById("frmf2");
            var frmf3 = document.getElementById("frmf3");
            var frmf4 = document.getElementById("frmf4");
            var frmf5 = document.getElementById("frmf5");
            var frmf6 = document.getElementById("frmf6");

            btnf1.onclick = function btnf1Click() {
                frmf2.style.display = "none";
                frmf3.style.display = "none";
                frmf4.style.display = "none";
                frmf5.style.display = "none";
                frmf6.style.display = "none";                
                frmf1.style.display = "flex";
            }

            btnf2.onclick = function btnf2Click() {
                frmf3.style.display = "none";
                frmf4.style.display = "none";
                frmf5.style.display = "none";
                frmf6.style.display = "none";                
                frmf1.style.display = "none";
                frmf2.style.display = "flex";
            }

            btnf3.onclick = function btnf3Click() {
                frmf2.style.display = "none";
                frmf4.style.display = "none";
                frmf5.style.display = "none";
                frmf6.style.display = "none";                
                frmf1.style.display = "none";
                frmf3.style.display = "flex";
            }

            btnf4.onclick = function btnf4Click() {
                frmf2.style.display = "none";
                frmf3.style.display = "none";
                frmf5.style.display = "none";
                frmf6.style.display = "none";                
                frmf1.style.display = "none";
                frmf4.style.display = "flex";
            }

            btnf5.onclick = function btnf5Click() {
                frmf2.style.display = "none";
                frmf3.style.display = "none";
                frmf4.style.display = "none";
                frmf6.style.display = "none";                
                frmf1.style.display = "none";
                frmf5.style.display = "flex";
            }

            btnf6.onclick = function btnf6Click() {
                frmf2.style.display = "none";
                frmf3.style.display = "none";
                frmf4.style.display = "none";
                frmf5.style.display = "none";               
                frmf1.style.display = "none";
                frmf6.style.display = "flex";
            }

            
            $(function() {
                $("#Submit1").click(function() {
                    var gID = $("input#f1guestID").val();
                    var gFN = $("input#f1guestFN").val();
                    var gMN = $("input#f1guestMN").val();
                    var gLN = $("input#f1guestLN").val();
                    var gPN = $("input#f1guestPN").val();
                    var gRN = $("input#f1guestRMN").val();
                    var gCHI = $("input#f1guestCHIN").val();
                    var gCHO = $("input#f1guestCHOT").val();
                    var gRATE = $("input#f1guestRATE").val();
                    var gSTR = $("input#f1guestSTR").val();
                    var gCTY = $("input#f1guestCTY").val();
                    var gSTE = $("input#f1guestSTE").val();
                    var gCTRY = $("input#f1guestCTRY").val();
                    var gZIP = $("input#f1guestZIP").val();
                    var gAGE = $("input#f1guestAGE").val();
                    var gNIP = $("input#f1guestNIP").val();
                    var gECN = $("input#f1guestECN").val();
                    var gECPHN = $("input#f1guestECPHN").val();
                    var gECADR = $("input#f1guestECADR").val();

                    if(gID == ""){
                        $("label#f1guestID_error").show();
                        $("input#f1guestID").focus();
                        return false;
                    }
                    if(gFN == ""){
                        $("label#f1guestFN_error").show();
                        $("input#f1guestFN").focus();
                        return false;
                    }
                    if(gLN == ""){
                        $("label#f1guestLN_error").show();
                        $("input#f1guestLN").focus();
                        return false;
                    }
                    if(gPN == ""){
                        $("label#f1guestPN_error").show();
                        $("input#f1guestPN").focus();
                        return false;
                    }
                    if(gRN == ""){
                        $("label#f1guestRMN_error").show();
                        $("input#f1guestRMN").focus();
                        return false;
                    }
                    if(gCHI == ""){
                        $("label#f1guestCHIN_error").show();
                        $("input#f1guestCHIN").focus();
                        return false;
                    }
                    if(gCHO == ""){
                        $("label#f1guestCHOT_error").show();
                        $("input#f1guestCHOT").focus();
                        return false;
                    }
                    if(gFN == ""){
                        $("label#f1guestFN_error").show();
                        $("input#f1guestFN").focus();
                        return false;
                    }
                    var dataString = 'f1guestID='+ gID + '&f1guestFN='+ gFN + '&f1guestMN='+ gMN +
                    '&f1guestLN='+ gLN + '&f1guestPN='+ gPN + '&f1guestRMN='+ gRN +
                    '&f1guestCHIN='+ gCHI + '&f1guestCHOT='+ gCHO + '&f1guestRATE='+ gRATE +
                    '&f1guestSTR='+ gSTR +
                    '&f1guestCTY='+ gCTY + '&f1guestSTE='+ gSTE + '&f1guestCTRY='+ gCTRY +
                    '&f1guestZIP='+ gZIP + '&f1guestAGE='+ gAGE + '&f1guestNIP='+ gNIP +
                    '&f1guestECN='+ gECN + '&f1guestECPHN='+ gECPHN + '&f1guestECADR='+ gECADR;
                    $.ajax({
                        type: "POST",
                        url: "frmf1.php",
                        data: dataString,
                        success: function(result) {
                            $('#Output').html(result);
                        }
                    });
                    return false;    
                });
                $("#Submit2").click(function() {
                    var gID = $("input#f2guestID").val();
                    if(gID == ""){
                        $("label#f1guestID_error").show();
                        $("input#f1guestID").focus();
                        return false;
                    }
                    var dataString = 'f2guestID='+ gID;
                    $.ajax({
                        type: "POST",
                        url: "frmf2.php",
                        data: dataString,
                        success: function(result) {
                            $('#Output').html(result);
                        }
                    });
                    return false;    
                });
                $("#Submit3").click(function() {
                    var gID = $("input#f3guestID").val();
                    if(gID == ""){
                        $("label#f1guestID_error").show();
                        $("input#f1guestID").focus();
                        return false;
                    }
                    var dataString = 'f3guestID='+ gID;
                    $.ajax({
                        type: "POST",
                        url: "frmf3.php",
                        data: dataString,
                        success: function(result) {
                            $('#Output').html(result);
                        }
                    });
                    return false;    
                });
                $("#Submit4").click(function() {
                    var rMN = $("input#f4RoomN").val();
                    if(rMN == ""){
                        $("label#f1guestID_error").show();
                        $("input#f1guestID").focus();
                        return false;
                    }
                    var dataString = 'f4RoomNum='+ rMN;
                    $.ajax({
                        type: "POST",
                        url: "frmf4.php",
                        data: dataString,
                        success: function(result) {
                            $('#Output').html(result);
                        }
                    });
                    return false;    
                });
                $("#Submit5").click(function() {
                    var dataString ='';
                    $.ajax({
                        type: "POST",
                        url: "frmf5.php",
                        data: dataString,
                        success: function(result) {
                            $('#Output').html(result);
                        }
                    });
                    return false;    
                });
            });
        </script>
    </body>
</html>