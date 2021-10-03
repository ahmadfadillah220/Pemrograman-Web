<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Pendaftaran Mahasiswa Baru</h2>
                </div>
                <div class="card-body">
                <form action= "konfirmasipmb.php"method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Jalur Penerimaan Mahasiswa Baru *</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="jalur">
                                            <option selected>-- Pilih Jalur Penerimaan --</option>
                                            <option value="Tahun akademik 2022/2023 Jalur Undangan">Tahun akademik 2022/2023 Jalur Undangan</option>
                                            <option value="Tahun akademik 2022/2023 Jalur Seleksi Rata-rata Rapor">Tahun akademik 2022/2023 Jalur Seleksi Rata-rata Rapor</option>
                                            <option value="Tahun akademik 2022/2023 Jalur Seleksi Peringkat Kelas">Tahun akademik 2022/2023 Jalur Seleksi Peringkat Kelas</option>
                                            <option value="Tahun akademik 2022/2023 Jalur Seleksi Ujian Saringan Masuk (USM)">Tahun akademik 2022/2023 Jalur Seleksi Ujian Saringan Masuk (USM)</option>
                                            <option value="Tahun akademik 2022/2023 Jalur Seleksi Beasiswa ASAK (Ayo Sekolah Ayo Kuliah) Khusus Yang Beragama Katholik dan Anggota ASAK">Tahun akademik 2022/2023 Jalur Seleksi Beasiswa ASAK (Ayo Sekolah Ayo Kuliah) Khusus Yang Beragama Katholik dan Anggota ASAK</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="name">Nama Calon Mahasiswa (Sesuai Akte Kelahiran) *</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc">Nama depan</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <label class="label--desc">Nama Belakang</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tempat Tanggal Lahir</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="Ttl">
                                </div>
                            </div>
                        </div>
                        <h4>
                            <div class="name">Agama</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Agama">
                                            <option selected>Pilih</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        </h4>
                        <h4>
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Jenis">
                                            <option selected>Pilih</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        </h4>
                        <h4>
                            <div class="name">Status</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Status">
                                            <option selected>Pilih</option>
                                            <option value="Lajang">Lajang</option>
                                            <option value="Menikah">Menikah</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        </h4>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="Alamat" name="Alamat">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Kode Pos</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code">
                                            <label class="label--desc">Area Code</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">No.Handphone</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="HP" name="HP">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Asal Sekolah</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="Asal" name="asalSekolah">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tahun Lulus</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="Asal" name="tahunLulus">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->