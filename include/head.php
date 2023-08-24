<?php
if (!file_exists($_SERVER['DOCUMENT_ROOT'].'/include/config.php')) {
    header("Location: /install");
}else{
    require 'config.php';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta http-equiv="content-language" content="vi" />
        <meta name="robots" content="index, follow'" />

        <meta name="description" content="Dịch Vụ Uy Tín Được ADMINVIP Đảm Bảo Uy Tín Khi Giao Dịch Dưới Mức Bảo Hiểm" />
        <meta name="keywords" content="Dịch Vụ Uy Tín Được ADMINVIP Đảm Bảo Uy Tín Khi Giao Dịch Dưới Mức Bảo Hiểm" />

        <!-- Open Graph data -->
        <meta property="og:title" content="Dịch Vụ Uy Tín Được ADMINVIP Đảm Bảo Uy Tín Khi Giao Dịch Dưới Mức Bảo Hiểm" />
        <meta property="og:type" content="Website" />
        <meta property="og:url" content="https://<?=$_SERVER['HTTP_HOST']?>" />
        <meta property="og:image" content="https://i.imgur.com/XD3VcSG.png" />
        <meta property="og:description" content="Dịch Vụ Uy Tín Được ADMINVIP.XYZ Đảm Bảo Uy Tín Khi Giao Dịch Dưới Mức Bảo Hiểm" />
        <meta property="og:site_name" content="Dịch Vụ Uy Tín Được ADMINVIP Đảm Bảo Uy Tín Khi Giao Dịch Dưới Mức Bảo Hiểm" />
        <meta property="article:section" content="Dịch Vụ Uy Tín Được ADMINVIP Đảm Bảo Uy Tín Khi Giao Dịch Dưới Mức Bảo Hiểm" />
        <meta property="article:tag" content="Dịch Vụ Uy Tín Được ADMINVIP Đảm Bảo Uy Tín Khi Giao Dịch Dưới Mức Bảo Hiểm" />

        <link rel="icon" href="https://i.imgur.com/Hiy7uBQ.png" />
        <link rel="apple-touch-icon" href="https://i.imgur.com/Hiy7uBQ.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="/assets/default/plugins/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="/assets/default/plugins/swiper/swiper-bundle.min.css" />
        <link rel="stylesheet" href="/assets/default/plugins/select2/css/select2.min.css" />
        <link rel="stylesheet" href="/assets/default/plugins/fancybox/fancybox.min.css" />
        <link rel="stylesheet" href="/assets/default/fonts/fontawesome/css/all.min.css" />
        <link rel="stylesheet" href="/assets/default/css/base.css?<?=time();?>" />
        <link rel="stylesheet" href="/assets/default/css/style.css?<?=time();?>" />
        
        <script type="text/javascript" src="/assets/default/plugins/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/default/plugins/bootstrap/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="/assets/default/plugins/swiper/swiper-bundle.min.js"></script>
        <script type="text/javascript" src="/assets/default/plugins/select2/js/select2.min.js"></script>
        <script type="text/javascript" src="/assets/default/plugins/fancybox/fancybox.min.js"></script>
        <script type="text/javascript" src="/assets/default/plugins/swal/sweetalert2.all.min.js"></script>
        <script type="text/javascript" src="/assets/default/plugins/cookie/cookie.min.js"></script>
        <script type="text/javascript" src="/assets/default/js/app.js?<?=time();?>"></script>
        <script>
            function onloadCallback() {
                grecaptcha.ready(function () {
                    grecaptcha
                        .execute("", {
                            action: "homepage",
                        })
                        .then(function (token) {
                            $(".recaptcha_token").val(token);
                        });
                });
            }
            function HideModal() {
                Cookies.set("Hide", "TRUE", { expires: 1 });
                $("#global-modal").modal("hide");
            }
            $(document).ready(function () {
                if (!Cookies.get("Hide")) {
                    $("#global-modal").modal("show");
                }
                $("#dropfile").click(function (event) {
                    $("#uploadfile").trigger("click");
                });
            });

        </script>

</head>
