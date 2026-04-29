<?php

// buat class komputer
class komputer {

    // property dengan hak akses protected
    private $jenis_processor = "Intel Core i7-4790 3.6Ghz";
    protected $jenis_RAM = "DDR 4";
    public $jenis_VGA = "PCI Express";

    public function tampilkan_processor() {
        return $this->jenis_processor;
    }

    public function tampilkan_jenisprocessor() {
        return $this->jenis_processor;
    }

    private function tampilkan_ram() {
        return $this->jenis_RAM;
    }

    protected function tampilkan_vga() {
        return $this->jenis_VGA;
    }

    public function tampilkan_vga2() {
        return $this->tampilkan_vga();
    }
}

// buat class laptop
class laptop extends komputer {

    public function display_processor() {
        // PERBAIKAN: Karena $jenis_processor di parent adalah PRIVATE, 
        // anak tidak bisa akses langsung. Harus lewat method public parent.
        return $this->tampilkan_processor(); 
    }

    public function display_processor2() {
        return $this->tampilkan_processor();
    }

    public function display_ram() {
        return $this->jenis_RAM;
    }

    public function display_ram2() {
        // Catatan: Ini akan error jika tampilkan_ram() di parent adalah private.
        // return $this->tampilkan_ram(); 
        return "Akses RAM dibatasi";
    }

    public function display_vga() {
        return $this->tampilkan_vga();
    }

    private function display_processorkomputer() {
        return $this->tampilkan_processor();
    }
    
    // Method pembantu agar Line 67 tidak error
    public function get_processor_internal() {
        return $this->display_processorkomputer();
    }
}

// buat objek dari class laptop (instansiasi)
$komputer = new komputer();
$laptop = new laptop();

// jalankan method dari class komputer
echo "Line 61 : ".$komputer->tampilkan_processor()."<br />";
echo "Line 62 : ".$laptop->display_processor()."<br />"; // SEKARANG SUDAH FIX
echo "Line 63 : ".$laptop->display_processor2()."<br />";
echo "Line 64 : ".$laptop->tampilkan_jenisprocessor()."<br />";
echo "Line 65 : ".$laptop->display_ram()."<br />";
echo "Line 66 : ".$laptop->display_vga()."<br />";
echo "Line 67 : ".$laptop->get_processor_internal()."<br />"; 
?>