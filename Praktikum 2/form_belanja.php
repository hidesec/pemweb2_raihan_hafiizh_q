<html>
    <head>
        <title>Form Belanja</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class="row">
            <div class="col-sm">
                <h4>Form Belanja</h4>
                <hr>
                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8"><div class="custom-control custom-radio custom-control-inline"><input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"><label for="produk_0" class="custom-control-label">TV</label></div><div class="custom-control custom-radio custom-control-inline"><input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"><label for="produk_1" class="custom-control-label">KULKAS</label></div><div class="custom-control custom-radio custom-control-inline"><input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"><label for="produk_2" class="custom-control-label">MESIN CUCI</label></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8"><input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8"><button name="proses" type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
                <?php
                $proses = !empty($_POST['proses']) ? $_POST['proses'] : '';
                $nama_customer = !empty($_POST['customer']) ? $_POST['customer'] : '';
                $produk = !empty($_POST['produk']) ? $_POST['produk'] : '';
                $jumlah = !empty($_POST['jumlah']) ? $_POST['jumlah'] : '';

                $total_belanja = $produk === 'tv' ? number_format((int)$jumlah * 4200000,0,',','.')
                    : ($produk === 'kulkas' ? number_format((int)$jumlah * 3100000,0,',','.') : number_format((int)$jumlah * 3800000,0,',','.'));
                echo 'Proses: '.$proses;
                echo '<br/>Nama Customer: '.$nama_customer;
                echo '<br/>Produk Pilihan: '.$produk;
                echo '<br/>Jumlah Beli: '.$jumlah;
                echo '<br/>Total Belanja: Rp. '.$total_belanja.',-';
                ?>
            </div>
            <div class="col-sm">
            </div>
            <div class="col-sm">
                <table class="table">
                    <thead>
                    <tr class="table-primary">
                        <th scope="col">Daftar Harga</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">TV: 4.200.000</th>
                    </tr>
                    <tr>
                        <th scope="row">Kulkas: 3.100.000</th>
                    </tr>
                    <tr>
                        <th scope="row">Mesin Cuci: 3.800.000</th>
                    </tr>
                    <tr class="table-primary">
                        <th scope="row">Harga Dapat Berubah Setiap Saat</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>