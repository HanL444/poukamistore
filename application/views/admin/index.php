<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- row ux-->
    <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2 bg-primary">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-md font-weight-bold text-white textuppercase mb-1">Jumlah Anggota</div>
                                <div class="h1 mb-0 font-weight-bold text-white"><?= $this->User_model->getUserWhere(['role_id' => 1])->num_rows(); ?></div>
                            </div>
                            <div class="col-auto">
                                <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 bg-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-white textuppercase mb-1">Stok Baju</div>
                            <div class="h1 mb-0 font-weight-bold text-white">
                                <?php
                                $where = ['stok != 0'];
                                $totalstok = $this->Barang_model->total('stok', $where);
                                echo $totalstok;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="<?= base_url('buku'); ?>"><i class="fas fabook fa-3x text-primary"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 