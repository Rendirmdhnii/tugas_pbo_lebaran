<?php
// gawe from user datane
class Pengguna {
    private $firstname;
    private $lastname;
    private $nim;
    private $kelas;
    private $prodi;

    // iki gawe nampung data inputan iki ojo di ganti 
    public function __construct($f, $l, $n, $k, $pr) {
        $this->firstname = htmlspecialchars($f);
        $this->lastname = htmlspecialchars($l);
        $this->nim = htmlspecialchars($n);
        $this->kelas = htmlspecialchars($k);
        $this->prodi = htmlspecialchars($pr);
    }

    // iki ketika user klik submit muncul datane 
    public function getInfoAkademik() {
        return "
            <div class='result'>
                <p><strong> DATA MAHASISWA </strong></p>
                <p>NIM: {$this->nim}</p>
                <p>Kelas: {$this->kelas}</p>
                <p>Prodi: {$this->prodi} - Vokasi UB</p>
                <br>
                <a href='index.php' style='color: #007bff; text-decoration: none; font-size: 12px;'>[ Reset ]</a>
            </div>
        ";
    }
}
?>
