<?php require_once ('include/head.php'); ?>
<title> <?=$site_mota;?>
 </title>
<?php require_once ('include/nav.php');
//MSV.VN - VSVN.VN
$don = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'scam' ")) ['COUNT(*)'];
?>
<div id="main" class="main">
    <div class="section-gap section-intro">
        <div class="container">
            <div class="row">
                <div class="col-12">
        <div class="section-heading">
            <div class="title">
                KIỂM TRA UY TÍN &amp; TỐ CÁO SCAMMER
            </div>
            <div class="line"></div>
            <div class="desc">
                <p>Kiểm Tra&nbsp;<strong>" SĐT, STK Ngân Hàng , Tên ... "</strong>&nbsp;Trước Khi Giao Dịch Bằng Cách Nhập Thông Tin Vào&nbsp;<strong>" Thanh Tìm Kiếm "</strong> Bên Dưới<br />
Với Hơn&nbsp;<strong>10.000 Dữ Liệu Về Các Thông Tin Lừa Đảo Trên Khắp MXH </strong>, Sẽ Giúp Bạn Giao Dịch Online Trở Nên An Toàn Hơn</p>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <form method="GET" action="/search">
                    <div class="form-group position-relative">
                        <input type="text" class="form-control" name="m"
                               placeholder="Nhập SĐT Hoặc Tên Hay STK Ngân Hàng Để Kiểm Tra ">
                        <button type="submit">
                            <i class="far fa-search"></i>
                        </button>
                    </div>
                    <a href="/service/denounce" class="btn-theme btn-theme_primary" style="color: white">
                        <b>Gửi Tố Cáo Scam</b>
                        <span></span>
                    </a>
                    <a href="/service/reputation" class="btn-theme btn-theme_success" style="color: white">
                       <b>Check Quỹ Bảo Hiểm</b>
                        <span></span>
                    </a>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="intro-image">
                    <img src="https://i.imgur.com/j21VfDj.png" class="w-100 img-fluid h-auto" alt="">
                </div>
            </div>
        </div>
    </div>
                <div class="col-12">
                    <div class="section-heading">
                    <div class="title"><br>
                          </div>
                        </div>
                    <div class="scam-list">
