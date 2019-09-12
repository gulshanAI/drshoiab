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
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
            <?php include 'header.php'; ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Blog Section
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Blog Section</h3>
                                </div>
                                
                                <form role="form" id="edttt3" action="insertblog.php" method="post" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="xyz3"></div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Heading</label>
                                            <input type="text" name="bname" class="form-control" id="exampleInputEmail1" placeholder="Enter Heading">
                                        </div>
                                        <div class="form-group edtokart">
                                            <label>Enter Blog Content</label>
                                            <textarea id="editor1" name="bdesc" rows="10" placeholder="Enter Blog Content"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" name="image1" id="exampleInputFile">
                                        </div>
                                    </div>

                                    <div class="box-footer">
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

                                <button class="btn btn-success" id="edti3">Edit</button>
                                <button class="btn btn-danger" id="dlet3">Delete</button>

                                <div class="box-body table-responsive slct">
                                    <table id="example1" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Blog Title</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                              $l = 1;
                                              $tre = mysqli_query($con, "select * from blog order by id desc");
                                              while ($trk = mysqli_fetch_array($tre)) {
                                            ?>
                                            <tr data="<?php echo $trk['id']; ?>">
                                                <td><?php echo $l; ?></td>
                                                <td class="b_name"><?php echo $trk['bhead']; ?></td>
                                                <td class="b_content"><?php echo $trk['bcont']; ?></td>
                                                <td class="b_img"><?php echo $trk['bimg']; ?></td>
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

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/new.js"></script>
        <script src="js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>
    </body>
</html>
<?php
}
else{
    header('location:logout.php');
}
?>