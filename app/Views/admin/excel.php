<?php

header("Content-type: application/vnc-ms-excel");
header("Content-Disposition: attachment; filename=Data Peserta Semnas.xls");

?>

<html>

<body>
    <table width="100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Email</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Asal Instansi/Sekolah</th>
                <th scope="col">No Whatsapp</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($semnas as $dt) : ?>
                <tr>
                    <td scope="row" style="text-align: left;"><?= $i++; ?></td>
                    <td style="text-align: left;"><?= $dt->email; ?></td>
                    <td style=" text-align: left;"><?= $dt->nama; ?></td>
                    <td style="text-align: left;"><?= $dt->insek; ?></td>
                    <td style=" text-align: left;"><?= $dt->wa; ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>