<!DOCTYPE html>
<meta name="author" content="TristanVivaldy 2172032">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HasilBoard</title>
</head>
<body>

    <?php
        $nomor = $_GET["angka"];

    ?>

<form action="" method="GET">
    <p>
Create A Chess Board <br> <br>
Ukuran Board : <input type="number" name="angka" id="angka"> <input type="submit" value="Buat Board">
    </p>
</form>

<table width="400" height="400" border="3" cellspacing="0" cellpadding="3"> 
  <?php 
  for ($x = 1; $x <= $nomor ; $x++ ) {
    echo "<tr>"; 
    for ($y = 1; $y <= $nomor ; $y++) {
    $total = $x+$y;
    if($total % 2 == 0) {
    echo "<td bgcolor='black'></td>";
        }
    else echo "<td></td>"; 
}
    echo "</tr>";
}
    ?>
</table>


</body>
</html>