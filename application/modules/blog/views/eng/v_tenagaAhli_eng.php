<div class="container well span6 mb-4" style="margin-top: 85px;">
    <div class="row">
        <?php foreach ($data_user2 as $usr2) : ?>
        <div class="card mr-2 mb-2" style="width: 15rem;">
            <img class="card-img-top" src="<?= base_url('assets/') ?>img/profil/<?= $usr2->foto ?>"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $usr2->nama ?></h5>
                <p class="card-text"><?= $usr2->bidang_ilmu ?></p>
                <a href="<?= base_url('blog/Blog/Japri') ?>" class="btn btn-primary btn1">Japri</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>