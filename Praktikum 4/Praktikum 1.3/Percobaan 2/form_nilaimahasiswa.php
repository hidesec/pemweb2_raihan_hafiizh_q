<html>
    <head>
        <title>Form Belanja</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h4>Form Nilai Ujian</h4>
                    <hr>
                    <form method="POST" action="form_nilaimahasiswa.php">
                        <div class="form-group row">
                            <label for="nim" class="col-4 col-form-label"><b>NIM</b></label>
                            <div class="col-8">
                                <input id="nim" name="nim" placeholder="NIM" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pilih_mk" class="col-4 col-form-label"><b>Pilih MK</b></label>
                            <div class="col-8">
                              <select id="pilih_mk" name="pilih_mk" class="custom-select">
                                <option value="Data Warehouse">Data Warehouse</option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nilai" class="col-4 col-form-label"><b>Nilai</b></label>
                            <div class="col-8">
                            <input id="nilai" name="nilai" placeholder="Nilai" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary" value="proses">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <?php
                        require_once "class_nilaimahasiswa.php";
                        $nim = !empty($_POST['nim']) ? $_POST['nim'] : '';
                        $mk = !empty($_POST['pilih_mk']) ? $_POST['pilih_mk'] : '';
                        $nilai = !empty($_POST['nilai']) ? $_POST['nilai'] : '';

                        if(!empty($_POST['proses'])) {
                            $nilaiMahasiswa = new NilaiMahasiswa($mk, $nilai, $nim);

                            echo '<br/>NIM: ' . $nim;
                            echo '<br/>Nama Mata Kuliah: ' . $mk;
                            echo '<br/>Nilai: ' . $nilai;
                            echo '<br/>Hasil Ujian: ' . $nilaiMahasiswa->hasil();
                            echo '<br/>Grade: ' . $nilaiMahasiswa->grade();
                        }

                    ?>
                </div>
            </div>
        </div>
    </body>
</html>