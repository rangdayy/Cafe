<?php
    session_start();
    if(!isset($_SESSION["SES_LOGIN"])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Welcome to Cafe Latte</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg="nest"></script>

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php"
                style="font-family: 'Satisfy', cursive; font-size: 40px; ">Cafe Latte</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#logout"><i
                            class="fas fa-user-circle fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead1" style="background-image: url('img/bg4.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12" align="center" style="margin-top:110px;">
                    <i class="fas fa-mug-hot fa-3x" style="color: white;"></i>
                </div>
            </div>
            <div class="row">
                <div class="col-12" align="center">
                    <a style="color: white;" class="user">Cafe Latte</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12" align="center">
                    <p style="color: white; margin-bottom:50px;">Gabung untuk mendapatkan keuntungan,<br>penawaran,
                        promo dan melakukan reservasi :)
                    </p>
                </div>
            </div>


        </div>

    </header>


    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
        <div class="container">
            <div style="margin-top: -4rem;" id="profil">
            <div class="row">
                <div class="col-12">
                <a href="#profil" class="js-scroll-trigger"><h4>Update Data User</h4></a>
                </div>
                </div>
                <br>
            <form action="./crud/edituser.php" method="post">
                <div class="row">
                        <div class="col-4"><label Email>Username</label></div>
                        <div class="col-8"><input class="tabel" name="txtUser" id="txtUser" type="text" style="padding-left: 10px;"/>
                        </div>
                </div>
                <div class="row">
                    <div class="col-4"><label Email>Nama</label></div>
                    <div class="col-8"><input class="tabel" name="txtNama" id="txtNama" type="text" style="padding-left: 10px;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4"><label Email>Email</label></div>
                    <div class="col-8"><input class="tabel" name="txtEmail" id="txtEmail" type="email" required style="padding-left: 10px;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4"><label Email>Password</label></div>
                    <div class="col-8"><input class="tabel" name="txtSandi" id="txtSandi" type="password" style="padding-left: 10px;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4"><label Email>No. Hanphone</label></div>
                    <div class="col-8"><input class="tabel" name="txtHp" id="txtHp" type="text" style="padding-left: 10px;"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4"><label Email>Alamat</label></div>
                    <div class="col-8"><textarea class="tabel" name="txtAlamat" id="txtAlamat" rows="3" style="padding-left: 10px;"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12" align="center">
                        <button type="submit" id="daftarkan" name="update"
                            class="btn btn-primary js-scroll-trigger formbtn">Update</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </section>




    <!-- form logout -->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <form action="logout.php" method="post">
                        <table border="0" style=" width: 100.5%; border-collapse: collapse;">
                            <tr>
                                <th style="text-align: center;">
                                    <img style="margin-left: -17px; margin-top: -18px; border-radius: 5px 5px 0px 0px;"
                                        src="img/bg6.jpg" class="center-cropped">
                                    <div class="centered">
                                        <h1><i class="fas fa-mug-hot fa-lg"></i></h1>
                                    </div>

                                </th>
                            </tr>
                            <tr>
                                <td style="text-align: center; padding-top: 3%; padding-bottom: 3%">
                                    <h6>Apakah anda ingin logout?</h6>
                                </td>
                            </tr>
                        </table>
                        <div class="formlog">
                            <table border="0" style="margin-left: 5%; width: 90%;">
                                <div class="row">
                                    <div class="col-12" align="center">
                                        <button type="submit" class="btn btn-primary js-scroll-trigger formbtn"
                                            style="margin-left:-30px; margin-right: 20px;">Logout</button>
                                        <button type="submit" data-dismiss="modal"
                                            class="btn btn-primary js-scroll-trigger formbtn">Batal</button>
                                    </div>
                                </div>

                            </table>
                        </div>
                    </form>



                    <!-- Bootstrap core JavaScript -->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Plugin JavaScript -->
                    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for this template -->
                    <script src="js/grayscale.min.js"></script>

</body>


</html>