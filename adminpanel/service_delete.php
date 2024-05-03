<?php

require_once "../app/Service.php";

$id = $_GET['id'];

$service = new Service();
$rows = $service->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=service_tampil">Kembali</a>