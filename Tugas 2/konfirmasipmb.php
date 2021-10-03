<!DOCTYPE html>
<html lang="en">
<head>
  </head>
<body>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>

    </nav>

    <div class="container">
    	<p class="fs-3 fw-bold" style="margin-top: 15px;">Konfirmasi Pendaftaran</p>
            <hr>
    	<?php 
    $jalur = $_POST["jalur"];
    $First_name = $_POST["first_name"];
    $Last_name = $_POST["last_name"];
    $alamat = $_POST["Alamat"];
    $Ttl = $_POST["Ttl"];
    $Area_code = $_POST["area_code"];
    $HP = $_POST["HP"];
    $email = $_POST["email"];
    $asalSekolah = $_POST["asalSekolah"];
    $tahunLulus = $_POST["tahunLulus"];


    echo "nama depan: ".$First_name."<br>";
    echo "nama belakang : ".$Last_name."<br>";
    echo "tanggal lahir : ".$Ttl."<br>";
    echo "alamat : ".$alamat."<br>";
    echo "Kode Pos : ".$Area_code."<br>";
    echo "No Handphone : ".$HP."<br>";
    echo "email : ".$email."<br>";
    echo "asal Sekolah : ".$asalSekolah."<br>";
    echo "tahun lulus : ".$tahunLulus."<br>";

    ?>
    </div>

</body>



</html>