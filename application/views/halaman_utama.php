<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>
<body>
    <h2>INPUT BIODATA</h2>
    <pre>
    <?php echo form_open('Home/kirim_data') ?>
    Nama : <input type="text" name="txtnama" placeholder="Silahkan Input Nama Anda">
    <br>
    Alamat : <textarea name="txtalamat"></textarea>
    <br>
    no. HP : <input type="text" name="txtnohp" placeholder="Silahkan Input No Handphone">
    <br>
    <button type="submit">kirim</button> <button type="reset">batal </button>
    <?php echo form_close() ?>
    <pre>


</body>
</html>