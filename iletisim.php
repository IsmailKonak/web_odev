<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Marvel">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <title>İletişim - Başarılı</title>
</head>
<body id="index_sayfa">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand " href="index.html"><img src="img/sheldon.png" width="50" height="50" alt="Logo" class="d-inline-block align-text-center"><span class="baslik">Bazinga</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="egitimcv.html">Eğitim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hobilerim.html">Hobilerim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="iletisim.html">İletişim</a>
            </li>
          </ul>
          <div class="container-fluid justify-content-end">
            <div class="row">
              <div class="col-4 ">
                <a href="login.html" class="btn btn-primary">Login</a>
              </div>
            </div>
          </div>
        </div>
        
    </nav>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 80%;">
            <div class="col-8">
            <?php
            // Form verilerini al
            $isim = $_POST['isim'];
            $email = $_POST['email'];
            $cinsiyet = $_POST['cinsiyet'];
            $universite = $_POST['universite'];
            $mesaj = $_POST['mesaj'];

            // Resim dosyasının yolu ve adı
            $resimYolu = $_FILES['resim']['tmp_name'];
            $resimAdi = $_FILES['resim']['name'];

            // Resim klasörüne resim dosyasını kaydet
            $hedefKlasor = 'resimler/';
            $hedefDosya = $hedefKlasor . $resimAdi;
            move_uploaded_file($resimYolu, $hedefDosya);
            ?>

            <div class="card">
            <div class="card-header">İletişim Form Sonucu</div>
            <div class="card-body">
                <h5 class="card-title">İsim Soyisim:</h5>
                <p class="card-text"><?php echo $isim; ?></p>

                <h5 class="card-title">Email:</h5>
                <p class="card-text"><?php echo $email; ?></p>

                <h5 class="card-title">Cinsiyet:</h5>
                <p class="card-text"><?php if ($cinsiyet == "erkek"){echo "Erkek";} else{echo "Kadın";} ?></p>

                <h5 class="card-title">Üniversite:</h5>
                <p class="card-text"><?php 
                                        if ($universite == "ku"){echo "Kocaeli Üniversitesi";} 
                                        else if ($universite == "sau"){echo "Sakarya Üniversitesi";}
                                        else if ($universite == "itu"){echo "İstanbul Teknik Üniversitesi";}
                                        else if ($universite == "ytu"){echo "Yıldız Teknik Üniversitesi";} ?></p>

                <h5 class="card-title">Mesaj:</h5>
                <p class="card-text"><?php echo $mesaj; ?></p>

                <h5 class="card-title">Resim:</h5>
                <img src="<?php echo $hedefDosya; ?>" class="img-fluid" alt="Resim">
            </div>
            </div>
            </div>
        </div>
    </div>

</body>
</html>
