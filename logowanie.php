<!DOCTYPE html>
<html lang="pl-PL">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="logowanie.css">
 <link rel="shortcut icon" href="logo.ico">
<title> Logowanie </title>
      </head>

<body>
    <div id="container">
        <div id="menelu"><p>
            <div id="n1">  Makaroniarnia "pod zdechłą sroką" </div>
           <div id="n2"> <a href="index.html"><img src="admin.jpg" height="75px" width="150px" alt="tekst alternatywny"></a> </div>

        </p>

            <br><br><br><br>

</div>
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
<iframe width=1844 height=100 name="strony" src="stopka.html" border="0"></iframe>
</div>
</body>
</html>
