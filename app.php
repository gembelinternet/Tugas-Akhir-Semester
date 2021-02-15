<?php
header('content-type:application/json');
echo json_encode(['x' => $_POST['nama_mahasiswa']]);
?>