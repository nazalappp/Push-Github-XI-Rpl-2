<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penggajian</title>
</head>

<body>
    <center>
        <h3><b>Penggajian Karyawan</b></h3>
        <h2>PT.Selalu Makmur Jaya</h2>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Nama Bendahara </td>
                    <td>: <input type="text" name="bendahara"></td>
                </tr>
                <tr>
                    <td>Nama Pekerja </td>
                    <td>: <input type="text" name="pekerja"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: <input type="radio" name="jk" value="Laki-laki">Laki-laki</td>
                    <td><input type="radio" name="jk" value="Perempuan">Perempuan</td>
                </tr>
                <tr>
                    <td>Tanggal Gaji </td>
                    <td>: <input type="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td>Jabatan </td>
                    <td>: <select name="jabatan">
                            <option value="">--- Pilih Jabatan ---</option>
                            <option value="Direktur">Direktur</option>
                            <option value="Manager">Manager</option>
                            <option value="Sekertaris">Sekertaris</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="OB">OB</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir </td>
                    <td>: <select name="pendidikan">
                            <option value="">--- Pendidikan Terakhir ---</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Status Pegawai </td>
                    <td>: <input type="radio" name="status" value="Tetap"><b>Tetap</b></td>
                    <td><input type="radio" name="status" value="Kontrak"><b>Kontrak</b></td>
                </tr>
                <tr>
                    <td>Lembur</td>
                    <td>: <input type="number" name="lembur"></td>
                    <td>Hari / Rp. 20.000</td>
                </tr>
                <tr>
                    <td>Potongan BPJS </td>
                    <td>: <input type="text" name="potongan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="kirim" value="KIRIM"></td>
                </tr>

            </form>
        </table>
    </center>
</body>

</html>