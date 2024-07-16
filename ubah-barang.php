<?php

session_start();

$title = ' Ubah Barang';

include 'layout/header.php';

// mengambil id_barang dari url
$id_barang = (int)$_GET['id_barang'];

$barng = select("SELECT * FROM barang WHERE id_barang = $id_barang")[0];

// check apakah tombol tambah ditekan
if (isset($_POST['ubah'])){
    if (update_barang($_POST) > 0){
        echo "<script>
                alert('Data Barang Berhasil Diubah');
                document.location.href = 'index.php';
                </script>";
    } else {
        echo "<script>
                alert(Data Barang Gagal Diubah');
                document.location.href = 'index.php';
                </script>";
    }
}
?>
<div class="container mt-5">
    <h1>Ubah Barang</h1>
    <hr>

    <form action="" method="post">

<input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang['nama']; ?>"
             placeholder="Nama Barang..." required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $barang['jumlah']; ?>"
             placeholder="jumlah Barang..." required>
        </div> 

        <div class="mb-3">
            <label for="nama" class="form-label">Harga Barang</label>
            <input type="text" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>"
             placeholder="Harga Barang..." required>
        </div>

        <button type="submit" name="ubah" class="btn btn-primary"style="float: right;">Ubah</button>
    </form>
</div>
<?php include 'layout/footer.php'; ?>