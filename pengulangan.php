<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>

<body>
    <center>
        <h1>Form Pengulangan</h1>
        <br><br>
        <table>
            <form action="" method="post">
                <tr>
                    <td></td>
                    <td>1. Deret Bilangan Ganjil</td>
                </tr>
                <tr>
                    <td></td>
                    <td>2. Segitiga Sama Kaki Terbalik</td>
                </tr>
                <tr>
                    <td></td>
                    <td>3. Deret Bilangan Kelipatan 3</td>
                </tr>
                <tr>
                    <td>Pilih</td>
                    <td>: <input type="number" name="pilih"></td>
                </tr>
                <tr>
                    <td>Masukan Angka</td>
                    <td>: <input type="number" name="angka"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="kirim" value="KIRIM"></td>
                </tr>
            </form>
        </table>
        <?php
        echo "<br>";
        $pilih = $_POST['pilih'];
        $angka = $_POST['angka'];
        if (isset($_POST['kirim'])) {
            if ($pilih == "1") {
                echo "Deret Bilangan Ganjil";
                echo "<br><br>";
                for ($i = 1; $i <= $angka; $i++) {
                    if ($i % 2 == 1) {
                        echo "$i";
                    }
                }
            } else if ($pilih == "2") {
                echo "Segitiga Sama Kaki Terbalik";
                echo "<br><br>";
                for ($i = 1; $i <= $angka; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "&nbsp";
                    }
                    for ($q = $angka; $q >= $i; $q -= 1) {
                        echo "*";
                    }
                    echo "<br>";
                }
            } else if ($pilih == "3") {
                echo "Deret Bilangan Kelipatan 3";
                echo "<br><br>";
            }
        }

        ?>
    </center>
</body>

</html>