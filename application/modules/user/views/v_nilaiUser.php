<div class="container h-100 p-4" style="margin-top: 65px;">
    <?= $this->session->flashdata('message'); ?>
    <h4>Transkrip Nilai : <?= $user_session['nama'] ?></h4>
    <a href="<?= base_url('user/Laporanpdf') ?>" class="badge badge-success mb-1">Download</a>
    <a href="<?= base_url('user/Laporan2') ?>" class="badge badge-info mb-1" target="blank">View</a>
    <div class="table-responsive">
        <table class=" table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Bidang Studi</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Tangal Lulus</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data_nilai_user as $nl) :
                ?>
                <tr>
                    <td><?= $nl->bidang_studi ?></td>
                    <td><?= $nl->mata_pelajaran ?></td>
                    <td><?= $nl->nilai ?></td>
                    <td><?= $nl->tanggal_lulus ?></td>
                    <td><?= $nl->keterangan ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>