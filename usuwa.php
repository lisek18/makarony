<html>
    <head>
    <link rel = "stylesheet" href = "usun.css" >
 <link rel="shortcut icon" href="logo.ico">
<title> Usuń pracownika </title>
	
</head>
<body>
<div id="container">
<div id="logo"><a><img src="logo.jpg" width="150" height="125" alt="tekst alternatywny" onClick="history.back();"></a></div>
<?php


$con = new mysqli("localhost","maka","Klasa1618","lisekkk");

$q="SELECT * FROM tab";

if($wynik=$con->query($q)){
	echo"<form action='usuwa1.php' method='get' enctype='text/plain'>";
    echo "<table id='tabelka'>";
    echo    "<tr>";
    echo "<td></td>";
    echo "<td id='first'>ID pracownika</td>";
     echo "<td id='first'>Imię</td>";
     echo "<td id='first'>Nazwisko</td>";
     echo "<td id='first'>Nr. Telefonu</td>";
     echo "<td id='first'>Stanowisko</td>";
     echo "<td id='first'>Język obcy</td>";
     echo "</tr>";
while($row=$wynik->fetch_array()){
    echo "<tr>";
	echo "<td> <input type='radio' name='jj' id='".$row["id"] ."'value='".$row["id"]."'></input></td>";
	echo "<td id='duo'>".$row["id"] .  "</td>";
echo "<td id='duo'>" .$row["Nazwisko"] .  "</td>";
echo "<td id='duo'>" .$row["Imie"] .  "</td>";
echo "<td id='duo'>" .$row["Tel"] .  "</td>";
echo "<td id='duo'>" .$row["id_stan"] .  "</td>";
echo "<td id='duo'>" .$row["id_jezyk"] .  "</td>";


echo"</tr>";

}
echo"<tr>";
echo "<td colspan='7'>" ."<input type='submit' id='przycisk' value='Usuń'>".  "</td>";
echo"</tr>";
echo"</table>";

}

else{
echo $con->errno . " " . $con->error;}
?><br>

</div>

</body>
</html>
