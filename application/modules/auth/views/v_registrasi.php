<style>
a {
    color: darkolivegreen;
    font-size: 14px;
}

a:hover {
    color: rgb(27, 158, 38);
}
</style>
<div class="container" style="margin-top: 85px;">
    <div class="row">
        <div class="col-sm-6 shadow p-3 mb-5 bg-white rounded mx-auto">
            <!-- Icon -->
            <div class="text-center">
                <img src="<?= base_url('assets/') ?>img/logo2.jpg" id="icon" alt="User Icon" class="" />
            </div>
            <br>
            <?= $this->session->flashdata('message'); ?>
            <!-- Login Form -->
            <form method="post" action="<?= base_url('auth/Auth/Registrasi') ?>">
                <div class="form-group">
                    <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama"
                        value="<?= set_value('nama'); ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="text" id="email" class="form-control" name="email" placeholder="Email"
                        value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="password" id="password" class="form-control" name="password1" placeholder="Password"
                        id="password1" value="<?= set_value('password1'); ?>">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password2" placeholder="ulangi password"
                        id="password1">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="bidang_ilmu" placeholder="Bidang Ilmu"
                        id="bidang_ilmu" value="<?= set_value('bidang_ilmu'); ?>">
                    <?= form_error('bidang_ilmu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="chekPassword">
                    <label class="form-check-label" for="exampleCheck1">Show Password</label>
                </div>
                <input type="submit" class="btn btn-success btn1" value="Daftar">
                <br>
                <a href="<?= base_url('auth/Auth') ?>">Login </a> |
                <a href="<?= base_url('blog/Blog') ?>"> Beranda</a>
            </form>

            <!-- Remind Passowrd -->
            <!-- <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div> -->
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>

<script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function() {
    $('#chekPassword').click(function() {
        if ($(this).is(':checked')) {
            $('#password').attr('type', 'text');
            $('#password1').attr('type', 'text');
        } else {
            $('#password').attr('type', 'password');
            $('#password1').attr('type', 'password');
        }
    })
})
</script>