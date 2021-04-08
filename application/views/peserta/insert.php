<div class="container">
    <h1>Tambah data peserta</h1>
    <form method="post" action="<?= base_url('peserta/simpan') ?>">
        <div class="mb-3">
            <label for="exampleInputnim" class="form-label">nim</label>
            <input type="text" name="nim" class="form-control" id="exampleInputnim" aria-describedby="nimHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputnama" class="form-label">nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputnama" aria-describedby="nimHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Semsester</label>
            <select class="form-select"  name="semester" aria-label="Default select example">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>