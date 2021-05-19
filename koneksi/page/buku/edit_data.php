<?php
    $id_buku = $_GET['id_buku'];
    $sql = "SELECT * FROM buku WHERE id_buku = $id_buku";
    $result = $con_object->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id_buku = $row['id_buku'];
            $judul = $row['judul'];
            $penerbit = $row['penerbit'];
            $pengarang = $row['pengarang'];
            // $jumlah_bed = $row['jumlah_bed'];
        }
    } else {
        echo "Data Tidak ada";
    }
?>
<fieldset>
    <legend>Ubah Data</legend>
    <form method="POST">
        <input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>">
        <table>
            
            <tr>
                <td>judul</td>
                <td>:</td>
                <td>
                    <input type="text" name="judul"  placeholder="Masukkan judul" value="<?php echo $judul; ?>"> 
                </td>
            </tr>
            <!-- <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    <input type="number" name="harga" placeholder="0" value="<?php echo $harga; ?>">
                </td>
            </tr> -->
            <tr>
                <td>penerbit</td>
                <td>:</td>
                <td>
                    <input type="text" name="penerbit" placeholder="masukan penerbit" value="<?php echo $penerbit; ?>">
                </td>
            </tr>
            <tr>
                <td>pengarang</td>
                <td>:</td>
                <td>
                    <input type="text" name="pengarang" placeholder="Masukkan pengarang" value="<?php echo $pengarang; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="btn-ubah">
                        Ubah
                    </button>
                </td>
            </tr>
        </table>
    </form>
</fieldset>

<?php

    if (isset($_POST['btn-ubah'])) {
        $id_buku = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $penerbit = $_POST['penerbit'];
        // $harga = $_POST['harga'];
        $pengarang = $_POST['pengarang'];

        $sql = " UPDATE buku SET judul = '$judul', penerbit = '$penerbit', pengarang = '$pengarang' WHERE id_tipe = $id_buku ";

        if ($con_object->query($sql) === TRUE) {
            echo "<script>alert('Data Berhasil di Ubah');</script>";
            echo "<script>window.location.replace('?');</script>";
            exit;
        } else {
            echo "<script>alert('Data Gagal di Ubah');</script>";
            echo "<script>window.location.replace('?page=edit-tipe&id_tipe=$id_tipe');</script>";
            exit;
        }      
    }

?>