
<head></head>
<div class="container">
      <div class="row" style="margin-top: 4%">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <!-- Blog Post -->


<?php


if (isset($_GET['id']))
{
  $id_category = $_GET['id'];
}
if (isset($_GET['pageno'])) {
  $current_page = $_GET['pageno'];
} else {
  $current_page = 1;
}
if (isset($_GET['per_page'])) {
  $item_per_page = $_GET['per_page'];
} else {
  $item_per_page =4;  
} 

$offset = ($current_page-1) * $item_per_page;
$total_pages_sql = "SELECT COUNT(*) FROM tblposts where CategoryId = '$id_category' ";
$result = mysqli_query($con,$total_pages_sql);
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active= 1 and tblposts.SubCategoryId  = '$id_category' order by tblposts.id asc LIMIT $offset, $item_per_page");
$total_rows = mysqli_fetch_array($result)[0];

$total_pages = ceil($total_rows / $item_per_page);
$query_category=mysqli_query($con,"select  Subcategory from tblsubcategory where SubCategoryId = '$id_category'");
$row_category = mysqli_fetch_array($query_category);

// $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 and tblcategory.id = tblposts.CategoryId and tblposts.CategoryId = $_GET[id] ORDER BY tblposts.id ASC LIMIT $offset, $no_of_records_per_page");
?>
<div class="page-title-wrapper " style = "background-color:black;">
<div class="banner-wrapper ">
          <h1>
    <?php	   echo $row_category['Subcategory'];
          ?>									
          </h1>
      </div>
</div>

<?php
while ($row=mysqli_fetch_array($query)) {
?>

           <div class="card mb-4">
           <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
            <img class="card-img-top" src="../admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
           </a>
            <div class="card-body">
            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
          </a>
                 <p><!--category-->
 <a class="badge bg-secondary text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['cid'])?>" style="color:#fff"><?php echo htmlentities($row['category']);?></a>
<!--Subcategory--->
  <a class="badge bg-secondary text-decoration-none link-light"  style="color:#fff"><?php echo htmlentities($row['subcategory']);?></a></p>
       
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
            </div>
          </div>
          
          <?php } ?>
          <?php
           include('../controller/pagination.php');
           ?>
      
        </div>

        <?php include('../view/sidebar.php');?>
      </div>
      <!-- /.row -->
    
    
    </div>

<style>
  
 .page-title-wrapper {
    padding-top: 90px;
    padding-bottom: 90px;
    text-align: left;
    position: relative;
    /* z-index: 1; */
}

 .page-title-wrapper h1 {
    line-height: 54px;
    text-transform: uppercase;
    font-size: 48px;
    font-weight: 700;
    padding-left: 25px;
    position: relative;
}

 .page-title-wrapper h1 {
    color: white;
    margin: 0;
    font-family: "Roboto Slab";
}
.card-container {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* Hai cột có chiều rộng bằng nhau */
  grid-gap: 10px; /* Khoảng cách giữa các card */
}

.card {
  border: 1px solid #ccc;
  padding: 10px;
}

.card img {
  width: 100%;
  height: auto;
}

.card-content {
  margin-top: 10px;
}

/* Điều chỉnh kiểu dáng theo ý thích */
h3 {
  font-size: 18px;
  margin-bottom: 5px;
}

p {
  font-size: 14px;
}


</style>