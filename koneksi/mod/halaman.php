<?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = "dashboard";
    }
?>

<?php

    switch ($page) {
        case 'dashboard':
            include 'page/dashboard.php';
            break;

        // buku
        case 'buku':
            include 'page/buku/list.php';
            break;
        
        case 'tambah-buku':
            include 'page/buku/tambah.php';
            break;

        case 'edit-data':
            include 'page/buku/edit_data.php';
            break;

            case 'edit-data':
                include 'page/buku/edit_data.php';
                break;
        // end
        //kategori

        case 'tambah-kategori':
             include 'page/tambah-kategori.php';
             break;

       
        // end
        
        default:
            echo "404 Not Found";
            break;
    }

?>