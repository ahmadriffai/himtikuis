<div class="container">
    <div class="row">
        <h2>Data <small>Mahasiswa</small></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Noelp Telp</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($peserta as $row):?>
                <tr>
                    <td style="vertical-align: middle;"><?php echo $row->nim;?></td>
                    <td style="vertical-align: middle;"><?php echo $row->nama;?></td>
                    <td style="vertical-align: middle;"><?php echo $row->email;?></td>
                    <td><img style="width: 100px;" src="<?php echo base_url().'assets/images/'.$row->qrcode;?>"></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>