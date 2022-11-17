<!DOCTYPE html>
        <html lang="pl-PL">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="dod.css">
 <link rel="shortcut icon" href="logo.ico">
<title> Dodaj makaron </title>
</head>
<body>
    <div id="container">
<?php
$ff=$_GET["makaron"];
$vv=$_GET["sos"];
$hh=$_GET["wiel"];
$tt=$_GET["cena"];
echo 'Pomyślnie dodano nowy makaron ';
$con = new mysqli("localhost","maka","Klasa1618","lisekkk");

$q="INSERT INTO makarony (makaron, sos, wielkosc, cena ) VALUES ('".$ff."' , '".$vv."' , '".$hh."', '".$tt."'); ";
 $wynik=$con->query($q)

?>
<br><input type="button" id="przycisk" value="Powrót" onClick="history.back();" />
</div>
</body>
</html>
