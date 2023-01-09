<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- bootstarp -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!-- bootstarp -->

<!-- css -->

<link rel="stylesheet" href="style.css">

<!-- JS -->

<script src="script.js"></script>

</head>
<body>

<?php
    if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "<script>alert('Anda telah terdaftar, Terima Kasih')</script>";
		}
	}
    ?>


<!--Menu-->
<section id="menu">
      <div class="row  justify-content-between">
        <div class="col-2"><a href="pendaftaran.html" class="btn btn-success fs-4 text-center py-1 nav-link">Kembali</a></div>
        <div class="col-2"><a href="login.php" class="btn btn-primary fs-4 text-center py-1 nav-link">Admin</a></div>
      </div>
    </section>
    <!-- Akhir menu -->


<form action="daftar-action.php" method="post" style="margin: bottom 100px;">
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Formulir Pendaftaran</h3>
                        <p>Silahkan isi formulir berikut dengan lengkap</p>
                        <form class="requires-validation" novalidate>

                        <input type="hidden" name="id">

                            <div class="col-md-12">
                                <label for="name">Nama:</label>
                               <input class="form-control" type="text" name="name" placeholder="Masukkan nama lengkap" required>
                               <div class="valid-feedback">Username field is valid!</div>
                               <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <label for="alamat">Alamat</label>
                                <input class="form-control" type="text" name="alamat" placeholder="Masukkan alamat lengkap" required>
                                 <div class="valid-feedback">Alamat valid</div>
                                 <div class="invalid-feedback">Alamat tidak valid!!</div>
                            </div>

                            <div class="col-md-12">
                                <label for="tanggal">Tanggal lahir</label>
                                <input class="form-control" type="date" name="tanggal" placeholder="" required>
                                 <div class="valid-feedback">Tanggal lahir valid!</div>
                                 <div class="invalid-feedback">Tanggal lahir tidak valid!!</div>
                            </div>

                            <div class="col-md-12">
                                <label for="nohp">No.HP</label>
                                <input class="form-control" type="number" name="nohp" required>
                                 
                            </div>
                            <div class="col-md-12">
                                <label for="motivasi">Motivasi masuk pesantren</label>
                                <textarea name="motivasi" id="" cols="30" rows="10"></textarea>
                                 <div class="valid-feedback">No.HP valid!</div>
                                 <div class="invalid-feedback">No.HP tidak valid</div>
                            </div>


                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Jenis kelamin: </label>

                            <input type="radio" class="btn-check" value="Laki-laki" name="gender" id="male" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="male">Laki-laki</label>

                            <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" value="Perempuan" required>
                            <label class="btn btn-sm btn-outline-secondary" for="female">Perempuan</label>

                               <div class="valid-feedback mv-up">You selected a gender!</div>
                                <div class="invalid-feedback mv-up">Please select a gender!</div>
                            </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">Dengan ini, saya setuju dengan peraturan dari Imtaq Shigar Baitul Qur'an Wonogiri </label>
                         <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                        </div>
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </form>


</body>
</html>