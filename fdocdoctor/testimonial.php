<?php 
session_start();
require_once('base.php');
if (isset($_SESSION['fdocindia'])) {
 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
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
                        Testimonial Section
                    </h1>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Testimonial Section</h3>
                                </div>
                                <div class="box-body">
                                    <form role="form" id="edttt" action="inserttesti.php" method="post" enctype="multipart/form-data">
                                        <div class="xyz"></div>
                                        <div class="form-group">
                                            <label>Testimonial Content</label>
                                            <textarea class="form-control" name="testcont" rows="5" placeholder="Enter Testimonial Content"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Customer Name</label>
                                            <input type="text" name="testname" class="form-control" placeholder="Enter Customer Name"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Customer Image</label>
                                            <input name="image2" type="file">
                                        </div>
                                        <div class="box-footer" id="upudt">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->

                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Testimonial</h3>                                    
                                </div>

                                <button class="btn btn-success" id="edti1">Edit</button>
                                <button class="btn btn-danger" id="dlet1">Delete</button>
                                
                                <div class="box-body table-responsive slct">
                                    <table id="example2" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Testimonial Content</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $l = 1;
                                            $tre = mysqli_query($con, "select * from testimonial order by id desc");
                                            while ($trk = mysqli_fetch_array($tre)) {
                                                
                                            ?>
                                            <tr data="<?php echo $trk['id']; ?>">
                                                <td><?php echo $l; ?></td>
                                                <td class="c_descrip"><?php echo $trk['testcont']; ?></td>
                                                <td class="c_salary"><?php echo $trk['testname']; ?></td>
                                                <td class="c_img"><?php echo $trk['image2']; ?></td>
                                            </tr>
                                            <?php 
                                            $l++;}
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
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
    header('Location: logout.php');
}
?>