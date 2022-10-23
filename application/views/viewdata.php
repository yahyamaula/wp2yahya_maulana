<html>

<head>
    <title>Tampil Data input Di-Lemas</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Hasil Input Data Di-Lemas
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>NAMA</td>
                <th>:</th>
                <th>
                    <?= $nama; ?>
                </th>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <th>
                    <?= $nis; ?>
                </th>
            </tr>
            <tr>
                <td>KELAS</td>
                <td>:</td>
                <th>
                    <?= $kelas; ?>
                </th>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <th>:</th>
                <th>
                    <?= $tanggal; ?>
                </th>
            <tr>
            <tr>
                <td>TEMPAT LAHIR</td>
                <th>:</th>
                <th>
                    <?= $tempat; ?>
                </th>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <th>:</th>
                <th>
                    <?= $alamat; ?>
                </th>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <th>:</th>
                <th>
                    <?= $jnk; ?>
                </th>
            </tr>
            <tr>
                <td>AGAMA</td>
                <th>:</th>
                <th>
                    <?= $agama; ?>
                    </t>
            </tr>
            <td colspan="3" align="center">
                <a href="<?= base_url('materi6');
                            ?>">Kembali</a>
            </td>
            </tr>
        </table>
    </center>
</body>

</html>