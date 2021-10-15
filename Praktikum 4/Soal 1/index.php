<!DOCTYPE html>
<meta name ="author" content="TristanVivaldy 2172032">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="hasiljadi.php" method="POST">
    <table align="center" border="0" cellspacing="7">
        <caption> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Form Input</b> </caption>
        <tr>
            <td>Nama</td>
            <td>&nbsp;&nbsp;: </td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>&nbsp;&nbsp;: </td>
            <td><input type="email" name="mail" id="mail"></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>&nbsp;&nbsp;: </td>
            <td><input type="number" name="nomor" id="nomor"></td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td>&nbsp;&nbsp;: </td>
            <td><input type="text" name="kegiatan" id="kegiatan"></td>
        </tr>
        <tr>
            <td align="left" vAlign="middle">Description</td>
            <td align="left" vAlign="middle">&nbsp;&nbsp;:</td>
            <td align="left" vAlign="center"><textarea name="deskripsi" id="deskripsi" cols="25" rows="10"></textarea></td>
        </tr>
    </table>
    <p align="center">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
    </p>
    </form>
</body>
</html>