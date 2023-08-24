<body>
   <header class="header bg-white position-relative z-index-10" id="header">
      <div class="header-main">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3">
                  <div class="header-bar d-flex align-items-center">
                     <div class="header-hamburger d-block d-lg-none">
                        <button type="button" class="no-animation" id="header-hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        </button>
                     </div>
                     <div class="header-logo">
                        <a href="/">
                        <img src="<?=$site_logo;?>" alt="CHECKSSCAMS VIETNAM" style="height:50px">
                        </a>
                     </div>
                     <div class="header-button d-lg-none ml-auto d-flex align-items-center justify-content-end">
                        <div class="header-button_items position-relative">
                           <button type="button"
                              class="btn-theme btn-theme_gray btn-collapse_search btn-call_search">
                           <i class="far fa-search"></i>
                           </button>
                           <div class="header-search">
                              <form method="GET" action="/search">
                                 <div class="form-group position-relative">
                                    <input type="text" class="form-control" name="query"
                                       placeholder="Nhập số điện thoại, số tài khoản ngân hàng ...">
                                    <button type="submit">
                                    <i class="far fa-search"></i>
                                    </button>
                                 </div>
                              </form>
                           </div>
                        </div>
                        <div class="header-button_items position-relative">
                           <a href="service/denounce" role="button" class="btn-theme btn-theme_primary">
                              <div class="d-block d-sm-none">
                                 <i class="fas fa-exclamation"></i>
                              </div>
                              <div class="d-sm-block d-none">
                                 Tố cáo lừa đảo
                              </div>
                              <span></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div id="header-navigation" class="header-navigation d-lg-flex align-items-center justify-content-end">
                     <ul>
                        <li class="d-block d-lg-none header-navigation_logo">
                           <a href="/">
                           <img src="<?=$site_logo;?>" alt="" style="height:50px">
                           </a>
                           <button type="button" class="header-navigation_close" id="header-navigation_close"><i
                              class="far fa-times"></i></button>
                        </li>
                        <li>
                           <a  href="/service/introduce" >
                           GIỚI THIỆU
                           </a>
                        </li>
                        <li>
                           <a  href="/service/rules" >
                           ĐIỀU KHOẢN
                           </a>
                           <li>
                           <a  href="https://Subvip20k.click/" >
                           DỊCH VỤ MXH
                           </a>
                        </li>
                        <li>
                           <a  href="/service/reputation" >
                           QUỸ BẢO HIỂM ADMIN
                           </a>
                        </li>
                        <li>
                           <a  href="/service/denounce" >
                           TỐ CÁO LỪA ĐẢO
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="header-button d-none d-lg-flex align-items-center justify-content-end">
                     <div class="header-button_items position-relative">
                        <button type="button" class="btn-theme btn-theme_gray btn-collapse_search btn-call_search">
                        <i class="far fa-search"></i>
                        </button>
                        <div class="header-search">
                           <form method="GET" action="/search">
                              <div class="form-group position-relative">
                                 <input type="text" class="form-control" name="query"
                                    placeholder="Nhập số điện thoại, số tài khoản ngân hàng ...">
                                 <button type="submit">
                                 <i class="far fa-search"></i>
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="header-button_items position-relative">
                        <a href="/service/denounce" role="button" class="btn-theme btn-theme_primary">
                        TỐ CÁO LỪA ĐẢO
                        <span></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="header-overlay" id="header-overlay"></div>
   </header>
   