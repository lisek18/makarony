<!DOCTYPE html>
<html lang="pl-PL">

    <head>
        <meta charset="utf-8">
 <link rel="shortcut icon" href="logo.ico">
        <link rel="stylesheet" href="wysmak.css">
<title> Wyświetl makarony</title>
      </head>

<body>
    <div id="container">
    <div id="logo"><a><img src="logo.jpg" width="150" height="125" alt="tekst alternatywny" onClick="history.back();"></a></div>
<div id="menu"><br><br><br><br><br><br><br><br><br>
<?php
$con = new mysqli("localhost","maka","Klasa1618","lisekkk");

$q="SELECT * FROM makarony";
if($wynik=$con->query($q)){

 echo "<table id='tabelka'><tr>";
 echo "<tr>";
 echo "<td colspan='4' id='menuuu'>Menu</td>";
 echo "</tr>";
 echo "<td id='first'>Makaron</td>";
 echo "<td id='duo'>Sos</td>";
 echo "<td id='first'>Rozmiar porcji(g)</td>";
 echo "<td id='duo'>Cena</td>";
 echo "</tr>";

 while($row=$wynik->fetch_array()){
    echo "<tr>";
    echo "<td id='thre'>" . $row["makaron"] . "</td>";
    echo "<td id='for'>" . $row["sos"] . "</td>";
    echo "<td id='thre'>" . $row["wielkosc"] . "</td>";
    echo "<td id='for'>" . $row["cena"] . "</td>";
    echo "</tr>";
 }
 echo "</table>";
}
else{
echo $con->errno . " " . $con->error;}

?></div>
</div>
</body>
</html>
