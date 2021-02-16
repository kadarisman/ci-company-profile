<header class="text-white bg6">
    <div class="container text-left">
        <h1 class="miniver">Selamat Datang .... <?php if ($this->session->userdata('email')) {
                                                    echo $user_session['nama'];
                                                } ?></h1>
        <h1 class="display-4"><span class="font-weight-bold">AGENT</span></h1>
        <p class="poppins h4"><strong>A</strong>gainst <strong>E</strong>nviromental <strong>C</strong>rime
            <strong>L</strong>earning <strong>C</strong>enter
        </p>
        <a class="btn btn-success btn-sm btn1" href="<?= base_url('blog/Blog/Auriga') ?>" role="button">Lebih Lanjut</a>
        <a class="btn btn-success btn-sm btn2" href="<?= base_url('auth/Auth/Registrasi') ?>" role="button">Bergabung
            Dengan Kami</a>
    </div>
</header>