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

        <title>FDOC Multispeciality Dental Chains</title>
        <meta name="keywords" content="Dental clinic in Pune, Best dentist in Pune, Dental treatmnet in Pune, Dr. Shoaib Syed"/>
        <meta name="description" content="Dr. Shoib Syed is Best dentist in Pune" />
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

            <div id="blog" class="container">
                <div class="blog">
                    <div class="row">
                        <div class="col-md-12 blog-main">
                            <?php 
                                  $presf = mysqli_query($con, "select * from blog order by id desc");
                                  $kl = 0;
                                  while ($sttr = mysqli_fetch_array($presf)) {
                                    $kj = substr($sttr['bcont'], 0 ,100);
                              ?>
                            <article class="blog-item">
                                <div class="brk" style="border: 1px solid #01729c;">
                                <div class="post-media">
                                    <a href="blog_post?n=<?php echo $sttr['id']; ?>">
                                        <img src="fdocdoctor/<?php echo $sttr['bimg']; ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="item-content" style="padding:0 20px 20px 20px;">
                                    <!-- <div class="post-date">
                                        <ul>
                                            <li class="date">
                                                <span class="month">October</span>
                                                <span class="day">11</span>
                                                <span class="year">2013</span>
                                            </li>
                                        </ul>
                                    </div> -->
                                    <!-- end:Post date -->
                                    <div class="post-title">
                                        <h3 class="title m-0">
                                            <a href="blog_post?n=<?php echo $sttr['id']; ?>"><?php echo $sttr['bhead']; ?></a>
                                         </h3>
                                    </div>
                                    <!-- end:Post Title -->
                                    <div class="post-entry">
                                        <p>
                                            <?php echo $kj; ?>
                                        </p>
                                        <p>
                                            <a href="blog_post?n=<?php echo $sttr['id']; ?>" class="btn btn-info btn-fill">Continue reading</a>
                                        </p>
                                    </div>
                                    <!-- end:Post Entry -->
                                </div>
                                </div>
                            </article>
                            <?php 
                                $kl++;}
                            ?>
                        </div>
                    </div>
                    <!--/.row-->
                </div>
            </div>
            <!--/#blog-->
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