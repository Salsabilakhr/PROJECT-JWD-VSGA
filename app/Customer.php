<?php

require_once "inc/Koneksi.php";

class Customer extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_customer";
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
        $nama_customer = $_POST['nama_customer'];
        $alamat_customer = $_POST['alamat_customer'];

        $sql = "INSERT INTO tb_customer ( nama_customer, alamat_customer ) VALUES (:nama_customer,  :alamat_customer)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_customer", $nama_customer);
        $stmt->bindParam(":alamat_customer", $alamat_customer);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_customer WHERE customer_id=:customer_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":customer_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_customer = $_POST['nama_customer'];
        $alamat_customer = $_POST['alamat_customer'];
        $customer_id = $_POST['customer_id'];

        $sql = "UPDATE tb_customer SET nama_customer=:nama_customer, alamat_customer=:alamat_customer WHERE customer_id=:customer_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_customer", $nama_customer);
        $stmt->bindParam(":alamat_customer", $alamat_customer);
        $stmt->bindParam(":customer_id", $customer_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_customer WHERE customer_id=:customer_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":customer_id", $id);
        $stmt->execute();

    }

}