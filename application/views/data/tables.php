<!DOCTYPE html>
<html lang="en">

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data UMKM</h1>
    <p class="mb-4">Data para UMKM yang terdaftar</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Anggota
                <div class="row mt-3">
                    <div class="col-md-6">
                        <a href="<?= base_url(); ?>data/c_tables/tambah" class="btn btn-primary">Tambah Data UMKM</a>
                    </div>
                </div>
            </h6>

            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mt-3">
                    <div class="col-md-6">

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data UMKM <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?> .
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
                            <!-- <th>ID</th> -->
                            <th>NAMA</th>
                            <!-- <th>PRODUK</th> -->
                            <th>ACTION</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pemilikUmkm as $pumkm) : ?>
                            <tr>
                                <!-- <td> <?php echo $pumkm['id']; ?> </td> -->
                                <td> <?php echo $pumkm['nama']; ?> </td>
                                <!-- <td> <?php echo $pumkm['produk']; ?> </td> -->
                                <td>
                                    <a href="<?= base_url(); ?>data/c_tables/hapus/<?= $pumkm['id']; ?>" class="badge badge-danger" onclick="return confirm('apakah anda yakin akan mengapus data ini ?');"> delete </a>
                                    <a href="<?= base_url(); ?>data/c_tables/detail/<?= $pumkm['id']; ?>" class="badge badge-primary"> detail </a>
                                    <a href="<?= base_url(); ?>data/c_tables/ubah/<?= $pumkm['id']; ?>" class="badge badge-success"> ubah </a>
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