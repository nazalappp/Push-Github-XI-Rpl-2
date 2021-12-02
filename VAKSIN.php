<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vaksin</title>
</head>

<body>
    <center>
        <h1>Syarat Masuk Ke MIKO MALL</h1>
        <table>
            <form action="" method="post">
                <tr>
                    <td> Nama Anda </td>
                    <td>:<input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Status Vaksin </td>
                    <td>:<select name="status">
                            <option value="">--- Status Vaksin ---</option>
                            <option value="Sudah Vaksin">Sudah Vaksin</option>
                            <option value="Belum Vaksin">Belum Vaksin</option>
                        </select></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="kirim" value="KIRIM"></td>
                </tr>
            </form>
        </table>
    </center>

    <?php
    echo "<br> <br>";
    echo "<form>";
    echo "<center>";
    if (isset($_POST['kirim'])) {
        $status = $_POST['status'];
        $nama = $_POST['nama'];

        if ($status == "Sudah Vaksin") {
            echo "Nama Anda  : $nama <br>";
            echo "Status Vaksin : $status <br><br>";
            echo "<b><i>Diizinkan";
        } else if ($status == "Belum Vaksin") {
            echo "Nama Anda  : $nama <br>";
            echo "Status Vaksin : $status <br><br>";
            echo "<b><i>Tidak Diizinkan <br><br>";
        } else {
        }
    } else {
    }

    ?>
</body>

</html>