<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta</title>
</head>
<body>
    <h2>Data Peserta</h2>
    <table border='1'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. Whatsapp</th>
                <th>Alamat</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $nomor = 0;
            foreach($tampildata as $row):
                $nomor++;
            ?>
             <tr>
                <th><?= $nomor; ?></th>
                <td><?= $row->nama ?></td>
                <td><?= $row->email ?></td>
                <td><?= $row->nowa ?></td>
                <td><?= $row->alamat ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>