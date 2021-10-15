<!DOCTYPE html>
<meta name="author" content="TristanVivaldy 2172032">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HasilForm</title>
</head>
<body align="center">
<hr style="opacity:0.5" >
    <h2>Form Input Berhasil Diterima</h2>
    <?php
    echo 
    "<p> 
    Nama saya adalah $_POST[nama]. <br>
    Email saya yaitu $_POST[mail]. <br>
    Nomor hp saya adalah $_POST[nomor]. <br>
    Hobby saya yaitu $_POST[kegiatan]. <br>
    Deskripsi diri saya adalah $_POST[deskripsi].   
    </p>"
    ?>
<hr style="opacity:0.5" >
</body>
</html>