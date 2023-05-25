<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header id="masthead" style="padding-top: 20px" class="site-header affix-top bg-custom-sticky header_default header_v2 item_menu_active_top ">
  <!-- <div class="main-menu"> -->
  <div class="thim-nav-wrapper ">
    <div class="row">
      <div class="navigation col-sm-12">
        <div class="tm-table">
          <div class="width-logo table-cell sm-logo">
            <a href="index.php" title=" - " rel="home" class="thim-logo" >
              <img style="width  :100px; height :auto;" src="https://khaitriag.edu.vn/wp-content/uploads/2021/11/LOGO-1.png" alt="" data-retina="https://khaitriag.edu.vn/wp-content/uploads/2021/11/LOGO-1.png">
            </a>
                <img loading="lazy" width="1005" height="65" src="https://khaitriag.edu.vn/wp-content/uploads/2022/06/TextLogo_nho-1-1024x65.png" alt="" class="wp-image-15649" srcset="https://khaitriag.edu.vn/wp-content/uploads/2022/06/TextLogo_nho-1-1024x65.png 1024w, https://khaitriag.edu.vn/wp-content/uploads/2022/06/TextLogo_nho-1-300x19.png 300w, https://khaitriag.edu.vn/wp-content/uploads/2022/06/TextLogo_nho-1-768x49.png 768w, https://khaitriag.edu.vn/wp-content/uploads/2022/06/TextLogo_nho-1-1536x98.png 1536w, https://khaitriag.edu.vn/wp-content/uploads/2022/06/TextLogo_nho-1-2048x131.png 2048w" sizes="(max-width: 1024px) 100vw, 1024px">
              </div>
          </div>
        <div class = "header1">
        <div class="menu-wrapper menu-gold">
  <ul class="menu">
    <li><a href="index.php"> TRANG CHỦ</a></li>
    <li><a href=""> TUYỂN  SINH 2023</a></li>
    <li><a href=""> TIN TỨC ĐÀO TẠO </a></li>
    <li>
      <a href=""> TÀI NGUYÊN - VIỆC LÀM</a>
      <ul>
        <li><a href=""> MÔ TẢ KHÓA HỌC</a></li>
        <li><a href=""> HƯỚNG DẪN</a></li>
        <li><a href=""> KẾ TOÁN - THUẾ </a></li>
        <li><a href=""> CÔNG NGHỆ THÔNG TIN </a></li>
        <li><a href=""> DU LỊCH - XKLD </a></li>
      </ul>
    </li>
    <li><a href=""> DU LỊCH - XKLD</a></li>
    <li><a href=""> ĐĂNG KÝ</a></li>
  </ul>
</div>
      </div>
      </div>
    </div>
  </div>
</header>

<style>
/* menu */

.header1{
  padding-top: 10px;
}

.menu-wrapper, .menu a{
  width: 100%;
}

.menu::after{
  content: '';
  clear: both;
  display: block;
}

.menu a{
  display: block;
  padding: 10px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  text-decoration: none;
  font-size: 20px;
  color: white
}

.menu li{
  position: relative;
}

.menu > li{
  float: left;
}

.menu, .menu ul{
  display: inline-block;
  padding: 7px;
  margin: 5px;
  list-style-type: none;
  background: #0099FF;
}

.menu ul li+li{
  border-top: 1px solid #fff;
}

.menu ul{
  position: absolute;
  box-shadow:  5px 5px 10px 0 rgba(0,0,0, 0.5);
}

.menu > li ul, .menu ul ul{
  opacity: 0;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  z-index: -1;
  visibility: hidden;
}

.menu > li ul{
  top: 130%;
  left: 0;
}

.menu ul ul{
  left: 130%;
  top: 0;
}

.menu ul a{
  width: 250px;
}

.menu > li:hover > ul{
  top: 100%;
  opacity: 1;
  z-index: 1;
  visibility: visible;
}

.menu ul > li:hover > ul{
  left: 100%;
  opacity: 1;
  z-index: 1;
  visibility: visible;
}

.menu-gold, .menu-gold a{
  color: #000;
}
.menu-gold a:hover{
  background-color: #e6c300;
  color: #000;
}

body{
  background-image: url("http://recruit.framgia.vn/wp-content/themes/framgia-vn/css/images/bg/banner.jpg");
  text-align: center;
}

/* ends */

</style>