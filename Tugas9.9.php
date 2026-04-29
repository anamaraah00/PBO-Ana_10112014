<?php

class Tabungan {
    private $saldo; // Encapsulation: Saldo tidak bisa diakses langsung
    protected $namaSiswa;

    public function __construct($nama, $saldoAwal) {
        $this->namaSiswa = $nama;
        $this->saldo = $saldoAwal;
    }

    public function setor($jumlah) {
        $this->saldo += $jumlah;
        return "Berhasil setor Rp " . number_format($jumlah);
    }

    public function tarik($jumlah) {
        if ($this->saldo >= $jumlah) {
            $this->saldo -= $jumlah;
            return "Berhasil tarik Rp " . number_format($jumlah);
        }
        return "Gagal! Saldo tidak cukup.";
    }

    public function getSaldo() {
        return "Saldo Akhir: Rp " . number_format($this->saldo, 0, ',', '.');
    }
}

class Siswa extends Tabungan {
    public function cetakIdentitas() {
        return "<h3>Nama Siswa: $this->namaSiswa</h3>";
    }
}

// Simulasi Transaksi (Karena di browser tidak bisa input manual lewat fgets)
$siswa1 = new Siswa("Siswa 1", 50000);
echo $siswa1->cetakIdentitas();
echo $siswa1->setor(20000) . "<br>";
echo $siswa1->tarik(10000) . "<br>";
echo $siswa1->getSaldo() . "<hr>";

$siswa2 = new Siswa("Siswa 2", 100000);
echo $siswa2->cetakIdentitas();
echo $siswa2->tarik(120000) . "<br>"; // Contoh gagal tarik
echo $siswa2->getSaldo();
?>