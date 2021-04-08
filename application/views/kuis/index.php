<div class="container">

    <div class="row">
        <div class="col-md-12 m-4">
            <h2>Kuis Ramadahn In Campus</h2>
        </div>
    </div>

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

    <form action="<?= base_url('kuis/save') ?>" method="post">
        <input type="hidden" name="peserta_id" value="<?= $id_peserta ?>">
        <?php foreach ($pertanyaan as $row) : ?>
            <div class="card mb-3 border-0">
            <div class="card-body shadow">
                <p><b>Pertanyaan :</b></p>
                <p class="card-text"><?= $row->pertanyaan ?></p>
                <div class="form-floating">
                <input type="hidden" name="pertanyaan[]" value="<?= $row->id ?>">
                <textarea class="form-control" name="jawaban[]" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Jawaban</label>
                </div>
            </div>
            </div>
        <?php endforeach; ?>
        
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>

    
</div>