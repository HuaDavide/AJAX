<!DOCTYPE html>
<html>
<body>

<h1>Ricerca nel database</h1>

<h3>Scrivi qualcosa:</h3>

<form action="">
    Parola: <input type="text" id="txt1" onkeyup="showHint(this.value)">
</form>

<p>Suggestions: <span id="txtHint"></span></p>

<script>
    function showHint(str) {
        var xhttp;
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "getParole.php?parola="+str, true);
        xhttp.send();
    }
</script>

</body>
</html>