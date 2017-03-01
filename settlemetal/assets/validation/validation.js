function enable_other_service()
{
  var s_value = document.getElementById("services").value;
  if(s_value == "other")
  {
    document.getElementById("other_serv").removeAttribute("class");
    document.getElementById("other_serv").setAttribute("class","form-group");
  }

}

function getmodels() {
    var str=document.getElementById("mydevices").value;
    if (str == "") {
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.open("POST","assets/getinfo/models.php",true);
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("mymodels").innerHTML = this.responseText;
            }
        };
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("device="+str);
    }
}
function getservices() {
      var str=document.getElementById("mymodels").value;
    if (str == "") {
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("services").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","assets/getinfo/services.php?",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send("models="+str);
    }
}
