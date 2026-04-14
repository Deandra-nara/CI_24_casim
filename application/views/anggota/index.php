<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Data Anggota</h1>

<a href="<?= base_url('anggota/tambah') ?>" class="btn btn-primary mb-3">
    Tambah
</a>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable">
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
                        <td>
                            <span class="badge badge-success"><?= $a->status ?></span>
                        </td>
                        <td>
                            <a href="<?= base_url('anggota/edit/'.$a->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('anggota/hapus/'.$a->id) ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

</div>

<?php $this->load->view('templates/footer'); ?>