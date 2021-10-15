<!DOCTYPE html>
<meta name="author" content="TristanVivaldy 2172032">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HasilHitung</title>
</head>
<body>
<?php
 $satu = $_GET["first"];
 $dua = $_GET["second"];
 $tiga = $_GET["operasi"];
 ?> 
<table border="2" align="center" cellspacing="0" cellpadding="0">
<tr>
    <td bgcolor="#badc58" align="center" colspan="2" width="200">Kalkulator</td>
</tr>
<tr>
    <td bgcolor="#6ab04c" width="100">Angka Pertama</td>
    <?php
    echo "<td align='center'> $satu </td>"
    ?>
</tr>
<tr>
    <td bgcolor="#6ab04c">Angka Kedua</td>
    <?php
    echo "<td align='center'> $dua </td>"
    ?>
</tr>
<tr>
    <td bgcolor="#6ab04c"> Operator</td>
    <?php
    echo "<td align='center'> $tiga </td>"
    ?>
</tr>
<tr>
    <td bgcolor="#badc58" align="center" colspan="2"> Hasil =
<?php
    if ($tiga =="+") {
        echo $satu+$dua;
    } 
    else if ($tiga =="-") {
        echo $satu-$dua;
    }
    else if ($tiga =="*") {
        echo $satu*$dua;
    }
    else if ($tiga == "/") {
        echo $satu/$dua;
    }
?>
</td>
</tr>
</table>

</body>
</html>