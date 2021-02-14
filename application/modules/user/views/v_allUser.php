<div class="container h-100 p-4" style="margin-top: 65px;">
    <?= $this->session->flashdata('message'); ?>
    <h4>Semua Anggota</h4>
    <a href="" class="badge badge-primary mb-1" onclick="return confirm('This feature is coming soon...!!');">Tambah</a>
    <div class="table-responsive">
        <table class=" table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Level</th>
                    <th scope="col">Status</th>
                    <th scope="col">Bidang Ilmu</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;
                foreach ($data_user as $usr) :
                    $no++ ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><img src="<?= base_url('assets/'); ?>img/profil/<?= $usr->foto ?>" class="img-rounded"
                            alt="Cinque Terre" width="50" height="50"></td>
                    <td><?= $usr->nama ?></td>
                    <td><?= $usr->email ?></td>
                    <td><?= $usr->level ?></td>
                    <td><?php if ($usr->is_active == 1) {
                                echo 'Aktif';
                            } else {
                                echo 'Tidak Aktif';
                            } ?>
                    </td>
                    <td><?= $usr->bidang_ilmu ?></td>
                    <td>
                        <a href="" class="badge badge-primary mb-1"
                            onclick="return confirm('This feature is coming soon...!!');">Edit</a>
                        <a href="" class="badge badge-danger mb-1"
                            onclick="return confirm('This feature is coming soon...!!');">Hapus</a>
                        <?php if ($usr->level == 'user') {
                            ?>
                        <a href="" class="badge badge-success mb-1" data-toggle="modal"
                            data-target="#exampleModal<?= $usr->id ?>">Beri
                            nilai</a>
                        <?php } ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button> -->

    <!-- Modal -->
    <?php foreach ($data_user as $usr) : ?>
    <div class="modal fade" id="exampleModal<?= $usr->id ?>" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Nilai si <?= $usr->nama ?></h5>
                </div>
                <div class="modal-body">
                    <form method="post" action="" class="item">
                        <input type="text" class="form-control" name="id_user" value="<?= $usr->id ?>">
                        <div class="form-group">
                            <label>Bidang Studi</label>
                            <select class="form-control border border-dark" tabindex="-1" aria-hidden="true"
                                name="bidang_studi">
                                <option selected="true" disabled="disabled">Pilih</option>
                                <option value="Bidang studi 1">Bidang studi 1</option>
                                <option value="Bidang studi 2">Bidang studi 2</option>
                                <option value="Bidang studi 3">Bidang studi 3</option>
                            </select>
                            <span id="bidang_studi_error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Mata Pelajaran</label>
                            <select class="form-control border border-dark" tabindex="-1" aria-hidden="true"
                                name="mata_pelajaran">
                                <option selected="true" disabled="disabled">Pilih</option>
                                <option value="Mata Pelajaran 1">Mata Pelajaran 1</option>
                                <option value="Mata Pelajaran 2">Mata Pelajaran 2</option>
                                <option value="Mata Pelajaran 3">Mata Pelajaran 3</option>
                            </select>
                            <span id="mata_pelajaran_error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nilai" placeholder="Nilai dalam angka">
                            <span id="nilai_error" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lulus</label><br>
                            <input type="date" id="date" name="tanggal_lulus"><br>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Keteranagan</label>
                            <input type="text" class="form-control" name="keterangan" placeholder="Keteranagan">
                            <span id="keterangan_error" class="text-danger"></span>
                        </div>
                        <button type="submit" name="submit_input_nilai" class="badge badge-primary">Simpan</button>
                        <button type="button" class="badge badge-secondary" data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('[name="submit_input_nilai"]').on('click', function(e) {
        e.preventDefault();
        var data = $('.item').serialize();
        $.ajax({
            type: 'POST',
            dataType: "json",
            url: "<?= base_url('user/Admin/InputNilai'); ?>",
            data: data,
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    location.href = "<?= base_url('user/Admin'); ?>"

                } else {
                    $("#bidang_studi_error").html(data.error.bidang_studi_error);
                    $("#mata_pelajaran_error").html(data.error.mata_pelajaran_error);
                    $("#nilai_error").html(data.error.nilai_error);
                    $("#keterangan_error").html(data.error.keterangan_error);
                }
            }

        });
    });
})
</script>