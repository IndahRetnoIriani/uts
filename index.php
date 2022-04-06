<!DOCTYPE html>
<html>
    <head>
        <title>Rumah Burger</title>
        
        <!-- menghubungkan dengan file css -->
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="content">
            <header>
                <h1 class="judul">RUMAH BURGER</h1>
                <h3 class="deskripsi">WEBSITE RUMAH BURGER</h3>
            </header>

            <div class="menu">
                <ul>
                    <li><a href="index.php?page=home">HOME</a></li>
                    <li><a href="index.php?page=transaksi">TRANSAKSI</a></li>
                    <li><a href="index.php?page=fileUpload">Tambah Foto</a></li>
                </ul>
            </div>
            
            <div class="badan">
                <?php
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                        switch ($page) {
                            case 'home':
                                include "home.php";
                                break;

                            case 'transaksi':
                                include "transaksi.php";
                                break;

                            case 'fileUpload':
                                include "fileUpload.php";
                                break;

                            default:
                                echo "<center><h3>Maaf. Halaman tidak di temukan!</h3></center>";
                                break;
                        }
                    }
                    else{
                        include "home.php";
                    }
                ?>
            <div class="footer">
               <table>
                   <tr>
                    <td>&copy Copyright Indah Retno Iriani</td>
                </tr>
                </table>
            
            </div>
        </div>
    </body>
</html>