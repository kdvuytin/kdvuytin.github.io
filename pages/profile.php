<?php require_once('../include/head.php'); ?>
<?php require_once('../include/nav.php'); 
if (isset($_GET['code'])) {
    $id = $_GET['code'];
}
$result = mysqli_query($ketnoi,"SELECT * FROM `cards` WHERE `code` = '".$id."' ORDER BY id desc limit 0, 1");
while($row = mysqli_fetch_assoc($result))
{
?>
<title><?=$row['username'];?> | Bảo Hiểm <?=$site['ten_web'];?></title>
<div id="main" class="main">
        <div class="section-gap section-profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="profile-inner">
                        <div class="profile-avatar">
                            <img src="<?=$row['image'];?>" alt="">
                        </div>
                        <div class="profile-title">
                            <?=$row['username'];?> <img src="https://i.imgur.com/Fcupuom.gif" alt="Đã Xác Minh" style="height: 23px;">
                        </div>
                        <div class="profile-buttons">
                            <div class="btn-checkmess">
                                <a href="https://m.me/<?=$row['id_fb'];?>/" class="btn-theme btn-theme_primary" target="_blank">
                                    <i class="fab fa-facebook-messenger"></i>
                                    Check Mess
                                    <span></span>
                                </a>
                                <a href="http://m.me/<?=$row['id_fb'];?>/" class="description-hidden">
                                    <span>Ấn Vào "Check Mess" Để Nhắn Tin Cho GDV Real Tránh Trường Hợp Fake Mất Tiền Oan</span>
                                    <button>
                                        OK
                                    </button>
                                </a>
                                <div class="description-overlay"></div>
                            </div>
                             <a href="https://fb.com/<?=$row['id_fb'];?>/" class="btn-theme btn-theme_primary" target="_blank">
                                <i class="fab fa-facebook"></i>
                                Check Facebook
                                <span></span>
                            </a>
                        </div>
                        <div class="profile-boxs">
                            <div class="row row-col-15">
                                <div class="col-md-6">
                                    <div class="profile-box"style="border: 1.5px solid var(--primary-color);border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
                                        <div class="profile-box_content">
                                            <div class="profile-box_content__title">
                                                Thông tin liên hệ
                                            </div>
                                            <div class="profile-box_content__list">
                                                <p>
                                                    <span>
                                                        <i class="fab fa-facebook"></i>
                                                    </span>
                                                    Check Facebook:
                                                    <a href="https://fb.com/<?=$row['id_fb'];?>" target="_blank">
                                                        <?=$row['id_fb'];?>
                                                    </a>
                                                </p>
                                                <p>
                                                    <span>
                                                        <i class="fas fa-phone"></i>
                                                    </span>
                                                    Check Zalo:
                                                    <a href="https://zalo.me/<?=$row['sdt'];?>/" target="_blank">
                                                        <?=$row['sdt'];?>
                                                    </a>
                                                </p>
                                                <p>
                                                    <span>
                                                        <i class="fab fa-telegram"></i>
                                                    </span>
                                                    Check Telegram:
                                                    <a href="https://t.me/<?=$row['telegram'];?>/" target="_blank">
                                                        <?=$row['telegram'];?>
                                                    </a>
                                                </p>
                                                <p>
                                                    <span>
                                                        <i class="far fa-link"></i>
                                                    </span>
                                                    Website:
                                                    <a href="//<?=$row['website'];?>/">
                                                        <?=$row['website'];?>
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="profile-box_content__image">
                                                <img src="/assets/default/images/info.webp" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="profile-box"style="border: 1.5px solid var(--primary-color);border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
                                        <div class="profile-box_content">
                                            <div class="profile-box_content__title">
                                                Quỹ Bảo Hiểm <?=$site_tenweb;?>
                                            </div>
                                            <div class="profile-box_content__desc">
                                                <p>Khách hàng sẽ được <b><?=$site_tenweb;?> bảo hiểm an toàn giao dịch</b> với số
                                                    tiền trong quỹ bảo hiểm <strong><?=format_cash($row['money']);?> VND</strong> của <strong><?=$row['username'];?></strong></p>
                                            </div>
                                            <div class="profile-box_content__image">
                                                <img src="/assets/default/images/shield.webp" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-boxs">
                            <div class="profile-box profile-box_nopr" style="border: 1.5px solid var(--primary-color);border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
                                <div class="profile-box_content">
                                    <div class="profile-box_content__title">
                                        Tài Khoản Ngân Hàng Của <?=$row['username'];?>:
                                    </div>
                                    <ul class="pl-3 mb-0">
                                            <?php
                                            $atm = $row['ngan_hang'];
                                            $delimiters = array("|");
                                            $atm = str_replace($delimiters, $delimiters[0], $atm);
                                            $arrKeyword= explode($delimiters[0], $atm);
                                            foreach ($arrKeyword as $key)
                                            {
                                               echo '<li>'.$key.'</li>';
                                            }
                                            ?>
                                            
                                    </ul>
</div>
</div>
</div>
<div class="profile-boxs">
    <div class="profile-box profile-box_nopr" style="border: 1.5px solid var(--primary-color);border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
    <div class="profile-box_content">
    <div class="profile-box_content__title">Dịch Vụ Cung Cấp:</div> 
    <ul class="pl-3 mb-0">
                                            <?php
                                            $dvcc = $row['dichvucungcap'];
                                            $delimiters = array("|");
                                            $dvcc = str_replace($delimiters, $delimiters[0], $dvcc);
                                            $arrKeyword= explode($delimiters[0], $dvcc);
                                            foreach ($arrKeyword as $key)
                                            {
                                               echo '<li>'.$key.'</li>';
                                            }
                                            ?>
                                            
                                    </ul>
    </div>
    </div>
    </div>
    <div class="profile-boxs">
    <div class="profile-box profile-box_nopr" style="border: 1.5px solid var(--primary-color);border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
    <div class="profile-box_content">
    <div class="profile-box_content__title">Dịch Vụ Trung Gian:</div>
    <ul class="pl-3 mb-0">
                                            <?php
                                            $tg = $row['trunggian'];
                                            $delimiters = array("|");
                                            $tg = str_replace($delimiters, $delimiters[0], $tg);
                                            $arrKeyword= explode($delimiters[0], $tg);
                                            foreach ($arrKeyword as $key)
                                            {
                                               echo '<li>'.$key.'</li>';
                                            }
                                            ?>
                                            
                                    </ul>
        </div>
        </div>
        </div>
<div class="profile-boxs">
<div class="profile-box profile-box_nopr" style="border: 1.5px solid var(--primary-color);border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
<div class="profile-box_content">
<div class="profile-box_content__title">Mô Tả:</div>
<ul class="pl-3 mb-0">
                                            <?php
                                            $mt = $row['mota'];
                                            $delimiters = array("|");
                                            $mt = str_replace($delimiters, $delimiters[0], $mt);
                                            $arrKeyword= explode($delimiters[0], $mt);
                                            foreach ($arrKeyword as $key)
                                            {
                                               echo '<li>'.$key.'</li>';
                                            }
                                            ?>
                                            
                                    </ul>
</div>
</div>
</div>
<div class="profile-boxs">
<div class="profile-box profile-box_nopr" style="border: 1.5px solid var(--primary-color);border-radius: 10px;-moz-border-radius: 24px;-webkit-border-radius:20px;">
<div class="profile-box_content">
<div class="profile-box_content__title">
Lưu ý:
</div>
<p>Tránh trường hợp Nick Fake, Ảnh Fake, Link Fake, Rửa
                                            Tiền…. Người dùng hãy nhớ Chát đúng Facebook, Gọi đúng SĐT, Chuyển khoản
                                            đúng những STK có ở trong trong link bảo hiểm này ADMINCS1S VIETNAM cam kết bạn sẽ
                                            an toàn trong mọi giao dịch..!!!</p>
</div>
</div>
</div>
</div><br>
<div class="profile-desc">
Mọi Giao Dịch Của Bạn Với <b>"<?=$row['username'];?>"</b> Sẽ Được <b><?=$site_tenweb;?>
                                Bảo Vệ</b> Với Số Tiền Trong <strong>Quỹ Bảo Hiểm <?=format_cash($row['money']);?> VND</strong> Khi Bạn
                            Tuân Theo
                            <a href="/post/dieukhoan.html">Điều Khoản Sử Dụng</a>
                            của <?=$site_tenweb;?>
                        </div>
                        </div>
</div>
</div>
</div>
</div>
<?php require_once('../include/foot.php'); ?>
<?php } ?>