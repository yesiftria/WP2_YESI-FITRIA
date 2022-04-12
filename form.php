<?php echo validation_errors()?>

<form action="<?php echo site_url('Matakuliah/cetak')?>" method="post">
    kode : <input type="text" name="kode"><br>
    Nama : <input type="text" name="nama"><br>
    SKS : <input type="number" name="sks"><br>
    <input type="submit" value="simpan">
</form>