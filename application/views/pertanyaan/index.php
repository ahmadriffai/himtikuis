
<div class="container">
    <h2>Pertanyaan Kuis</h2>
    <a href="<?= base_url('pertanyaan/insert') ?>" class="btn btn-primary mt-3">Buat Pertanyaan</a>
    <div class="row mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Pertanyaan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pertanyaan as $row):?>
                <tr>
                    <td style="vertical-align: middle;">
                        <?= $row->pertanyaan;?>
                    </td>
                    <td tyle="vertical-align: middle;">
                        <div class="btn btn-primary btn-sm">Edit</div>
                        <div class="btn btn-danger btn-sm">Delete</div>
                    </td>
                </tr>
                    
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>