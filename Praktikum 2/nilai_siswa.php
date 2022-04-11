<html>
    <head>
        <title>Form Nilai Mahasiswa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="container">
            <h4>Form Nilai Siswa</h4>
            <hr>
            <form class="form-horizontal" method="POST" action="nilai_siswa.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="select" name="matkul" class="custom-select">
                        <option value="DDP">Dasar Dasar Pemrograman</option>
                        <option value="BDI">Basis Data I</option>
                        <option value="WEB1">Pemrograman Web</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                    <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-8">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                    </div>
                </div>
            </form>
            <?php 
                $proses = !empty($_POST['proses']) ? $_POST['proses'] : '';
                $nama_siswa = !empty($_POST['nama']) ? $_POST['nama'] : '';
                $mata_kuliah = !empty($_POST['matkul']) ? $_POST['matkul'] : '';
                $nilai_uts = !empty($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                $nilai_uas = !empty($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                $nilai_tugas = !empty($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

                if(!empty($proses)){
                    echo 'Proses: '.$proses;
                    echo '<br/>Nama: <b>'.$nama_siswa.'</b>';
                    echo '<br/>Mata Kuliah: '.$mata_kuliah;
                    echo '<br/>Nilai UTS: '.$nilai_uts;
                    echo '<br/>Nilai UAS: '.$nilai_uas;
                    echo '<br/>Nilai Tugas Praktikum: '.$nilai_tugas;

                    $persentase_uts = (30 / 100) * $nilai_uts;
                    $persentase_uas = (35 / 100) * $nilai_uas;
                    $persentase_tugas = (35 / 100) * $nilai_tugas;
                    $total_persentase_kelulusan = $persentase_uts + $persentase_uas + $persentase_tugas;

                    echo $total_persentase_kelulusan > 55 ? '<br/>Kelulusan: <b>LULUS</b>' : '<br/>Kelulusan: <b>TIDAK LULUS</b>' ;

                    $grade = $total_persentase_kelulusan <= 35 ? 'E'
                    : ($total_persentase_kelulusan <= 55 ? 'D'
                        : ($total_persentase_kelulusan <= 69 ? 'C'
                                : ($total_persentase_kelulusan <= 84 ? 'B'
                                    : ($total_persentase_kelulusan <= 100 ? 'A'
                                        : 'I'))));

                    echo $total_persentase_kelulusan <= 35 ? '<br/>Grade: <b>E</b>'
                        : ($total_persentase_kelulusan <= 55 ? '<br/>Grade: <b>D</b>'
                        : ($total_persentase_kelulusan <= 69 ? '<br/>Grade: <b>C</b>'
                        : ($total_persentase_kelulusan <= 84 ? '<br/>Grade: <b>B</b>'
                        : ($total_persentase_kelulusan <= 100 ? '<br/>Grade: <b>A</b>'
                        : '<br/>Grade: <b>I</b>'))));

                    switch ($grade){
                        case 'E':
                            echo '<br/>Predikat: <b>Sangat Kurang</b>';
                            break;
                        case 'D':
                            echo '<br/>Predikat: <b>Kurang</b>';
                            break;
                        case 'C':
                            echo '<br/>Predikat: <b>Cukup</b>';
                            break;
                        case 'B':
                            echo '<br/>Predikat: <b>Memuaskan</b>';
                            break;
                        case 'A':
                            echo '<br/>Predikat: <b>Sangat Memuaskan</b>';
                            break;
                        case 'I':
                            echo '<br/>Predikat: <b>Tidak Ada</b>';
                            break;
                    }
                }
            ?>
        </div>
    </body>
</html>