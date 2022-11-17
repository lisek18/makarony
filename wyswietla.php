<html>
    <head>
    <link rel = "stylesheet" href = "wysp.css" >
 <link rel="shortcut icon" href="logo.ico">
<title> Wyświetl pracownika</title>
</head>
<body>
<div id="container">
<div id="logo"><a><img src="logo.jpg" width="150" height="125" alt="tekst alternatywny" onClick="history.back();"></a></div>
<?php
$con = new mysqli("localhost","maka","Klasa1618","lisekkk");
$q="SELECT * FROM tab";

if($wynik=$con->query($q)){
    echo "<table id='tabelka'>";
echo    "<tr>";
 echo "<td id='first'>Imię</td>";
 echo "<td id='first'>Nazwisko</td>";
 echo "<td id='first'>Nr. Telefonu</td>";
 echo "<td id='first'>Język obcy</td>";
 echo "</tr>";
while($row=$wynik->fetch_array()){
    echo"<tr>";
echo "<td id='duo'>" .$row["Imie"] .  "</td>";
echo "<td id='duo'>" .$row["Nazwisko"] .  "</td>";
echo "<td id='duo'>" .$row["Tel"] .  "</td>";
echo "<td id='duo'>" .$row["id_jezyk"] . "</td>";
echo"</tr>";}
}
else{
echo $con->errno . " " . $con->error;}
?>
</div>
</body>
</html>
