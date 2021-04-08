<div class="container">
    <h1>Buat Pertanyaan peserta</h1>
    <form method="post" action="<?= base_url('pertanyaan/save') ?>">
        <div class="mb-3">
            <div class="form-floating">
            <textarea class="form-control" name="pertanyaan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Pertanyaan</label>
            </div>
        </div>

        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>