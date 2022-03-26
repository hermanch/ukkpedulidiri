<?php

session_start();

$nik = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu'];
$id_catatan = rand(0, 10000);




$format = "\n$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";
// buka file config

$file = fopen('catatan.txt', 'a');
fwrite($file, $format);

//tutup file catatan
fclose($file);
?>
<script type="text/javascript">
        alert('Data Catatan Perjalanan Sudah Disimpan !.')
        window.location.assign("user.php?url=catatan_perjalanan");
</script>