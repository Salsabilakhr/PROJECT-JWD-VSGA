
<?php

require_once "../app/Service.php";

$service = new Service();
$rows = $service->tampil();

?>
<form action="service_proses.php" method="post" enctype="multipart/form-data">

<div class="container">
<h2 class="text-center mt-5 mb-2">Input Data</h2>
<div class="form-floating mb-3 mt-3">
            <input
              type="text"
              class="form-control"
              id="service_id"
              placeholder=""
              name="service_id"
            />
            <label for="service_jenis">No</label>
        </div>
<div class="form-floating mb-3 mt-3">
            <input
              type="text"
              class="form-control"
              id="service_jenis"
              placeholder="Masukkan service_jenis"
              name="service_jenis"
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
            />
            <label for="service_harga">Harga Service</label>
        </div>
        <div class="form-group">
            <label for="gambar_service" class="form-label mb-2 mt-2">Unggah Gambar service</label><br />
            <input type="file" name="gambar_service" id="gambar_service" class="form-control-file">
        </div>
        <div>
        <button type="submit" value="Simpan" name="btn_simpan" class="btn btn-primary mt-4">Simpan</button>
        </div>

</div>
</form>
