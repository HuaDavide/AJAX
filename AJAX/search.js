function showHint(str) {
    var xhttp;
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var parole_json = this.responseText;
            var parole = JSON.parse(parole_json);

            var html = "<ul>";
            parole.forEach(function (parola) {
                html += "<li>" + parola + "</li>";
            })
            html += "</ul>";

            document.getElementById("txtHint").innerHTML = html;
        }
    };
    xhttp.open("GET", "getParole.php?parola=" + str, true);
    xhttp.send();
}