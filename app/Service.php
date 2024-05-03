<?php

require_once "../inc/Koneksi.php";

class Service extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_service";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        // Ambil informasi dari form
        $service_jenis = $_POST['service_jenis'];
        $service_harga = $_POST['service_harga'];
    
        // Ambil nama file gambar yang diunggah
        $nama_file = $_FILES['gambar_service']['name'];
    
        // Persiapkan query SQL untuk menyimpan data
        $sql = "INSERT INTO tb_service (service_jenis, service_harga, gambar_service) VALUES (:service_jenis, :service_harga, :gambar_service)";
    
        // Bind parameter dan eksekusi query
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":service_jenis", $service_jenis);
        $stmt->bindParam(":service_harga", $service_harga);
        $stmt->bindParam(":gambar_service", $nama_file); // Menggunakan nama file gambar yang diunggah
        $stmt->execute();
    
        // Pindahkan file gambar ke folder tujuan
        $folder_tujuan = "../layouts/img/"; // Folder tujuan penyimpanan gambar
        $tmp_file = $_FILES['gambar_service']['tmp_name'];
        move_uploaded_file($tmp_file, $folder_tujuan . $nama_file);
    }
    public function edit($id)
    {

        $sql = "SELECT * FROM tb_service WHERE service_id=:service_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":service_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $service_jenis = $_POST['service_jenis'];
        $service_harga = $_POST['service_harga'];
        $service_id = $_POST['service_id'];

        $sql = "UPDATE tb_service SET service_jenis=:service_jenis, service_harga=:service_harga, WHERE service_id=:service_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":service_jenis", $service_jenis);
        $stmt->bindParam(":service_harga", $service_harga);
        $stmt->bindParam(":service_id", $service_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_service WHERE service_id=:service_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":service_id", $id);
        $stmt->execute();

    }

}