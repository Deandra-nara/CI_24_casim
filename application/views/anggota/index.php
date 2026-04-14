<!DOCTYPE html>
<html>
<head>
    <title>Data Anggota</title>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>

<h2>Data Anggota</h2>
<a href="<?= base_url('anggota/tambah') ?>">Tambah</a>

<table id="table" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $no=1; foreach($anggota as $a): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $a->nomor_anggota ?></td>
            <td><?= $a->nama ?></td>
            <td><?= $a->telepon ?></td>
            <td><?= $a->email ?></td>
            <td><?= $a->status ?></td>
            <td>
                <a href="<?= base_url('anggota/edit/'.$a->id) ?>">Edit</a>
                <a href="<?= base_url('anggota/hapus/'.$a->id) ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#table').DataTable();
});
</script>

</body>
</html>