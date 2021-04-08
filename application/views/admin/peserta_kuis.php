<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2 class="m-5">Data <small>Peserta Kuis</small></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
            <div class="card shadow">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nim</th>
                                <th scope="col">Email</th>
                                <th scope="col">Semester</th>
                                <th scope="col">Poin</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($peserta as $row):?>
                            <tr class="<?= ($no <= 16) ? "table-success" : ""?>">
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row->nama ?></td>
                                <td><?= $row->nim ?></td>
                                <td><?= $row->email ?></td>
                                <td><?= $row->semester ?></td>
                                <td><?= $row->total_poin ?></td>
                                <td>
                                    <a href="<?= base_url('admin/jawaban/') . $row->id ?>" class="btn btn-sm btn-primary rounded-0">Lihat Jawaban</a>

                                    <?php if ($no <= 16) : ?>
                                        <a href="<?= base_url('admin/sendEmail/') . $row->id ?>" class="btn btn-sm btn-success rounded-0">Send Email</a>
                                    <?php endif ?>
                                    
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