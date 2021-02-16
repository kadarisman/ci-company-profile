<!DOCTYPE html>
<html>

<head>
    <title>Report Table</title>
    <style type="text/css">
    #outtable {
        padding: 10px;
        border: 1px solid #e3e3e3;
        width: 600px;
        border-radius: 5px;
    }

    .short {
        width: 50px;
        font-size: 12px;
    }

    .normal {
        width: 100px;
        font-size: 12px;
    }

    table {
        border-collapse: collapse;
        font-family: arial;
        color: #5E5B5C;
    }

    thead th {
        text-align: left;
        padding: 5px;
    }

    tbody td {
        border-top: 1px solid #e3e3e3;
        padding: 10px;
        font-size: 12px;
    }

    tbody tr:nth-child(even) {
        background: #F6F5FA;
    }

    tbody tr:hover {
        background: #EAE9F5
    }

    .foot {
        float: right;
        margin-right: 150px;
        font-size: 12px;
        margin-top: 50px;
        ;
    }
    </style>
</head>

<body>
    <!-- In your local server -->
    <div id="outtable">
        <center>
            <h6>TRANSKRIP NILAI <br>
                KURSUS PENINGKATAN KAPASITAS<br>
                TENAGA PENYIDIK TINDAK PIDANA PELANGGARAN HUKUM LINGKUNGAN</h6>
        </center>
        <table>
            <thead>
                <tr>
                    <th class="normal">Bidang Studi</th>
                    <th class="normal">Mata Pelajaran</th>
                    <th class="short">Nilai</th>
                    <th class="short">Tanggal Lulus</th>
                    <th class="normal">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_nilai_user as $nl) : ?>
                <tr>
                    <td><?php echo $nl->bidang_studi; ?></td>
                    <td><?php echo $nl->mata_pelajaran; ?></td>
                    <td><?php echo $nl->nilai; ?></td>
                    <td><?php echo $nl->tanggal_lulus; ?></td>
                    <td><?php echo $nl->keterangan; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="foot">
            <center>
                <span>Agent, <?php echo date('d F Y') ?></span>
                <br><br><br><br>
                <?= $user_session['nama'] ?>
            </center>
        </div>
    </div>

</body>

</html>