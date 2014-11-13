<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Quản lý danh sách nhà trọ</title>
        <link href="http://localhost/dbclpm/media/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://localhost/dbclpm/media/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="http://localhost/dbclpm/media/css/sb-admin.css" rel="stylesheet">
        <link href="http://localhost/dbclpm/media/css/plugins/morris.css" rel="stylesheet">
        <link href="http://localhost/dbclpm/media/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="http://localhost/dbclpm/media/js/jquery.min.js"></script>
        <style type="text/css">
        .a{
            color: black;
        }
        </style>
    </head>
    <body>
        <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">Quay lại trang chủ</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div>
                        <h1 class="page-header">
                            <img src="http://localhost/dbclpm/media/img/nhatro-icon.png" width="100" height="100">
                            Danh sách nhà trọ của
							<?php foreach ($nhaTros as $nhaTro) {
                                                echo $nhaTro->TEN_TK;
                                            }?>
                        </h1>
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Danh sách nhà trọ của
                                            <?php foreach ($nhaTros as $nhaTro) {
                                                echo $nhaTro->TEN_TK;
                                            }?>
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Mã NT</th>
                                                <th>Tên tài khoản</th>                                     
                                                <th>Số nhà</th>                                            
                                                <th>Tiêu đề</th>
                                                <th width="100">Giới thiệu</th>
                                                <th>Thời gian tạo</th>
                                                <th>Duyệt</th>
                                                <th>Tùy chọn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $url = base_url();
                                            foreach ($nhaTros as $nhaTro) {
                                                echo "<tr>";
                                                echo "<th>".$nhaTro->MA_NT."</th>";
                                                echo "<th>".$nhaTro->TEN_TK."</th>";                                              
                                                echo "<th>".$nhaTro->SO_NHA."</th>";                                                
                                                echo "<th>".$nhaTro->TIEU_DE."</th>";
                                                echo "<th  width='100'>".$nhaTro->GIOI_THIEU."</th>";
                                                echo "<th>".$nhaTro->TG_TAO_NT."</th>";
                                                echo "<th>".$nhaTro->DUYET."</th>";
                                                echo "<th>";
                                                echo "<a class='glyphicon glyphicon-remove' href='";
                                                echo $url."index.php/nhaTro/xoa/".$nhaTro->MA_NT;
                                                echo "' role='button' title='Xóa'></a>";
                                                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                                                echo "<a class='glyphicon glyphicon-pencil' href='";
                                                echo $url."index.php/nhaTro/capnhat/".$nhaTro->MA_NT;
                                                echo "' role='button' title='Cập nhập'></a>";
                                                echo "</th>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-info"><a href="http://localhost/dbclpm/index.php/nhaTro/them1" class="a">Thêm nhà trọ</a></button>
        
                        </div>
                        <br>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
<script src="http://localhost/dbclpm/media/js/jquery-1.11.1.js"></script>
        <script src="http://localhost/dbclpm/media/js/bootstrap.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/plugins/morris/raphael.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/plugins/morris/morris.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/plugins/morris/morris-data.js"></script>
        
    </body>
</html>