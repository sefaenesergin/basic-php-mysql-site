function ProfiliDuzenle()
{
    get("profile.php", "content");
}

// get("profile.php", "content")
function get(url,divid)
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200)
        {
            var icerik = this.responseText;
            document.getElementById(divid).innerHTML = icerik;
        }
    };
    xhttp.open("GET", url);
    xhttp.send();

}


function post(url, params)
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200)
        {
            //console.log(this.responseText);
            document.getElementById("mesaj").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", url);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(params);
}


function editphone()
{
    var phonenum = document.getElementById("form_phone").value;
    console.log("Formdaki tel: "+phonenum);

    post("profile_do.php","phone="+phonenum);
}

