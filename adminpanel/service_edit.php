<?php

require_once "../app/Service.php";

$id = $_GET['id'];
$service = new Service();

$row = $service->edit($id);
?>
<form action="service_proses.php" method="post">
    <div class="container">
<h2 class="text-center mb-2 mt-2">Edit Data service</h2>
<input type="hidden" name="service_id" value="<?php echo $row['service_id']; ?>">
<div class="form-floating mb-3 mt-3">
            <input
              type="text"
              class="form-control"
              id="service_jenis"
              placeholder="Masukkan service_jenis"
              name="service_jenis"
              value="<?php echo $row['service_jenis']; ?>"
            />
            <label for="service_jenis">Jenis Service</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input
              type="text"
              class="form-control"
              id="service_harga"
              placeholder="Masukkan service_harga"
              name="service_harga"
              value="<?php echo $row['service_harga']; ?>"
            />
            <label for="service_harga">Harga</label>
        </div>
        <div>
        <button type="submit" value="Simpan" name="btn_update" class="btn btn-warning">Edit</button>
        </div>
    </div>
</form>