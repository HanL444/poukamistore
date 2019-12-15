<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
            <?= form_open_multipart('barang/updatebarang'); ?>
            <!-- <form action="<?= base_url('barang/updatebarang'); ?>" method="post" enctype="multipart/form-data"> -->
                <div class="form-group">
                    <label for="id_baju">Id Baju</label>
                    <input type="text" class="form-control" id="id_baju" name="id_baju" value="<?= $baju['id_baju']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_baju">Nama Baju</label>
                    <input type="text" class="form-control" id="nama_baju" name="nama_baju" value="<?= $baju['nama_baju']; ?>">
                </div>
                <div class="form-group">
                    <label for="harga_baju">Harga Baju</label>
                    <input type="text" class="form-control" id="harga_baju" name="harga_baju" value="<?= $baju['harga_baju']; ?>" >
                </div>
                <div class="form-group">
                    <label for="size_baju">Size Baju</label>
                    <input type="text" class="form-control" id="size_baju" name="size_baju" value="<?= $baju['size_baju']; ?>" >
                </div>
                <div class="form-group">
                    <label for="stok_baju">Stok Baju</label>
                    <input type="text" class="form-control" id="stok_baju" name="stok_baju" value="<?= $baju['stok_baju']; ?>" >
                </div>
                <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>
            </form>

        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 