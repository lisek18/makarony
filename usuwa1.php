<!DOCTYPE html>
        <html lang="pl-PL">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="usun1.css">
 <link rel="shortcut icon" href="logo.ico">
<title> Usuń pracownika </title>
</head>
<body>
    <div id="container">
<?php
echo 'Usunięto pomyślnie';

$con = new mysqli("localhost","maka","Klasa1618","lisekkk");

$xd=$_GET["jj"];

$q="DELETE FROM tab WHERE id='$xd'";
 $wynik=$con->query($q)

?>
<br><input type="button" id="przycisk" value="Powrót" onClick="history.back();" />
</div>
</body>
</html>