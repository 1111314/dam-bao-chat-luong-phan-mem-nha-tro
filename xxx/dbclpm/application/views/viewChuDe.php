<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Nội dung chủ đề</title>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/mycss.css" type="text/css"/>
        <script src="http://localhost/dbclpm/media/js/bootstrap.js"></script>
        <script src="http://localhost/dbclpm/media/js/bootstrap.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/jquery-1.11.1.min.js"></script>
        <style type="text/css">
            .time{
                color: #00FFCC;
            }
            .noidung{
                font-size: 20px;
                font-style: italic;
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20"> Trang chủ</a>
          <a class="navbar-brand" href="<?php echo base_url();?>index.php/chuDe"><img src="http://localhost/dbclpm/media/img/forum_icon.png" width="20" height="20"> Diễn đàn</a>
          
        </div>
        <div class="navbar-collapse collapse">
          <div class="navbar-form navbar-right" role="form">
            <?php 
            $maTaiKhoan = $this->session->userdata('maTaiKhoan');
            $tenTaiKhoan = $this->session->userdata('tenTaiKhoan');
            $maLoaiTaiKhoan = $this->session->userdata('maLoaiTaiKhoan');
            $url = base_url();
            if($tenTaiKhoan == null){
                echo "<button class='btn btn-success'><a href='".$url."index.php/taiKhoan/dangNhap' class='font-a'>Đăng nhập</a></button>";
            } else{
                echo "<span class='font'>Xin chào <a href='".$url."index.php/taiKhoan/thayDoi/".$maTaiKhoan."'>".$tenTaiKhoan.",</a></span>";
                echo "<a href='".$url."index.php/taiKhoan/dangXuat'>Đăng xuất</a>";
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            if($maLoaiTaiKhoan == 1){
                echo "<a href='".$url."index.php/taiKhoan/trangquantri'><img src='http://localhost/dbclpm/media/img/admin-icon.png' width='20' height='20'/>Quản trị hệ thống</a>";
            } else if($maLoaiTaiKhoan == 2){
                echo "<a href='".$url."index.php/taiKhoan/trangquanlynhatro/".$maTaiKhoan."'><img src='http://localhost/dbclpm/media/img/admin-icon.png' width='20' height='20'/>Quản trị nhà trọ</a>";
            }
        ?>
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
     
    </div>

    <div class="container">
      <!-- Example row of columns -->
      
      <div class="row">
        <div class="diendan">
                        <div class="header-diendan">
                            <p style="margin-left:15px">
                              <?php
                              foreach ($chuDe as $chuDe){
                                echo $chuDe->TIEU_DE;
                                }
                              ?>
                            </p>
                        </div>
                        <div class="header-diendan2">
                            <div class="row">
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-4">
                                    <img src="http://localhost/dbclpm/media/img/clock-icon.png" height="20" width="20">
                                    Thời gian tạo: <span class="time">
                                    <?php 
                                        echo $chuDe->TG_TAO_CHU_DE;
                                    ?></span>
                                </div>
                                <div class="col-lg-4">
                                    <img src="http://localhost/dbclpm/media/img/users-icon.png" height="20" width="20">
                                    Người tạo:<span class="time">
                                    <?php 
                                        echo $chuDe->TEN_TK;
                                    ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="noidung-diendan">
                            <div class="noidung">
                            <?php
                            echo $chuDe->NOI_DUNG;
                            ?>
                            </div>
                        </div>
                        
                    </div>
      </div>
      <hr>

      <footer>
        <p>&copy; Đảm bảo chất lượng phần mềm</p>
      </footer>
    </div> <!-- /container -->
    </body>
</html>
