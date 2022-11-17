<!DOCTYPE html>
        <html lang="pl-PL">

<head>
	<meta charset="utf-8">
 <link rel="shortcut icon" href="logo.ico">
	<link rel="stylesheet" href="usun1.css">
<title> Usuwa makaron </title>
</head>
<body>
    <div id="container">
<?php

echo 'Usunięto pomyślnie';

$con = new mysqli("localhost","maka","Klasa1618","lisekkk");

$xd=$_GET["jj"];

$q="DELETE FROM makarony WHERE id='$xd'";
 $wynik=$con->query($q)

?>
<br><input type="button" id="przycisk" value="Powrót" onClick="history.back();" />
</div>
</body>
</html>