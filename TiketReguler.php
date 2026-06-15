<?php

require_once 'Tiket.php';

// ==================== 1. CLASS TIKET REGULER ====================
class TiketReguler extends Tiket {
    // Properti tambahan (spesifik)
    private $tipeAudio;
    private $lokasiBaris;

    // Constructor
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $tipeAudio, $lokasiBaris) {
        // parent::__construct untuk mengisi atribut yang ada di kelas induk
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }


    // Getter & Setter spesifik Reguler
    public function getTipeAudio() { return $this->tipeAudio; }
    public function setTipeAudio($tipeAudio) { $this->tipeAudio = $tipeAudio; }
    public function getLocationsBaris() { return $this->lokasiBaris; }
    public function setLokasiBaris($lokasiBaris) { $this->lokasiBaris = $lokasiBaris; }
}


?>
