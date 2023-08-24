<?php include('head.php');?>
<?php include('nav.php');?>

<div class="row mb-2">
    <div class="col-sm-12">
        <br>
       
    </div><!-- /.col -->
</div><!-- /.row -->

<?php
$don = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'xuly' ")) ['COUNT(*)'];
$news = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `news` WHERE `status` = 'success' ")) ['COUNT(*)'];
$uytin = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `cards`")) ['COUNT(*)'];
$dv = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `category`")) ['COUNT(*)'];

?>

<div class="row">
    <!-- Vui Lòng Không Xóa Để Tôn Trọng Tác Giả -->
    <div class="col-lg-12 col-12">
        <div class="alert alert-info" role="alert">
  <b>Đã Cập Nhập Version 2.6 Thành Công </b><br>
  <b>Chức Năng Mới Trong Bản Cập Nhập</b>
  <ul>
      <li>Thêm Chức Năng Đăng Bài Viết</li>
      <li>Cập Nhập Lại Một Số Tính Năng Cũ</li>
      <li>Chỉnh Sửa Lại Giao Diện Quản Trị</li>
  </ul>
  <b>Ngày Cập Nhập Gần Nhất : 01 // 05 // 2023</b> <br>
  <p>Được Thực Hiện Bởi <b><a href="https://www.facebook.com/hmanhcuti" style="text-decoration: none">Nguyễn Hoàng Mạnh  </a></b></p>
</div>
        </div>
        <!-- THANK YOU - I LOVE YOU SO MUCH -->

<div class="col-lg-6 col-6">
					
						<div class="card card-service box-service-panel">
						    <div class="card-body" data-toggle="tooltip" data-placement="bottom" title="Xem Tất Cả Đơn Tố Cáo">
						        <div class="box-body text-center">
						           <a>ĐƠN TỐ CÁO HIỆN CÓ</a><br>
				                	<h3><?=$don;?></h3>
				                	<hr>
				                    <a rel="nofollow" href="ho-tro.php"><button class="btn btn-primary btn-block">Xem Ngay</button></a>
				                </div>
						    </div>
						</div>
			    </div>

<div class="col-lg-6 col-6">
					
						<div class="card card-service box-service-panel">
						    <div class="card-body" data-toggle="tooltip" data-placement="bottom" title="Xem Tất Cả Đơn Tố Cáo">
						        <div class="box-body text-center">
						           <a>HỒ SƠ UY TÍN HIỆN CÓ</a><br>
				                	<h3><?=$uytin;?></h3>
				                	<hr>
				                    <a rel="nofollow" href="uytin.php"><button class="btn btn-secondary btn-block">Xem Ngay</button></a>
				                </div>
						    </div>
						</div>
			    </div>


<div class="col-lg-6 col-6">
						<div class="card card-service box-service-panel">
						    <div class="card-body" data-toggle="tooltip" data-placement="bottom" title="Xem Tất Cả Hồ Sơ Uy Tín">
						        <div class="box-body text-center">
						           <a>SỐ DỊCH VỤ HIỆN CÓ</a><br>
				                	<h3><?=$dv?></h3>
				                    <hr>
				                    <a rel="nofollow" href="uytin.php"><button class="btn btn-warning btn-block">Xem Ngay</button></a>
				                </div>
						    </div>
						</div>
			    </div>
			</div>    
<script>
  $(function () {
    $("#datatable2").DataTable({
      "responsive": false,
      "autoWidth": false,
    });
  });
</script>
<?php include('foot.php');?>