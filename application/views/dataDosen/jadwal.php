<!DOCTYPE html>
<html lang="en">

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <center>
        <h1 class="h3 mb-2  text-gray-800 ">UJI PROGRAM </h1>
        <h1 class="h3 mb-5  text-gray-800 ">JADWAL LES KELAS</h1>
    </center>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Jadwal
                <div class="row mt-3">
                    <div class="col-md-6">
                        <a href="<?= base_url(); ?>data/c_jadwal/tambah" class="btn btn-primary">Tambah Jadwal</a>
                    </div>
                </div>
            </h6>

            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mt-3">
                    <div class="col-md-6">

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data Jadwal <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?> .
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>

                    </div>
                </div>
            <?php endif; ?>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Kode Jadwal</th>
                            <th>Nama Guru</th>
                            <th>Nama Kelas</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jadwalDosen as $jwl) : ?>
                            <tr>
                                <td> <?php echo $jwl['KodeJadwal']; ?> </td>
                                <td> <?php echo $jwl['NamaGuru']; ?> </td>
                                <td> <?php echo $jwl['NamaKelas']; ?> </td>
                                <td> <?php echo $jwl['Hari']; ?> </td>
                                <td> <?php echo $jwl['Jam']; ?> </td>
                                <td>
                                    <a href="<?= base_url(); ?>data/c_jadwal/hapus/<?= $jwl['KodeJadwal']; ?>" class="badge badge-danger" onclick="return confirm('apakah anda yakin akan mengapus data ini ?');"> Hapus </a>

                                </td>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</body>

</html>