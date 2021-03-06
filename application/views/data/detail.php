<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail data pemilik UMKM
                </div>
                <div class="card-body">
                    <h3 class="card-title"><?= $pemilikUmkm['nama']; ?></h3>
                    <p class="card-text"><?= $pemilikUmkm['id']; ?></p>
                    <p class="card-text"><?= $pemilikUmkm['produk']; ?></p>
                    <a href="<?php echo base_url('data/c_tables') ?>" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>