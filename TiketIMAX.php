<?php

require_once 'Tiket.php';

// ==================== 2. CLASS TIKET IMAX ====================
class TiketIMAX extends Tiket {
    // Properti tambahan (spesifik)
    private $kacamata3dId;
    private $efekGerakFitur;

    // Constructor
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket, $kacamata3dId, $efekGerakFitur) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket);
        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    public function tampilkanDataSpesifik($db) {
    // Menggunakan kondisi Jenis_Studio yang jauh lebih efisien
    $query = "SELECT * FROM tabel_Tiket WHERE Jenis_Studio = 'IMAX'";

    try {
        $stmt = $db->prepare($query);
        $stmt->execute();

        $hasil = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $hasil;
    } catch (PDOException $e) {
        echo "Error saat mengambil data IMAX: " . $e->getMessage();
        return [];
    }
}

    // Getter & Setter spesifik IMAX
    public function getKacamata3dId() { return $this->kacamata3dId; }
    public function setKacamata3dId($kacamata3dId) { $this->kacamata3dId = $kacamata3dId; }
    public function getEfekGerakFitur() { return $this->efekGerakFitur; }
    public function setEfekGerakFitur($efekGerakFitur) { $this->efekGerakFitur = $efekGerakFitur; }
}

?>
