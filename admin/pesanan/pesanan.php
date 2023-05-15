<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pesanan";
$rs = $dbh->query($sql);
?>

<h1 class="mt-4">Tables</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
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
        <a class="btn btn-success" href="index.php?hal=pesanan/form_pesanan">Create Pesanan</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>jenis_tiket</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>jenis_tiket</th>
                    <th>quantity</th>
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
                <td><?= $row['tanggal'] ?></td>
                <td><?= $row['produk_id'] ?></td>
                <td><?= $row['quantity'] ?></td>
                <td>
                    <a class="btn btn-primary mb-3" href="index.php?hal=pesanan/view_pesanan&id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-primary mb-3" href="index.php?hal=pesanan/form_pesanan&idedit=<?= $row['id'] ?>">Edit</a> <br>
                    <a class="btn btn-primary mb-3  " href="pesanan/delete_pesanan?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['tanggal'] ?>?')) {return false}">Delete</a>

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