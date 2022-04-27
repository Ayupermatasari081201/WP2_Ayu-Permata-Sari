<html>

<head>
    <title>Tampil Data Profil</title>
</head>

<body bgcolor="red">
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Profil
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <?= $nim; ?>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
            <td>Universitas</td>
                <td>:</td>
                <td>
                    <?= $universitas; ?>
                </td>
            </tr>
            <tr>
            <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $tanggal_lahir; ?>
                </td>
            </tr>
            <tr>
            <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= ('../quiz');?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>