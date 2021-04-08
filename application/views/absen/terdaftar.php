<div class="row mt-5">
    <div class="col-md-6">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $present[0]->nim ?></li>
            <li class="list-group-item"><?= $present[0]->nama ?></li>
            <li class="list-group-item"><?= $present[0]->email ?></li>
            <li class="list-group-item">
                <img src="<?= base_url('assets/images/') . $present[0]->qr_code ?>" alt="" srcset="">
            </li>
        </ul>
    </div>
    </div>
</div>