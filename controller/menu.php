<?php
$query_category=mysqli_query($con,"select * from tblcategory where is_menu = 1");
?>

<div class = "header1">
        <div class="menu-wrapper menu-gold">
  <ul class="menu">
    <li><a href="index.php"> TRANG CHỦ</a></li>
    <?php
      while ($row_category = mysqli_fetch_array($query_category)){
    ?>
    <li><a href="../controller/index.php?quanly=danhmuctintuc&id=<?php echo $row_category['id']?>"><?php echo $row_category['CategoryName']?></a>
    <?php
      $query_subcategory=mysqli_query($con,"select * from tblsubcategory where tblsubcategory.CategoryId  =  $row_category[id]");
    ?>    
    <ul>
    <?php
       while ($row_subcategory = mysqli_fetch_array($query_subcategory)){
    ?>
      <li><a href="../controller/index.php?quanly=danhmuctintuccon&id=<?php echo $row_subcategory['SubCategoryId']?>"><?php  echo $row_subcategory['Subcategory']?></a>
    <?php
      }
    ?>
    </ul>
        
  </li>
    <?php
      }
    ?>
    <li><a href="../controller/index.php?quanly=dangky"> ĐĂNG KÝ</a></li>
  </ul>
</div>
      </div>

      <style>
/* menu */

.header1{
  padding-top: 10px;
  background-color: #f0f0f0;
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