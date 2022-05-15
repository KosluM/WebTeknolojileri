<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ------ boxicon---------  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- ---------- style.css ----------  -->
    <link rel="stylesheet" href="aaa.css">

    <title></title>
</head>

<body>
    <!-- -------- navbar--------  -->
    <nav class="navbar navbar-expand-md scroll fixed-top ">
        <div class="justify-content-center">
          
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class='bx bx-menu bx-md text-white'></i>
          </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto bg">
                    <li class="nav-item">
                        <a class="nav-link text-white " href="hakkinda.html">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="ozgecmıs.html">Özgeçmiş</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="ilgi.php">İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="sehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="miras.html">Mirasımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="iletisim.html">İletişim</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>
    <!-- ---------------- home section --------  -->
    <section>
        <div class="hero" id="home">
            <div class="content text-white" >
                
            <div class="container">
        <form action="contact-result.html" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="aboutMe">
                        <h5 class="text-info">İLETİŞİM BİLGİLERİ</h5>
                        <br>
                        <?php
                        echo '
                            <div class="form-group">
                            <label class="font-weight-bold" style="color: red">Ad</label>
                            <input class="form-control" type="text" disabled value="' . $_POST["name"] . '">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" style="color: red">Soyad</label>
                            <input class="form-control" type="text" disabled value="' . $_POST["surname"] . '">
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" style="color: red">Mail Adresi</label>
                            <input class="form-control" type="email" disabled value="' . $_POST["mail"] . '">
                        </div>
                            
                            ';
                        ?>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aboutMe">
                        <?php
                        echo '
                        <div class="form-group">
                            <label class="font-weight-bold" style="color: red">Gönderilen Mesaj</label>
                            <textarea name="message" cols="30" rows="10" style="width: 100% ; border-radius: 8px;" disabled>' . $_POST["message"] . '</textarea>
                        </div>
                        ';
                        ?>

                    </div>
                </div>
        </form>
       
    </div>
    </div>
                    
            </div>
        </div>
    </section>

    <!-- ----------footer ------------  -->
    <footer>
        <div style="text-align:center">
            <div class="row">
                <div class="col-12 mb-2">
                    <h5><span>&#169;</span> <span>CodeWithSanjoy</span> All right reserved</h5>
                </div>
            </div>
        </div>
    </footer>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html> 