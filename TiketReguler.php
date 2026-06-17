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

    // ==================== TAMBAHAN FUNGSI QUERY REGULER ====================
    public function tampilkanDataSpesifik($db) {
        // Mengambil seluruh data tiket yang memiliki Jenis_Studio 'Regular'
        $query = "SELECT * FROM tabel_Tiket WHERE Jenis_Studio = 'Regular'";

        try {
            $stmt = $db->prepare($query);
            $stmt->execute();

            $hasil = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $hasil;
        } catch (PDOException $e) {
            echo "Error saat mengambil data Reguler: " . $e->getMessage();
            return [];
        }
    }

    // ==================== WAJIB: MENGGUGURKAN ABSTRACT METHOD ====================
    public function hitungTotalHarga() {
        return $this->harga_dasar_tiket * $this->jumlah_kursi;
    }

    // ==================== METHOD OVERRIDING (REGULER) ====================
    public function tampilkanFasilitas() {
        // Mengambil data dari properti spesifik kelas Reguler
        return "Studio Reguler - Fasilitas Audio: " . $this->tipeAudio . " | Lokasi Kursi: Baris " . $this->lokasiBaris;
    }

    // Getter & Setter spesifik Reguler
    public function getTipeAudio() { return $this->tipeAudio; }
    public function setTipeAudio($tipeAudio) { $this->tipeAudio = $tipeAudio; }

    // Sudah diperbaiki dari getLocationsBaris menjadi getLokasiBaris
    public function getLokasiBaris() { return $this->lokasiBaris; }
    public function setLokasiBaris($lokasiBaris) { $this->lokasiBaris = $lokasiBaris; }
}

?>
