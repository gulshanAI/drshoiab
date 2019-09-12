<?php 
require_once('fdocdoctor/base.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="FDOC Multispeciality Dental Chains">

    <link href="images/smallog.png" rel="shortcut icon" type="image/png">

    <title>Success Stories</title>
        <meta name="keywords" content="Success Stories"/>
        <meta name="description" content="Success Stories" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- WebFonts core CSS -->
    <link href="css/fonts.css" rel="stylesheet">
    <!-- <link href="css/animsition.css" rel="stylesheet"> -->
    <!-- Simple Line Icons -->
    <link href="MegaNavbar/assets/plugins/simple-line-icons/simple-line-icons.css" rel="stylesheet">
    <!-- OWL -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <!-- MegaNavbar-->
    <link rel="stylesheet" type="text/css" href="MegaNavbar/assets/css/MegaNavbar.min.css">
    <link rel="stylesheet" type="text/css" href="MegaNavbar/assets/css/skins/navbar-default.css">
    <!-- <link rel="stylesheet" type="text/css" href="MegaNavbar/assets/css/animation/animation.css"> -->
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Goole fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    <div class="animsition">
        <div class="wrapper">
            <?php include 'header.php'; ?>

            <section class="space-sm" id="service">
                <div class="container">
                    <div class="service-box">
                        <div class="row text-center">
                            <h1new>Success Stories</h1new><br><br>
                             <div class="col-md-12 col-sm-12">
                                <div id="owl-demo" class="row">
                                    <?php 
                                          $presf = mysqli_query($con, "select * from successtory order by id desc");
                                          $kl = 0;
                                          while ($sttr = mysqli_fetch_array($presf)) {
                                      ?>
                                    <div class="item">
                                        <div class="info-block">
                                            <div class="thumbnail">
                                                <div class="col-sm-6 clearfix">
                                                    
                                                    <div class="block_aft">
                                                        <img src="fdocdoctor/<?php echo $sttr['image2']; ?>" alt="" class="img-responsive">
                                                        <h5 class="m-0 p-5"></h5>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 clearfix mrrtpx">
                                                    <h4><?php echo $sttr['sname']; ?></h4>
                                                    <p><?php echo $sttr['scont']; ?></p>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                    <?php 
                                     $kl++; }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 clearfix cr-nav center-block">
                                <div class="customNavigation">
                                    <a class="btn btn-default carousel-prev fa fa-long-arrow-left"></a>
                                    <a class="btn btn-default carousel-next fa fa-long-arrow-right"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           <div class="cta bg-blue-light">
                <div class="container">
                    <div class="row cta-1">
                        <div class="cta-features">
                            <div class="col-sm-3 blue-1">
                                <img src="images/oth/1.jpeg" class="img-responsive" alt="">
                            </div>
                            <div class="col-sm-3 blue-2">
                                <img src="images/oth/2.jpeg" class="img-responsive" alt="">
                            </div>
                            <div class="col-sm-3 blue-3">
                                <img src="images/oth/3.jpeg" class="img-responsive" alt="">
                            </div>
                            <div class="col-sm-3 blue-4">
                                <img src="images/oth/4.jpeg" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'footer.php'; ?>
        </div>
        <!-- end: animatsion -->
    </div>
    <!-- end:Wrapper -->
    <!-- core JavaScript
         ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- jQuery REVOLUTION Slider  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/form_validate.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>