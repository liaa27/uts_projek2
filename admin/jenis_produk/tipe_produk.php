<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM jenis_produk";
$rs = $dbh->query($sql);
?>

<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
    <div class="card-body">
        DataTables is a third party plugin that is used to generate the demo table below. For more
        information about DataTables, please visit the
        <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
        .
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <!-- <i class="fas fa-table me-1"></i> -->
        <a class="btn btn-success" href="index.php?hal=jenis_produk/form_tipe_produk">Create Tipe Produk</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>id</th>
                    <th>tipe</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>tipe</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['jenis_produk'] ?></td>
                <td>
                    <a class="btn btn-primary" href="index.php?hal=jenis_produk/view_tipe_produk&id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-primary" href="index.php?hal=jenis_produk/form_tipe_produk&idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-primary" href="jenis_produk/delete_tipe_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['jenis_produk'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
        </table>
    </div>
</div>