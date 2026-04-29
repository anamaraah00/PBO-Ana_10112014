<?php

// Class manusia
class manusia {
    // Properti dengan visibility protected dan public
    protected $nama = "Ardi";
    public $kelas = "SI 2"; // Menggunakan 'public' alih-alih 'var' (standar modern)

    // Method protected: Hanya bisa diakses dari dalam class ini atau turunannya
    protected function nama() {
        return "Nama : " . $this->nama;
    }

    // Method public: Pintu masuk untuk mengakses method/properti protected
    public function tampilkan_nama() {
        return $this->nama();
    }

    // PERBAIKAN: Diubah menjadi public agar bisa dipanggil dari luar class
    public function tampilkan_kelas() {
        return "Kelas : " . $this->kelas;
    }
}

// Instansiasi class manusia
$manusia = new manusia();

// Output
echo $manusia->tampilkan_nama() . "<br />";
echo $manusia->tampilkan_kelas();

?>