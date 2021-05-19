
    <fieldset>
        <legend>
            <a href="tambah.php">+ tambah data</a>
        </legend>
            <form method="POST">
                <table>
                    <thead>
                    <tr>
                        <td>judul</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="judul">
                        </td>
                    </tr>
                    <tr>
                        <td>penerbit</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="penerbit">
                        </td>
                    </tr>
                    <tr>
                        <td>pengarang</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="pengarang">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button name="btn-tambah">
                            Tambah Data
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
    </fieldset>
    <?php
    if (isset($_POST["btn-tambah"])){
        $judul = $_POST["judul"];
        $penerbit = $_POST["penerbit"];
        $pengarang = $_POST["pengarang"];

        if(empty($judul)) {
            echo '<script>alert("Judul tidak boleh kosong");</script>';
        } else {
            $sql = "INSERT INTO buku (judul, penerbit, pengarang)
        VALUES ('$judul', '$penerbit', '$pengarang')";
         $conn->exec($sql);
         echo "New record created successfully";
        }
    }
     ?>
