<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>For Nested</title>
</head>
<body>
    <table>
        <form action="" method="post">
        <tr>
            <td>Masukan Bintang</td>
            <td><input type="number" name="bintang"></td>
        </tr>
        <tr>
            <td rowspan="5">Pilih Bentuk Segitiga Bintang</td>
        </tr>
        <tr>
            <td><input type="radio" name="bentuk" value="Siku-siku">Siku-siku</td>
        </tr>
        <tr>
            <td><input type="radio" name="bentuk" value="Sempurna">Sempurna</td>
        </tr>
        <tr>
            <td><input type="radio" name="bentuk" value="Siku Terbalik">Siku Terbalik</td>
        </tr>
        <tr>
            <td><input type="radio" name="bentuk" value="Sempurna Terbalik">Sempurna Terbalik</td>
        </tr>
        <br>
        <tr>
            <td><input type="submit" name="simpan" value="submit"></td>
        </tr>
        </form>
    </table>

    <?php

    if (isset($_POST['simpan'])){
        $bintang = $_POST['bintang'];
        $bentuk = $_POST['bentuk'];

        if ($bintang = $_POST['bintang']){
            if ($bentuk == "Siku-siku"){
                for ($i = $bintang; $i >= 0; $i--){
                    for ($j = $bintang; $j > $i;  $j--){
                        echo "*";
                    }

                    echo "<br>";
                }
            }
            else if ($bentuk == "Sempurna"){
                for($i = $bintang; $i > 0; $i--){
                    for($j = 1; $j <= $i; $j++){
                        echo "&nbsp";
                    }
                    for($q = $bintang; $q >= $i; $q--){
                        echo"*";
                    }
                    echo"<br>";
                }
            }
            else if ($bentuk == "Siku Terbalik"){
                for($i = 1; $i <= $bintang; $i++){
                    for($j = $bintang; $j >= $i; $j-=1){
                        echo "*";
                    }
                    echo "<br>";
                }
            }
            else if ($bentuk == "Sempurna Terbalik"){
                for($i = 1; $i <= $bintang; $i++){
                    for($j = 1; $j <= $i; $j++){
                        echo "&nbsp";
                    }
                    for($q = $bintang; $q >= $i; $q-=1){
                        echo "*";
                    }
                    echo "<br>";
                }
            }
            else {
            }
        }
        else{

        }
    }
    else{

    }

    ?>
</body>
</html>