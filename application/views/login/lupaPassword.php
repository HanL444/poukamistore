<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- nested row within card body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Lupa Kata Sandi</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('autentifikasi/lupaPassword');?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama" name="nama"
                                placeholder="Username" value="<?= set_value('nama');?>">
                                <?= form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email"
                                placeholder="Alamat Email" value="<?= set_value('email')?>">
                                <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block"> Kirim Email
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">Belum Punya Akun?
                            <a class="small" href="<?= base_url('autentifikasi/registrasi');?>">Daftar Akun</a>
                        </div>
                        <div class="text-center">Sudah menjadi member?
                            <a class="small" href="<?= base_url('autentifikasi/') ?>"> Login </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>