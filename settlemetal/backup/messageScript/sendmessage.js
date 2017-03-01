function sendSMS()
{

  var number= document.getElementById("txt_signin_01").value;
    alert("hello"+number);
  if(number !="")
  {
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
      http = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        http = new ActiveXObject("Microsoft.XMLHTTP");
    }
    var url = "functions/generateOTP.php";
    var params = "number="+number;
    http.open("POST", url, true);

    //Send the proper header information along with the request
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
            document.getElementById("modalfooter").innerHTML=http.responseText;
        }
    }
    http.send(params);
  }
}
