<?php

require_once "../app/Service.php";

$service = new Service();

if (isset($_POST['btn_simpan'])) {
    $service->simpan();
    header("location:index.php?hal=service_tampil");
}

if (isset($_POST['btn_update'])) {
    $service->update();
    header("location:index.php?hal=service_tampil");
} 