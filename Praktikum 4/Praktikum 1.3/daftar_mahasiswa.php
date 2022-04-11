<html>
    <head>
        <title>Daftar Mahasiswa</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"><h2>Daftar <b>Mahasiswa</b></h2></div>
                    </div>
                </div>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Thn Angkatan</th>
                        <th>IPK</th>
                        <th>Predikat</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once "class_mahasiswa.php";
                            $mahasiswa1 = new Mahasiswa(02011,"Faiz Fikri");
                            $mahasiswa1->nama = "Faiz Fikri";
                            $mahasiswa1->nim = 02011;
                            $mahasiswa1->prodi = "TI";
                            $mahasiswa1->thn_angkatan = 2012;
                            $mahasiswa1->ipk = 3.8;

                            $mahasiswa2 = new Mahasiswa(02012,"Alissa Khairunnisa");
                            $mahasiswa2->nama = "Alissa Khairunnisa";
                            $mahasiswa2->nim = 02012;
                            $mahasiswa2->prodi = "TI";
                            $mahasiswa2->thn_angkatan = 2012;
                            $mahasiswa2->ipk = 3.9;

                            $mahasiswa3 = new Mahasiswa(01011,"Rosalie Naurah");
                            $mahasiswa3->nama = "Rosalie Naurah";
                            $mahasiswa3->nim = 01011;
                            $mahasiswa3->prodi = "SI";
                            $mahasiswa3->thn_angkatan = 2010;
                            $mahasiswa3->ipk = 3.46;

                            $mahasiswa4 = new Mahasiswa(01012,"Defghi Muhammad");
                            $mahasiswa4->nama = "Defghi Muhammad";
                            $mahasiswa4->nim = 01012;
                            $mahasiswa4->prodi = "SI";
                            $mahasiswa4->thn_angkatan = 2010;
                            $mahasiswa4->ipk = 3.2;

                            $daftarMahasiswa = array($mahasiswa1, $mahasiswa2, $mahasiswa3, $mahasiswa4);

                            $no = 1;
                            foreach($daftarMahasiswa as $mahasiswa){
                                echo '<tr>';
                                echo '    <td>'.$no++.'</td>';
                                echo '    <td>'.$mahasiswa->nim.'</td>';
                                echo '    <td>'.$mahasiswa->nama.'</td>';
                                echo '    <td>'.$mahasiswa->prodi.'</td>';
                                echo '    <td>'.$mahasiswa->thn_angkatan.'</td>';
                                echo '    <td>'.$mahasiswa->ipk.'</td>';
                                echo '    <td>'.$mahasiswa->predikat_ipk().'</td>';
                                echo '    <td>';
                                echo '        <a class="add" title="Add" data-toggle="tooltip"><span class="material-icons">visibility</span></a>';
                                echo '        <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>';
                                echo '    </td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>