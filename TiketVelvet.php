<?php

require_once 'Tiket.php';

// ==================== 3. CLASS TIKET VELVET ====================
class TiketVelvet extends Tiket {
    // Properti tambahan (spesifik)
    private $bantalSelimutPack;
    private $layananButler;

    // Constructor
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $bantalSelimutPack, $layananButler) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }


    // Getter & Setter spesifik Velvet
    public function getBantalSelimutPack() { return $this->bantalSelimutPack; }
    public function setBantalSelimutPack($bantalSelimutPack) { $this->bantalSelimutPack = $bantalSelimutPack; }
    public function getLayananButler() { return $this->layananButler; }
    public function setLayananButler($layananButler) { $this->layananButler = $layananButler; }
}

?>
