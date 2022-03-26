<?php

error_reporting(0);

$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];

//cek apakah nik sudah terdaftar 
$data = file("config.txt", FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $pecah = explode('|', $value);
    if ($nik==$pecah['0']) {
        $cek = true;
    }
}

if($cek) { //jika sudah terdaftar?>
    <script type="text/javascript">
    alert("Maaf Nik yang anda masukan sudah terdaftar.");
    window.location.assign('register.php');
    </script>
<?php }else {
    //buat format penyimoanan ke txt
    $format = "\n$nik|$nama_lengkap";
    //buka file config.txt
    $file = fopen("config.txt", "a");
    fwrite($file, $format);
    //tutup file
    fclose($file);
    ?>
    <script type="text/javascript">
    alert("Terimakasih sudah mendaftar di peduli lindungi");
    window.location.assign('register.php');
    </script>
    <?php
}