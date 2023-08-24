<?php include('head.php');?>
<?php include('nav.php');?>

        <div class="row mb-2">
          <div class="col-sm-6">
         
          </div><!-- /.col -->
        </div><!-- /.row -->
<?php
if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
}

$AADDCC = mysqli_query($ketnoi,"SELECT * FROM `cards` WHERE `id` = '".$id."' ");
while ($row = mysqli_fetch_array($AADDCC) ) 
{
  if (isset($_POST["btn_submit"])) {
$code = random('QWERTYUIOPASDFGHJKLZXCVBNM1234567890','6');
    mysqli_query($ketnoi,"UPDATE `cards` SET
    `username` = '".$_POST['ten']."',
    `sdt`= '".$_POST['sdt']."',
    `id_fb` = '".$_POST['idfb']."',
    `website` = '".$_POST['website']."',
    `dich_vu` = '".$_POST['loai']."',
    `money` = '".$_POST['money']."',
    `trunggian` = '".$_POST['trunggian']."',
    `number` = '".$_POST['number']."',
    `image` = '".$_POST['image']."',
    `telegram` = '".$_POST['telegram']."',
    `dichvucungcap` = '".$_POST['dichvucungcap']."',
    `mota` = '".$_POST['mota']."',
    `ngan_hang` = '".$_POST['nganhang']."' WHERE `id` = '".$id."' ");

    echo '<script type="text/javascript">swal("Thành Công","Save Thành Công","success");
    setTimeout(function(){ location.href = "" },500);</script>';
      
  }

?>

<div class="row">

<section class="col-lg-12 connectedSortable">
  
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa Hồ Sơ <a href="//<?=$site_tenweb;?>/profile/<?=$row['code'];?>" style="text-shadow: 1px 2px 3px Indigo;"><?=$row['username'];?></a></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                    
                  <div class="form-group">
                    <label for="exampleInputEmail1">TÊN USER</label>
                    <input type="text" name="ten" class="form-control" value="<?=$row['username'];?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">LINK ẢNH</label>
                    <input type="text" name="image" class="form-control" value="<?=$row['image'];?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">SĐT</label>
                    <input type="text" name="sdt" class="form-control" value="<?=$row['sdt'];?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">TELEGRAM</label>
                    <input type="text" name="telegram" class="form-control" value="<?=$row['telegram'];?>">
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">ID FB</label>
                    <input type="text" name="idfb" class="form-control" value="<?=$row['id_fb'];?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">TIỀN BẢO HIỂM</label>
                    <input type="number" name="money" class="form-control" value="<?=$row['money'];?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">MÃ SỐ</label>
                    <input type="number" name="number" class="form-control" value="<?=$row['number'];?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">WEBSITE</label>
                    <input type="text" name="website" class="form-control" value="<?=$row['website'];?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">NGÂN HÀNG</label>
                    <input type="text" name="nganhang" class="form-control" value="<?=$row['ngan_hang'];?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">DỊCH VỤ CUNG CẤP</label>
                    <input type="text" name="dichvucungcap" class="form-control" value="<?=$row['dichvucungcap'];?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">LỆ PHÍ TRUNG GIAN</label>
                    <input type="text" name="trunggian" class="form-control" value="<?=$row['trunggian'];?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">MÔ TẢ</label>
                    <input type="text" name="mota" class="form-control" value="<?=$row['mota'];?>">
                  </div>
                  
                   <div class="form-group">
              <label for="exampleInputEmail1">THỂ LOẠI</label>
              <select class="custom-select"  name="loai" >
                  <?php
                  $result = mysqli_query($ketnoi,"SELECT * FROM `category` ");
                  while ($row1 = mysqli_fetch_array($result) ) { ?>
                  <option value="<?=$row1['code'];?>"><?=$row1['code'];?></option>
                  <?php } ?>
                  </select>
            </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="btn_submit" class="btn btn-primary">Lưu</button>
                </div>
              </form>
            </div>
</section>

</div>
<?php }?>


<?php include('foot.php');?>