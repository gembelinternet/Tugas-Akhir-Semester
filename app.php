<?php
header('content-type:application/json');

$total = (($_POST['nilai_kehadiran']*20/100)+($_POST['nilai_tugas']*25/100)+($_POST['nilai_uts']*30/100)+($_POST['nilai_uas']*25/100));

echo json_encode(['nama_mahasiswa' => $_POST['nama_mahasiswa'], 'total' => $total]);
?>