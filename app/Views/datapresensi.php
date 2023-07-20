<?php
$session = session();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Presensi Webinar</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <?php if (count($datapresensi) > 0) { ?>
            <?php $row = $datapresensi[0]; ?>
                <a href="<?= '/exportpresensi/'.$row['id_webinar'] ?>" type="button" class="btn btn-primary">Export data</a>
            <?php } ?>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Whatsapp</th>
                        <th>Alamat</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Whatsapp</th>
                        <th>Alamat</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $nomor = 0;
                        foreach($datapresensi as $row):
                            $nomor++;
                        ?>
                        <tr>
                            <th><?= $nomor; ?></th>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['nowa'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- /.container-fluid -->