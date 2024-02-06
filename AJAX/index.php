<!DOCTYPE html>
<html>
<head>
    <script src="search.js"></script>
</head>
<body>

<h1>Ricerca nel database</h1>

<h3>Scrivi qualcosa:</h3>

<form action="">
    Parola: <input type="text" id="txt1" onkeyup="showHint(this.value)">
</form>

<p>Suggestions: <span id="txtHint"></span></p>


</body>
</html>

