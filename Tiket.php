<?php
// tiket.php

abstract class Tiket {
    // Atribut Terenkapsulasi (Protected agar bisa diwariskan ke class anak)
    protected $id_tiket;
    protected $nama_film;
    protected $jadwal_tayang;
    protected $jumlah_kursi;
    protected $harga_dasar_tiket;

    // Constructor untuk inisialisasi data awal
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $harga_dasar_tiket) {
        $this->id_tiket = $id_tiket;
        $this->nama_film = $nama_film;
        $this->jadwal_tayang = $jadwal_tayang;
        $this->jumlah_kursi = $jumlah_kursi;
        $this->harga_dasar_tiket = $harga_dasar_tiket;
    }

    // ==================== METODE ABSTRACT (Tanpa Body) ====================
    // Wajib diimplementasikan ulang secara spesifik oleh class anak nanti
    abstract public function hitungTotalHarga();
    abstract public function tampilkanFasilitas();

    // ==================== GETTER & SETTER ====================

    // Id Tiket
    public function getIdTiket() { return $this->id_tiket; }
    public function setIdTiket($id_tiket) { $this->id_tiket = $id_tiket; }

    // Nama Film
    public function getNamaFilm() { return $this->nama_film; }
    public function setNamaFilm($nama_film) { $this->nama_film = $nama_film; }

    // Jadwal Tayang
    public function getJadwalTayang() { return $this->jadwal_tayang; }
    public function setJadwalTayang($jadwal_tayang) { $this->jadwal_tayang = $jadwal_tayang; }

    // Jumlah Kursi
    public function getJumlahKursi() { return $this->jumlah_kursi; }
    public function setJumlahKursi($jumlah_kursi) { $this->jumlah_kursi = $jumlah_kursi; }

    // Harga Dasar Tiket
    public function getHargaDasarTiket() { return $this->harga_dasar_tiket; }
    public function setHargaDasarTicket($harga_dasar_tiket) { $this->harga_dasar_tiket = $harga_dasar_tiket; }
}
?>
