<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2 class="m-5">Data <small>Presensi Kuis</small></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nim</th>
                                <th scope="col">Email</th>
                                <th scope="col">Qr</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($presensi as $row):?>
                            <tr class="<?= ($no <= 10) ? "table-success" : ""?>">
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row->nama ?></td>
                                <td><?= $row->nim ?></td>
                                <td><?= $row->email ?></td>
                                <td>
                                    <img src="<?= base_url().'assets/images/'.$row->qr_code ?>" alt="" width="50px" srcset="">
                                </td>
                            </tr>
                            <?php $no++ ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                        
                </div>
            </div>
        </div>
    </div>
</div>