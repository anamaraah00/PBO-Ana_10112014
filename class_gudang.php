<?php
class Gudang {
    private $koneksi;

    public function __construct($db_koneksi) {
        $this->koneksi = $db_koneksi;
    }

    // Method untuk mengambil semua data gudang
    public function tampil_semua() {
        $query = "SELECT * FROM tb_gudang"; // Sesuaikan dengan nama tabel di database kamu
        $result = mysqli_query($this->koneksi, $query);
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

    // Method untuk hapus data
    public function hapus($id) {
        mysqli_query($this->koneksi, "DELETE FROM tb_gudang WHERE id_gudang = '$id'");
    }
}
?>