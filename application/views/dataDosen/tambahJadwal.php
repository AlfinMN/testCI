<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Jadwal
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="POST">

                        <div class="mb-3">
                            <label for="KodeJadwal" class="form-label">Kode Jadwal</label>
                            <input type="text" name="KodeJadwal" class="form-control" id="KodeJadwal">

                        </div>
                        <div class="form-group">
                            <label for="NIP"> NIP </label>
                            <select class="form-control" id="NIP" name="NIP">
                                <option selected>Pilih Guru</option>
                                <?php foreach ($guru as $g) : ?>
                                    <option value="<?= $g['NIP']; ?>"> <?= $g['NIP']; ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="KodeKelas"> Kode Kelas </label>
                            <select class="form-control" id="KodeKelas" name="KodeKelas">
                                <option selected>Pilih kelas</option>
                                <?php foreach ($kelas as $k) : ?>
                                    <option value="<?= $k['KodeKelas']; ?>"> <?= $k['KodeKelas']; ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Hari"> Hari </label>
                            <select class="form-control" id="Hari" name="Hari">
                                <option selected>Pilih Hari</option>
                                <option value="Senin"> Senin </option>
                                <option value="Selasa"> Selasa </option>
                                <option value="Rabu"> Rabu </option>
                                <option value="Kamis"> Kamis </option>
                                <option value="Jum'at"> Jum'at </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Jam"> Jam </label>
                            <select class="form-control" id="Jam" name="Jam">
                                <option selected>Pilih Jam</option>
                                <option value="13:00"> 13:00 </option>
                                <option value="14:00"> 14:00 </option>
                                <option value="15:00"> 15:00 </option>
                                <option value="16:00"> 16:00 </option>
                            </select>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Jadwal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>