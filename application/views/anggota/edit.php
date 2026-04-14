<h2>Edit Anggota</h2>

<form method="post">
    Nama: <input type="text" name="nama" value="<?= $anggota->nama ?>"><br>
    Telepon: <input type="text" name="telepon" value="<?= $anggota->telepon ?>"><br>
    Email: <input type="email" name="email" value="<?= $anggota->email ?>"><br>

    <button type="submit">Update</button>
</form>