<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<link rel = "stylesheet" href = "wysstan.css" >
 <link rel="shortcut icon" href="logo.ico">
    <title>Wyszukaj stanowisko</title>

    <meta http-equiv="X-Ua-Compatible" content="IE=edge">


</head>

<body>
	<div id="container">
<div id="logo"><a href="index.html"><img src="logo.jpg" width="150" height="125" alt="tekst alternatywny" ><br></a></div>
	<form action="stanowisko.php" method="post">

		<label>
		<a id="n1">Wybierz stanowisko<br></a>
<select id="im" name="stanowiska">
	<option selected>Kucharz</option>
	<option>Kelner</option>
	<option>Sprzątaczka</option>
    <option>Menager</option>
	<option>Szef kelnera</option>
	<option>Szef kucharza</option>
	<option>Właściciel</option>


</select>

		</label>
<br><br>
		<input type="submit" id="przycisk" value="Pokaż ">

	</form>

<?php

	if(isset($_POST["stanowiska"]))
	{

		if(empty($_POST["stanowiska"]))
		{
			echo '<span style="color:yellow;">Nie podano nazwy klasy!</span>';
		}
		else
		{
			require_once "e.php";

			$conn = mysqli_connect($host, $user, $pass, $db) or die("Błąd połączenia!");

			mysqli_set_charset($conn, "utf8");



      $stanowiska = $_POST["stanowiska"];

			$q = "SELECT Imie, Nazwisko FROM tab, stanowiska WHERE nazwa='$stanowiska' AND stanowiska.id = tab.id_stan";

			$result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");

			$ile = mysqli_num_rows($result);

			if($ile == 0)
			{
				echo '<span style="color:red;">Nie ma takiego stanowiska</span>';
			}
			else
			{

echo<<<END

	<table>
		<thead>
			<tr>
				<th style="color:black;">Imię</th>
				<th style="color:black;">Nazwisko</th>

			</tr>
		</thead>
		<tbody>

END;


while($row = mysqli_fetch_assoc($result))
{
  echo "\r\n\t\t\t<tr>";
  foreach($row as $col)
  {
    echo "<td>$col</td>";

  }
  echo "</tr>";




}
echo<<<END
\r\n
</tbody>
</table>
END;



}

mysqli_close($conn);

}


}



?>
</div>
</body>
</html>
