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

// menerima id akun yang dipilih pengguna
$id_akun = (int)$_GET['id_akun'];

if (delete_akun($id_akun) > 0) {
    echo "<script>
            alert('Data Akun Berhasil Dihapus');
            document.location.href = 'crud-modal.php';
            </script>";
} else {
    echo "<script>
            alert('Data Akun Gagal Dihapus');
            document.location.href = 'crud-modal.php';
            </script>";
}