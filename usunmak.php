<html>
    <head>
    <link rel = "stylesheet" href = "usumak.css" >
 <link rel="shortcut icon" href="logo.ico">
<title> Usuń makaron</title>
</head>
<body>
<div id="container">
<div id="logo"><a><img src="logo.jpg" width="150" height="125" alt="tekst alternatywny" onClick="history.back();"></a></div>
<?php


$con = new mysqli("localhost","maka","Klasa1618","lisekkk");

$q="SELECT * FROM makarony";

if($wynik=$con->query($q)){
	echo"<form action='delmak.php' method='get' enctype='text/plain'>";
    echo "<table id='tabelka'>";
    echo    "<tr>";
    echo "<td></td>";
    echo "<td id='first'>ID makaronu</td>";
     echo "<td id='first'>Makaron</td>";
     echo "<td id='first'>Sos</td>";
     echo "<td id='first'>Wielkość</td>";
     echo "<td id='first'>Cena</td>";
     echo "</tr>";
while($row=$wynik->fetch_array()){
    echo "<tr>";
	echo "<td> <input type='radio' name='jj' id='".$row["id"] ."'value='".$row["id"]."'></input></td>";
	echo "<td id='duo'>" .$row["id"] .  "</td>";
echo "<td id='duo'>" .$row["makaron"] .  "</td>";
echo "<td id='duo'>" .$row["sos"] .  "</td>";
echo "<td id='duo'>" .$row["wielkosc"] .  "</td>";
echo "<td id='duo'>" .$row["cena"] .  "</td>";


echo"</tr>";
}
echo"<tr>";
echo "<td colspan='7'>" ."<input type='submit' id='przycisk' value='Usuń'>".  "</td>";
echo"</tr>";
echo"</table>";
}

else{
echo $con->errno . " " . $con->error;}
?>

</div>

</body>
</html>
