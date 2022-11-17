<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<link rel = "stylesheet" href = "jezyk.css" >
 <link rel="shortcut icon" href="logo.ico">
    <title>Wyszukaj po języku</title>

    <meta http-equiv="X-Ua-Compatible" content="IE=edge">


</head>

<body>
<div id="container">
<div id="logo"><a href="index.html"><img src="logo.jpg" width="150" height="125" alt="tekst alternatywny" ><br></a></div>
	<form action="jezyk.php" method="post">

		<label>
		<select id="im" name="jezyki">
	<option selected>Angielski</option>
	<option>Niemiecki</option>
	<option>Hiszpański</option>
    <option>Rosyjski</option>
	<option>Ukraiński</option>
	<option>Włoski</option>
	<option>Francuski</option>
	<option>Portugalski</option>
	<option>Duński</option>
	<option>Inny</option>

</select>
		</label>

		<br><br><input type="submit" id="przycisk" value="Szukaj">

	</form>

<?php

	if(isset($_POST["jezyki"]))
	{

		if(empty($_POST["jezyki"]))
		{
			echo '<span style="color:yellow;">Nie podano nazwy klasy!</span>';
		}
		else
		{
			require_once "e.php";

			$conn = mysqli_connect($host, $user, $pass, $db) or die("Błąd połączenia!");

			mysqli_set_charset($conn, "utf8");



      $jezyki = $_POST["jezyki"];

			$q = "SELECT Imie,Nazwisko  FROM tab, jezyki WHERE nazwa='$jezyki' AND jezyki.id = tab.id_jezyk";

			$result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");

			$ile = mysqli_num_rows($result);

			if($ile == 0)
			{
				echo '<span style="color:red;">Nie ma takiego jezyka</span>';
			}
			else
			{

echo<<<END

	<table>
		<thead>
			<tr>
				<th style="color:black;"> Imię</th>
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
