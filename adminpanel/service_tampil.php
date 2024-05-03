<?php

require_once "../app/Service.php";

$service = new Service();
$rows = $service->tampil();

?>
<br>
<br>
<br>
<div class="container">
<h2 class="text-center">Data service</h2>
<a  class="btn btn-outline-success mt-3 mb-3" href="index.php?hal=service_input">Tambah service</a>
<table class="table table-hover">
    <tr class="table-active">
        <td>No</td>
        <td>Jenis Service</td>
        <td>Harga</td>
        <td>Gambar service</td>
        <td>ACTION</td>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['service_id']; ?></td>
        <td><?php echo $row['service_jenis']; ?></td>
        <td><?php echo $row['service_harga']; ?></td>
        <td><img src="../layouts/img/<?php echo $row['gambar_service']; ?>" alt="" style="width:40px; height:40px;"></td>
        <td>
        <a href="index.php?hal=service_edit&id=<?php echo $row['service_id']; ?>" class="btn btn-primary">Edit</a>
        <a href="index.php?hal=service_delete&id=<?php echo $row['service_id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</a></td>
    </tr>
    <?php } ?>
</table>
</div>