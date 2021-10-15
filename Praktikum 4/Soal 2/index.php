<!DOCTYPE html>
<meta name="author" content="TristanVivaldy 2172032">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <form action="jadi.php" method="GET">
    <table border="2" align="center" cellspacing="0" cellpadding="0">
        <tr>
            <td bgcolor="#eb4d4b" align="center" colspan="2" width="270px">Kalkulator</td>
        </tr>
        <tr>
            <td bgcolor="ff7979" width="100">Angka Pertama</td>
            <td><input type="number" name="first" id="first"></td>
        </tr>
        <tr>
            <td bgcolor="ff7979">Angka Kedua</td>
            <td><input type="number" name="second" id="second"></td>
        </tr>
        <tr>
            <td bgcolor="ff7979"> Operator</td>
            <td><input type="text" name="operasi" id="operasi"></td>
        </tr>
        <tr>
            <td bgcolor="#eb4d4b" align="center" colspan="2" width="100px"> <input type="submit" value="Submit"> <input type="reset" value="Reset"></td>
        </tr>
    </table>
    </form>
</body>
</html>