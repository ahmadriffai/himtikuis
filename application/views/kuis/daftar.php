<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow p-4 mt-5">

            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

                <h3>Kuis Ramadhan In Campus</h3>
                <div class="alert alert-warning" role="alert">
                    <p>Isikan data diri inda dengan benar ,karena kami akan menggunakn data anda untuk keperluan acara, kami juga akan mengirim tiket ramadhan in campus ke email anda, jadi pastikan email anda diisi dengan benar</p>
                </div>
                <form method="POST" action="<?= base_url('welcome') ?>">
                    <div class="mb-3">
                        <label for="exampleInputnim" class="form-label">nim </label>
                        <input name="nim" type="text" class="form-control" id="exampleInputnim" aria-describedby="nimHelp">
                        <div class="form-text text-danger">
                              <?= form_error('nim') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputnama" class="form-label">nama</label>
                        <input name="nama" type="nama" class="form-control" id="exampleInputnama">
                        <div class="form-text text-danger">
                            <?= form_error('nama') ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputemail" class="form-label">email</label>
                        <input name="email" type="email" class="form-control" id="exampleInputemail">
                        <div class="form-text text-danger">
                            <?= form_error('email') ?>
                        </div>
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
        </div>
    </div>
</div>
