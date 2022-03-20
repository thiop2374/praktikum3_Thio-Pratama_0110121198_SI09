<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;500;800&display=swap" rel="stylesheet">
    <title>SIA STT-NF</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Kanit:wght@100;500;800&display=swap");
:root {
  --main-color: #76b900;
}
html,
body,
* {
  font-family: "Kanit", sans-serif;
}
.my-nav {
  background-color: #20B2AA;
  min-height: 60px;
  font-size: 10px;
}
.navbar-brand {
  font-size: 2.5em;
  font-weight: 800;
  letter-spacing: 3px;
}
    </style>
</head>
<body>

<!-- Navigation Bar Start -->
<nav class="navbar navbar-expand-lg navbar-dark my-nav sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">SISTEM INFORMASI ALUMNI STT TERPADU NURUL FIKRI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    </nav>
<!-- Navigation Bar End -->

<br>
<!-- Form Start -->
<div class="container-fluid">
        <div class="row">
            <h2 class="text-center">FORM ALUMNI</h2>
            <br><br>
            <form action="nilai_siswa.php" method="POST">
            <div class="form-group row">
            <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="text" name="text" placeholder="Masukan Nama Lengkap" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text1" name="text1" placeholder="Masukan Email " type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="text2" name="text2" placeholder="Masukan NIM " type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="si"> 
          <label for="radio_0" class="custom-control-label">Sistem Informasi</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="ti"> 
          <label for="radio_1" class="custom-control-label">Teknik Informatika</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-radio">
          <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="bd"> 
          <label for="radio_2" class="custom-control-label">Bisnis Digital</label>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Tahun Kelulusan</label> 
    <div class="col-8">
      <input id="text3" name="text3" placeholder="Tahun Lulus" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<div>
</div>
<!-- Form Start -->


<br>
<!-- Footer Start -->
<footer>
 <p>Created by <a href="http://instagram.com/_thioprtma456">Thio Pratama &copy;2022</a></p>
 </footer>
<!-- Footer End -->  

</body>
</html>

<?php
include 'footer.php';
?>