<?php
//MSV.VN - VSVN.VN
$i = 1;
$result = mysqli_query($ketnoi, "SELECT * FROM `ticket` WHERE `status` = 'scam' ORDER BY id desc limit 0, 10");
while ($row = mysqli_fetch_assoc($result))
{ ?>
                      <div class="scam-item d-flex align-items-center py-3 px-4 border bg-white" style="border-radius: 17px; margin-bottom: 9px">
                            <div class="scam-title">
                                <span class="scam-title_icon">
                                    <i class="fas fa-user-alt" style="color: red"></i>
                                </span>
                                <a href="/scamer/<?=$row['code']; ?>" class="scam-title_link" style="color: black">
                                    ㅤ <?=$row['username']; ?>
                                </a>
                            </div>
                            <div class="scam-info ml-auto">
                                <span class="scam-info_time">
                                    <i class="fas fa-clock" style="color: blue"></i>
                                    <?=$row['ngay']; ?></span>
                                    <span class="scam-info_time">
                                    <i class="fas fa-money-bill-alt" style="color: #F4E06D"></i>
                                    <?=$row['ngan_hang']; ?></span>
                                <span class="scam-info_eye">
                                    <i class="fas fa-eye" style="color: green"></i>
                                    <?=$row['view']; ?>
                                </span>
                            </div>
                        </div>
                        <?php
                        //CODE ĐƯỢC PHÁT HÀNH BỞI LÊ ĐOÀN MINH CHIẾN (NearZeK) | Vui Lòng Mua Mã Nguồn Chính Chủ | Zalo : 0367983792 
} ?>
                                                    
                                                                        </div>
                </div>
            </div>
        </div>
    </div>
        <div class="section-gap section-service">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <div class="title">
                            DỊCH VỤ NỔI BẬT
                        </div>
                        <div class="line"></div>
                        <div class="desc">
                    Hãy Đề Phòng Và Cảnh Giác Mọi Nguy Hiểm Xung Quanh Các Bạn Vì Ai Cũng Có Thể Là Lừa Đảo !
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row row-col-10">
                                                <div class="col-12 col-sm-6 col-lg-3">
                            <div class="service-card">
                                <div class="service-bg_main"></div>
                                <div class="service-bg_before"></div>
                                <div class="service-bg_after"></div>
                                <div class="service-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="service-content">
                                    <a href="/" class="service-content_title">
                                        Kiểm Tra Thông Tin
                                    </a>
                                    <div class="service-content_desc">
                                        Bạn Chỉ Cần Nhập SĐT , STK Ngân Hàng Hoặc Tên Vào Thanh Kiểm Tra Phía Bên Trên Thì Bạn Sẽ Kiểm Tra Được Thông Tin Của Họ Và Tránh Được Các Mối Nguy Hiểm Online 
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="/" class="btn-theme btn-theme_white">
                                        Truy Cập
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                                                    <div class="col-12 col-sm-6 col-lg-3">
                            <div class="service-card">
                                <div class="service-bg_main"></div>
                                <div class="service-bg_before"></div>
                                <div class="service-bg_after"></div>
                                <div class="service-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="service-content">
                                    <a href="service/denounce" class="service-content_title">
                                        Tố Cáo Lừa Đảo
                                    </a>
                                    <div class="service-content_desc">
                                        Khi Bạn Đã Đủ Chứng Cứ , Bằng Chứng Lừa Đảo Của 1 Người Hãy Nhấn Vào Đây Để Tố Cáo Và Nếu Lừa Đảo Giá Trị Lớn Chúng Tôi Sẽ Phối Hợp Với C50 Để Tiến Hành Xử Lý
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="/service/denounce" class="btn-theme btn-theme_white">
                                        Nhấn Vào Đây Để Tố Cáo
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                                                    <div class="col-12 col-sm-6 col-lg-3">
                            <div class="service-card">
                                <div class="service-bg_main"></div>
                                <div class="service-bg_before"></div>
                                <div class="service-bg_after"></div>
                                <div class="service-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="service-content">
                                    <a href="/service/reputation" class="service-content_title">
                                        Kiểm Tra Quỹ Bảo Hiểm
                                    </a>
                                    <div class="service-content_desc">
                                        Hãy Kiểm Tra Quỹ Bảo Hiểm Các Thành Viên Uy Tín Của Chúng Tôi Để Giao Dịch , Bạn Có Thể Tránh Được Những Rủi Ro Xảy Ra Khi Làm Việc Qua Mạng Online
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="service/reputation" class="btn-theme btn-theme_white">
                                        Kiểm Tra Ngay
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                                                    <div class="col-12 col-sm-6 col-lg-3">
                            <div class="service-card">
                                <div class="service-bg_main"></div>
                                <div class="service-bg_before"></div>
                                <div class="service-bg_after"></div>
                                <div class="service-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="service-content">
                                    <a href="https://chongluadao.vn/" class="service-content_title">
                                        Kiểm Tra An Toàn Và Uy Tín Của WEBSITE
                                    </a>
                                    <div class="service-content_desc">
                                    Bạn Tìm Thấy 1 Trang WEBSITE ? Bạn Muốn Giao Dịch Hoặc Đăng Kí Dịch Vụ Trên Đó ? Bạn Muốn KIỂM TRA Xem Nó Có An Toàn Hay Không ?
                                    <p><b>Chúng Tôi Đã Có Giải Pháp</b></p>
                                    </div>
                                </div>
                                <div class="service-action">
                                    <a href="https://chongluadao.vn/" class="btn-theme btn-theme_white">
                                        Kiểm Tra WEBSITE
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                                                </div>
                </div>
            </div>
        </div>
    </div>
            <!--DESIGN AND COPYRIGHT BY MSV.VN - VSVN.VN -->
    <div id="global-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Thông Báo</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <p><p><?=$site['modal']; ?></p></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </div>

            </div>
        </div>
    <?php require_once ('include/foot.php'); ?>
    
