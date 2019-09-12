<?php 
session_start();
require_once('base.php');
if (isset($_SESSION['fdocindia'])) {
   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E-prashasan Blog</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
       <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

    </head>
    <body class="skin-blue">
        <?php include 'header.php'; ?>

            <aside class="right-side">

                <section class="content-header">
                    <h1>
                        Success Story
                    </h1>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Success Story</h3>
                                </div>

                                <form role="form" id="edttt2" action="insertsuccess.php" method="post" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="xyz2"></div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Success Story Title</label>
                                            <input type="text" name="sname" class="form-control" id="exampleInputEmail1" placeholder="Enter News Title">
                                        </div>                                       
                                        <div class="form-group">
                                            <label>Success Story Content</label>
                                            <textarea class="form-control" name="scont" rows="5" placeholder="Enter Success Story Content"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Before/After Image</label>
                                            <input name="image2" type="file">
                                        </div>
                                    </div>

                                    <div class="box-footer" id="upudt">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div> 
                </section>
            </aside>

            <aside class="right-side">
                 <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">List of upcoming events</h3>                                    
                                </div>

                                <button class="btn btn-success" id="edti2">Edit</button>
                                <button class="btn btn-danger" id="dlet2">Delete</button>

                                <div class="box-body table-responsive slct">
                                    <table id="example" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Img2</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                              $l = 1;
                                              $tre = mysqli_query($con, "select * from successtory order by id desc");
                                              while ($trk = mysqli_fetch_array($tre)) {
                                            ?>
                                            <tr data="<?php echo $trk['id']; ?>">
                                                <td><?php echo $l; ?></td>
                                                <td class="b_name"><?php echo $trk['sname']; ?></td>
                                                <td class="b_content"><?php echo $trk['scont']; ?></td>
                                                <td class="b_url1"><?php echo $trk['image2']; ?></td>
                                            </tr>
                                            <?php 
                                             $l++;}
                                            ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/new.js"></script>
        
    </body>
</html>
<?php
}
else{
    header('location:logout.php');
}
?>