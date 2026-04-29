<?php

class Karyawan {
    public $nama;
    public $golongan;
    public $jamLembur;
    public $gajiPokok;

    // Data gaji pokok sesuai soal
    private $gajiList = [
        "Ib"=>1250000, "Ic"=>1300000, "Id"=>1350000,
        "IIa"=>2000000, "IIb"=>2100000, "IIc"=>2200000, "IId"=>2300000,
        "IIIa"=>2400000, "IIIb"=>2500000, "IIIc"=>2600000, "IIId"=>2700000,
        "IVa"=>2800000, "IVb"=>2900000, "IVc"=>3000000, "IVd"=>3100000
    ];

    // ================= CONSTRUCTOR =================
    public function __construct($nama, $golongan, $jamLembur){
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
        $this->gajiPokok = $this->getGajiPokok();
    }

    // ================= METHOD GAJI POKOK =================
    public function getGajiPokok(){
        return $this->gajiList[$this->golongan] ?? 0;
    }

    // ================= HITUNG TOTAL GAJI =================
    public function getTotalGaji(){
        $lembur = $this->jamLembur * 15000;
        return $this->gajiPokok + $lembur;
    }

    // ================= DESTRUCTOR =================
    public function __destruct(){
        unset($this->nama);
        unset($this->golongan);
        unset($this->jamLembur);
        unset($this->gajiPokok);
    }
}

// ================= DATA AWAL =================
$data = [
    new Karyawan("Winny","Ib",30),
    new Karyawan("Stendy","IIIc",32),
    new Karyawan("Alfred","IVb",30)
];

// ================= MENU =================
do {
    echo "\n===== MENU GAJI KARYAWAN =====\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";

    $menu = trim(fgets(STDIN));

    switch($menu){

        // ===== TAMPILKAN DATA =====
        case 1:
            echo "\n===== DATA GAJI KARYAWAN =====\n";
            echo "No | Nama | Golongan | Jam Lembur | Total Gaji\n";

            foreach($data as $i => $k){
                echo ($i+1)." | $k->nama | $k->golongan | $k->jamLembur | Rp "
                . number_format($k->getTotalGaji(),0,",",".") . "\n";
            }
            break;

        // ===== TAMBAH DATA =====
        case 2:
            echo "Nama: ";
            $nama = trim(fgets(STDIN));

            echo "Golongan: ";
            $gol = trim(fgets(STDIN));

            echo "Jam lembur: ";
            $jam = trim(fgets(STDIN));

            if(!is_numeric($jam)){
                echo "Jam lembur harus angka!\n";
                break;
            }

            $data[] = new Karyawan($nama,$gol,$jam);
            echo "Data berhasil ditambahkan!\n";
            break;

        // ===== UPDATE DATA =====
        case 3:
            echo "Pilih nomor data: ";
            $i = trim(fgets(STDIN)) - 1;

            if(isset($data[$i])){
                echo "Nama baru: ";
                $nama = trim(fgets(STDIN));

                echo "Golongan baru: ";
                $gol = trim(fgets(STDIN));

                echo "Jam lembur baru: ";
                $jam = trim(fgets(STDIN));

                $data[$i] = new Karyawan($nama,$gol,$jam);
                echo "Data berhasil diupdate!\n";
            } else {
                echo "Data tidak ditemukan!\n";
            }
            break;

        // ===== HAPUS DATA =====
        case 4:
            echo "Pilih nomor data: ";
            $i = trim(fgets(STDIN)) - 1;

            if(isset($data[$i])){
                unset($data[$i]);
                $data = array_values($data); // rapikan index
                echo "Data berhasil dihapus!\n";
            } else {
                echo "Data tidak ditemukan!\n";
            }
            break;

        // ===== KELUAR =====
        case 5:
            echo "Keluar program...\n";
            break;

        default:
            echo "Menu tidak valid!\n";
    }

} while($menu != 5);

?>