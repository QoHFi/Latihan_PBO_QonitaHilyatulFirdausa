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

    public function tampilkanDataSpesifik($db) {
        // Mengambil seluruh data tiket yang memiliki Jenis_Studio 'Velvet'
        $query = "SELECT * FROM tabel_Tiket WHERE Jenis_Studio = 'Velvet'";

        try {
            $stmt = $db->prepare($query);
            $stmt->execute();

            $hasil = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $hasil;
        } catch (PDOException $e) {
            echo "Error saat mengambil data Velvet: " . $e->getMessage();
            return [];
        }
    }

    // ==================== METHOD OVERRIDING (VELVET) ====================
    public function hitungTotalHarga() {
        // Sesuai soal: (jumlah_kursi * harga_dasar_tiket) * 1.50
        return ($this->jumlah_kursi * $this->harga_dasar_tiket) * 1.50;
    }

    // ==================== METHOD OVERRIDING (VELVET) ====================
    public function tampilkanFasilitas() {
        // Mengambil data dari properti spesifik kelas Velvet
        return "Studio Velvet (Premium) - Paket Kenyamanan: " . $this->bantalSelimutPack . " | Layanan Butler: " . $this->layananButler;
    }

    // Getter & Setter spesifik Velvet
    public function getBantalSelimutPack() { return $this->bantalSelimutPack; }
    public function setBantalSelimutPack($bantalSelimutPack) { $this->bantalSelimutPack = $bantalSelimutPack; }
    public function getLayananButler() { return $this->layananButler; }
    public function setLayananButler($layananButler) { $this->layananButler = $layananButler; }
}

?>
