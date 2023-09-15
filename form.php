<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		table, td {
			border: 1px black solid;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

<h2>Exercici 1</h2>

<table>
<?php

echo "	<tr>\n";

$N = 17;
for( $i=1; $i<=$N; $i++ ) {
	echo "\t\t<td>$i</td>\n";
}

echo "	</tr>";

?>

</table>

</body>
</html>
