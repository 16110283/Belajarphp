<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event-Ku</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/gerobak.css" rel="stylesheet">


     <link href="css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Event-Ku</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                	<span class="fa-stack fa-2x">
                            <a href="pembayaran.html" style="text-decoration:none" class="fa fa-shopping-cart fa-inverse"></a>
                        </span>
                	<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Belanja<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="Buah.html">Lokasi</a>
                            </li>
                            <li>
                                <a href="Sayuran.html">Makanan</a>
                            </li>
                             <li>
                                <a href="Buah.html">Perlengkapan</a>
                            </li>
                            
                            
                          </ul>
                    </li>
                     <li>
                        <a href="tentang.html">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="service.html">Service</a>
                    </li>
                   
                    
                       	<ul class="nav navbar-nav navbar-right">
      						<li><a href="daftar.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
   					 	</ul>
   					 	<form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Cari</button>
                    </form>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url(img/joEC.jpg);"></div>
                <div class="carousel-caption">
                    <h2>Lokasi kece disini!</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(img/makanan.jpg);"></div>
                <div class="carousel-caption">
                    <h2>Makanan Murah dan Enak</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url(img/Perkap.jpg);"></div>
                <div class="carousel-caption">
                    <h2>Perlengkapan</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Selamat Datang di Event-Ku
                </h1>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-apple fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Pesan Lokasi</h4>
                        <p>Silahkan Sewa Lokasi Anda Disini</p>
                        <a href="Buah.html" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-leaf fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Pesan Makanan</h4>
                        <p>Pesan Makanan Murah dan Enak Disini</p>
                        <a href="Sayuran.html" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-users fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Pesan Perlengkapan</h4>
                        <p>Silahkan Sewa Perlengkapan Pendukung Event Anda Disini</p>
                        <a href="petani.html" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>
          </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Lokasi Ter-Hits</h2>
            </div>
            <div class="row">
            <div class="panel-body col-md-4 col-sm-6" style="text-align: center; overflow: hidden; padding: 0;">
                 <div class="thumbnail">   
                    <a href="portfolio-item.html">
                     <img style="max-height: 200px;" src="img/newjec.jpg">
                    </a>
                    <div class="caption">
                        <h3>Jogja Expo Center<br>
                            <small>Rp 17.000.000/Hari</small>
                        </h3>
                        <p> Sewa Jogja Expo Center untuk Event anda disini</p>
                        <a href="#" class="btn btn-warning">See More</a>
                    </div>
                </div>
            </div>
            <div class="panel-body col-md-4 col-sm-6" style="text-align: center; overflow: hidden; padding: 0;">
                 <div class="thumbnail">   
                    <a href="portfolio-item.html">
                     <img style="max-height: 200px;" src="img/newpacific.jpg">
                    </a>
                    <div class="caption">
                        <h3>Grand Pacific Hall<br>
                            <small>Rp 15.000.000/Hari</small>
                        </h3>
                        <p>Sewa Grand Pacific Hall untuk Event anda disini</p>
                        <a href="detail1.html" class="btn btn-warning">See More</a>
                    </div>
                </div>
            </div>
            <div class="panel-body col-md-4 col-sm-6" style="text-align: center; overflow: hidden; padding: 0;">
                 <div class="thumbnail">   
                    <a href="portfolio-item.html">
                     <img style="max-height: 200px;" src="img/newprambanan.jpg">
                    </a>
                    <div class="caption">
                        <h3>Candi Prambanan<br>
                            <small>Rp 1.000.000/Event</small>
                        </h3>
                        <p>Sewa Candi Prambanan untuk lokasi Event anda</p>
                        <a href="#" class="btn btn-warning">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <h2 class="page-header">Perlengkapan Lengkap</h2>
            </div>
            <div class="panel-body col-md-4 col-sm-6" style="text-align: center; overflow: hidden; padding: 0;">
                 <div class="thumbnail">   
                    <a href="portfolio-item.html">
                     <img style="max-height: 200px;" src="img/perkap1.jpg">
                    </a>
                    <div class="caption">
                        <h3>Lighting<br>
                            <small>Rp 10.000/Hari</small>
                        </h3>
                        <p>Sewa Ligthning Event Disini</p>
                        <a href="detail2.html" class="btn btn-warning">See More</a>
                    </div>
                </div>
            </div>
            <div class="panel-body col-md-4 col-sm-6" style="text-align: center; overflow: hidden; padding: 0;">
                 <div class="thumbnail">   
                    <a href="portfolio-item.html">
                     <img style="max-height: 200px;" src="img/perkap3.jpg">
                    </a>
                    <div class="caption">
                        <h3>Kursi<br>
                            <small>Rp 5.000/Hari</small>
                        </h3>
                        <p>Sewa Kursi untuk kebutuhan Event anda</p>
                        <a href="#" class="btn btn-warning">See More</a>
                    </div>
                </div>
            </div>
            <div class="panel-body col-md-4 col-sm-6" style="text-align: center; overflow: hidden; padding: 0;">
                 <div class="thumbnail">   
                    <a href="portfolio-item.html">
                     <img style="max-height: 200px;" src="img/perkap2.jpg">
                    </a>
                    <div class="caption">
                        <h3>Proyektor<br>
                            <small>Rp. 25.000/hari</small>
                        </h3>
                        <p>Sewa Proyektor untuk Event anda</p>
                        <a href="#" class="btn btn-warning">See More</a>
                    </div>
                </div>
            </div>

        </div>
    
        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Misi Kami Adalah untuk mempermudah semua unit kegiatan dalam melaksanakan semua Event yang akan dilaksanakan dan juga membantu segala bentuk usaha sewa lokasi</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-warning btn-block" href="tentang.html">Tentang Kami</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            
                <div class="footer-12">
                    <p>Copyright &copy; Event-Ku 2018</p>
                </div>
            
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

    

</body>

</html>
