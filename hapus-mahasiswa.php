<?php 

session_start();

// membatasi halaman sebleum login
if (!isset($_SESSION["Login"])) {
    echo "<script>
            alert('Login dulu');
            document.Location.href = 'login.php';
            </script>";
    exit;
}

include 'config/app.php';

// menerima id_mahasiswa yang dipilih pengguna
$id_mahasiswa = (int)$_GET['id_mahasiswa'];

if (delete_mahasiswa($id_mahasiswa) > 0) {
    echo "<script>
            alert('data mahasiswa berhasil dihapus');
            document.location.href = 'mahasiswa.php';
            </script>";
} else {
    echo "<script>
            alert('data mahasiswa gagal dihapus');
            document.location.href = 'mahasiswa.php';
            </script>";
}