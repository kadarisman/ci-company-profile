<div class="container h-100 p-4" style="margin-top: 65px;">
    <?= $this->session->flashdata('message'); ?>
    <h4>Semua Nilai</h4>
    <div class="table-responsive">
        <table class=" table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bidang Studi</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                foreach ($data_nilai as $nl) :
                    $no++ ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><img src="<?= base_url('assets/'); ?>img/profil/<?= $nl->foto ?>" class="img-rounded"
                            alt="Cinque Terre" width="50" height="50"></td>
                    <td><?= $nl->nama ?></td>
                    <td><?= $nl->bidang_studi ?></td>
                    <td><?= $nl->mata_pelajaran ?></td>
                    <td><?= $nl->nilai ?></td>
                    <td>
                        <a href="" class="badge badge-primary mb-1"
                            onclick="return confirm('This feature is coming soon...!!');">Edit</a>
                        <a href="" class="badge badge-danger mb-1"
                            onclick="return confirm('This feature is coming soon...!!');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>