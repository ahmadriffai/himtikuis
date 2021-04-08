<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2 class="m-5">Data <small>Peserta Kuis</small></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body border-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Jawaban</th>
                                <th scope="col">Point</th>
                            </tr>
                        </thead>
                        <tbody>
                        <form action="<?= base_url('admin/savePoin') ?>" method="post">
                            <?php foreach ($jawaban as $row):?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $row->pertanyaan ?></td>
                                <td><?= $row->jawaban ?></td>
                                <td>
                                    <input type="hidden" name="id[]" value="<?= $row->id ?>">
                                    <select name="poin[]" id="">
                                        <option value="0">0</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tr>
                            <td colspan="4" class="px-4" align="right">
                                <button type="submit" class="btn btn-success btn-sm rounded-0">Submit</button>
                            </td>
                        </tr>
                        </form>
                    </table>
                        
                </div>
            </div>
        </div>
    </div>
</div>