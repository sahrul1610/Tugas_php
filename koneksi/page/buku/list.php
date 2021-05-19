<fieldset>
    <a href="?page=tambah-buku">Tambah Data</a>
    <hr>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>judul</th>
                <th>penerbit</th>
                <th>pengarang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 0;
                $sql = "SELECT * FROM buku ORDER BY id_buku ASC";
                $result = $con_object->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo ++$nomor; ?>.</td>
                            <td><?php echo $row['judul']; ?></td>
                            <td><?php echo $row['penerbit']; ?></td>
                            
                            <td><?php echo $row['pengarang'] ?></td>
                            <td>
                                <a href="?page=edit-data&id_buku=<?php echo $row['id_buku']; ?>">Edit</a> &bull;
                                <form style="display: inline;" method="POST">
                                    <input type="hidden" name="id_buku" value="<?php echo $row['id_buku']; ?>">
                                    <button onclick="return confirm('Yakin ? Anda Ingin Menghapus Data Ini ?')" type="submit" name="btn-hapus">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='6'><b><i>Note : Data Tidak Ada</i></b></td></tr>";
                }
            ?>
        </tbody>
    </table>
</fieldset>

<?php
    if (isset($_POST['btn-hapus'])) {
        $id_buku = $_POST['id_buku'];

        $sql = "DELETE FROM buku WHERE id_buku = $id_buku";

        if ($con_object->query($sql) === TRUE) {
            echo "<script>alert('Data Berhasil di Hapus');</script>";
            echo "<script>window.location.replace('?page=buku');</script>";
            exit;
        } else {
            echo "<script>alert('Data Gagal di Hapus');</script>";
            echo "<script>window.location.replace('?page=buku');</script>";
            exit;
        }
    }
?>