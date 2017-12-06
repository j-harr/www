window.onload = function(){
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

var output = document.getElementById("Output");

btnf1.onclick = function btnf1Click() {
    output.style.display = "none";
    frmf2.style.display = "none";
    frmf3.style.display = "none";
    frmf4.style.display = "none";
    frmf5.style.display = "none";
    frmf6.style.display = "none";               
    frmf1.style.display = "flex";
}
btnf2.onclick = function btnf2Click() {
    output.style.display = "none";
    frmf3.style.display = "none";
    frmf4.style.display = "none";
    frmf5.style.display = "none";
    frmf6.style.display = "none";                
    frmf1.style.display = "none";
    frmf2.style.display = "flex";
}
btnf3.onclick = function btnf3Click() {
    output.style.display = "none";
    frmf2.style.display = "none";
    frmf4.style.display = "none";
    frmf5.style.display = "none";
    frmf6.style.display = "none";                
    frmf1.style.display = "none";
    frmf3.style.display = "flex";
}
btnf4.onclick = function btnf4Click() {
    output.style.display = "none";
    frmf2.style.display = "none";
    frmf3.style.display = "none";
    frmf5.style.display = "none";
    frmf6.style.display = "none";                
    frmf1.style.display = "none";
    frmf4.style.display = "flex";
}
btnf5.onclick = function btnf5Click() {
    output.style.display = "none";
    frmf2.style.display = "none";
    frmf3.style.display = "none";
    frmf4.style.display = "none";
    frmf6.style.display = "none";                
    frmf1.style.display = "none";
    frmf5.style.display = "flex";
}
btnf6.onclick = function btnf6Click() {
    output.style.display = "none";
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
        var gPN2 = $("input#f1guestPN2").val();
        var gPN3 = $("input#f1guestPN3").val();
        var gRN = $("input#f1guestRMN").val();
        var gDS = $("input#f1guestDS").val();
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
            alert("Guest ID is a required field.");
            return false;
        }
        if(gPN == ""){
            alert("Phone Number is a required field.");
            return false;
        }
        if(gRN == ""){
            alert("Room Number is a required field.");
            return false;
        }
        if(gDS == ""){
            alert("Days staying is a required field.");
            return false;
        }
        if(gRATE == ""){
            alert("Rate/night is a required field.");
            return false;
        }
        var dataString = 'f1guestID='+ gID + '&f1guestFN='+ gFN + '&f1guestMN='+ gMN +
        '&f1guestLN='+ gLN + '&f1guestPN='+ gPN + '&f1guestPN='+ gPN2 + '&f1guestRMN='+ gRN +
        '&f1guestDS='+ gDS + '&f1guestRATE='+ gRATE + '&f1guestPN3='+ gPN3 +
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
                $('#Output').show();
            }
        });
        return false;    
    });
    $("#Submit2").click(function() {
        var gID = $("input#f2guestID").val();
        if(gID == ""){
            alert("Guest ID is a required field.");
            return false;
        }
        var dataString = 'f2guestID='+ gID;
        $.ajax({
            type: "POST",
            url: "frmf2.php",
            data: dataString,
            success: function(result) {
                $('#Output').html(result);
                $('#Output').show();
            }
        });
        return false;    
    });
    $("#Submit3").click(function() {
        var gID = $("input#f3guestID").val();
        if(gID == ""){
            alert("Guest ID is a required field.");
            return false;
        }
        var dataString = 'f3guestID='+ gID;
        $.ajax({
            type: "POST",
            url: "frmf3.php",
            data: dataString,
            success: function(result) {
                $('#Output').html(result);
                $('#Output').show();
            }
        });
        return false;    
    });
    $("#Submit4").click(function() {
        var rMN = $("input#f4RoomN").val();
        if(rMN == ""){
            alert("Room number is a required field.");
            return false;
        }
        var dataString = 'f4RoomNum='+ rMN;
        $.ajax({
            type: "POST",
            url: "frmf4.php",
            data: dataString,
            success: function(result) {
                $('#Output').html(result);
                $('#Output').show();
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
                $('#Output').show();
            }
        });
        return false;    
    });
    $("#Submit6").click(function() {
        var gID = $("input#f6guestID").val();
        if(gID == ""){
            alert("Guest ID is a required field.");
            return false;
        }
        var dataString = 'f6guestID='+ gID;
        $.ajax({
            type: "POST",
            url: "frmf6.php",
            data: dataString,
            success: function(result) {
                $('#Output').html(result);
                $('#Output').show();
            }
        });
        return false;    
    });
});
}