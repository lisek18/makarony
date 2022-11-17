<!DOCTYPE html>
        <html lang="pl-PL">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="dod.css">
 <link rel="shortcut icon" href="logo.ico">
<title> Dodaj pracownika </title>
</head>
<body>
    <div id="container">
<?php
$ff=$_GET["Imie"];
$vv=$_GET["Nazwisko"];
$hh=$_GET["Tel"];
$bb=$_GET["Stanowisko"];
$pp=$_GET["jezyk"];

echo 'Pomyślnie dodano pracownika ';

$con = new mysqli("localhost","maka","Klasa1618","lisekkk");

$q="INSERT INTO tab (Nazwisko, Imie ,Tel, id_stan, id_jezyk ) VALUES ('".$ff."' , '".$vv."' , '".$hh."' , '".$bb[0]."', '".$pp[0]."'); ";
 $wynik=$con->query($q)

?>
<br><input type="button" id="przycisk" value="Powrót" onClick="history.back();" />
</div>
</body>
</html>
