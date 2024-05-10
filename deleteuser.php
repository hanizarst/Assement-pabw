<?php

$koneksi = new mysqli("localhost", "root", "", "telkompay");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM user WHERE id = $id";
    if ($koneksi->query($query) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $koneksi->error;
    }
} else {
    echo "ID tidak diterima";
}

$koneksi->close();  