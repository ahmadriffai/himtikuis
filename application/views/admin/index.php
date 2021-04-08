<div class="row mt-5">
    <div class="col-md-12">
        <?php if ($this->session->flashdata('msg')) :?>
            <div class="alert alert-success  alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('msg'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <h3>Menu Admin</h3>
    </div>
</div>
<div class="row mt-3">
    <div class="col-lg-4 mb-3">
        <a href="<?= base_url('admin/peserta_kuis') ?>" class="text-dark a-menu" style="text-decoration : none;">
            <div class="card menu shadow border-0" style="height: 150px">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/icon/peserta.svg') ?>" width="100px" class="img-fluid" alt="" srcset="">
                    </div>

                    <div class="col-md-7">
                        <h4>Peserta Kuis</h4>
                    </div>
                </div>
            </div>
        </div>
        </a>
        
    </div>
    <div class="col-lg-4 mb-3">
        <a href="<?= base_url('pertanyaan') ?>" class="text-dark a-menu" style="text-decoration : none;">
            <div class="card menu shadow rounded-0 border-0" style="height: 150px">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/icon/pertanyaan.svg') ?>" width="100px" class="img-fluid" alt="" srcset="">   
                    </div>

                    <div class="col-md-7">
                        <h4>Buat Pertanyaan</h4>
                    </div>
                </div>
            </div>
        </div>
        </a>
        
    </div>

    <div class="col-lg-4 mb-3">
        <a href="<?= base_url('absen') ?>" class="text-dark a-menu" style="text-decoration : none;">
            <div class="card menu shadow border-0" style="height: 150px">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?= base_url('assets/icon/presensi.svg') ?>" width="100px" class="img-fluid" alt="" srcset="">   
                    </div>

                    <div class="col-md-7">
                        <h4>Presensi</h4>
                    </div>
                </div>
            </div>
        </div>
        </a>
        
    </div>

</div>