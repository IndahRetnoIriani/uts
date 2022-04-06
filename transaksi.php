<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        ?>
        <table>
            <?php
                $nama;
                $jumlah;
                $menu;
            ?>
            <form method = "get" action = "transaksi2.php">
                <tr>
                    <td>Nama : </td>
                    <td> <input type = "text" name = "nama value= <?php $nama;?>">
                </tr>
                <tr>
                    
                    <td>Status Pembeli : </td>
                    <td> <input type = "selected" name = "email">
                    <select name="var6" size ="1">
                        <option value = "nb">Non-Member
                        <option value = "m">Member
                </tr>
                <tr>
                    <td> Menu: </td>
                    <td> <input type = "text" name = "komentar" rows="5" cols="40" >
                    <select name="var6" size ="1">
                        <option value = "ph1">Paket 1
                        <option value = "ph2">Paket 2
                        <option value = "ph2">Paket 3</td>
                </tr>
                <tr>
                    <td>Jumlah : </td> 
                    <td> <input type = "text" name = "nama" value = "<?php $jumlah;?>">
                </tr>
                <tr>
                    <td><input type = "submit" name = "kirim" value = "Kirim"></td>
                </tr>
            </form>
        </table>
    </body>
</html>