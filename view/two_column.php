<?php
    $query_post_dao_tao_dai_han = mysqli_query($con,"select * from tblposts where tblposts.CategoryId  = 10 order by tblposts.id DESC LIMIT 4" );
	$query_post_boi_duong_ngan_han = mysqli_query($con,"select * from tblposts where tblposts.CategoryId  = 19 order by tblposts.id DESC LIMIT 4");
?>


<div class="two_column" style="margin-bottom : 100px"  >
	<div class="column column-left ">
		<div class="elementor-text" style='margin-bottom:10px;'>
		<h1>

			<a href="../controller/index.php?quanly=danhmuctintuc&id=10" style = " text-decoration: none" class ="title">	
				Tuyển sinh dài hạn
			</a>	
		</h1>
		</div>
	<?php 
		while ($row=mysqli_fetch_array($query_post_dao_tao_dai_han)) {?>
			<div>
				<h5><a style="color: black;" href="">
				<?=$row['PostTitle']?>
				</a> </h5>
				<h6>
				<?=$row['PostingDate']?>
				</h6>
			</div>
	<?php } ?>
	<a href="../controller/index.php?quanly=danhmuctintuc&id=10" style = " text-decoration: none">	
	Xem tất cả
	</a>
	</div>
	<div class="column column-right">
		<div class="elementor-text "  style='margin-bottom:10px'>
		<a href="../controller/index.php?quanly=danhmuctintuc&id=19" style = " text-decoration: none; " class = "title">
		Tuyển sinh ngắn hạn
			</a> 
		</div>
		<?php 
		while ($row2=mysqli_fetch_array($query_post_boi_duong_ngan_han)) {?>
			<div>
				<h5><a style="color: black;" href="">
				<?=$row2['PostTitle']?>
				</a> </h5>
				<h6>
				<?=$row2['PostingDate']?>
				</h6>
			</div>
	<?php } ?>
	<a href="../controller/index.php?quanly=danhmuctintuc&id=19" style = " text-decoration: none">	
	Xem tất cả
	</a>
	</div>
</div>


<style>
	.two_column{
		height:357px;
	}
	*{
		box-sizing: border-box;
	}
	.column{
		height: 350px;
		padding: 15px;
		float: left;
	}
	.column-left{
		width: 50%;
		/* background-color: #fff; */
		border-right: solid;
		
	}
	.column-right{
		width: 50%;
		padding-top: 20px;
		/* background-color: #fff; */
	}
	h5{
		/* padding-top:10px; */
		font-size: 18px;
		text-align: left;
		font-weight: 100;
	}
	h6{
		font-size: 18px;
		text-align: left;
		font-weight: 100;
	}
	a{
		text-decoration: none !important;
		
		margin-top: 10px ;
	}
	a:link {
  		/* color: red; */
	}

/* visited link */


/* mouse over link */
	a:hover {
  		color: hotpink;
	}
	a:active {
  			color: blue;
}	
	.elementor-text:hover{
		color:	#F29A00;
		/* text-decoration: underline; */
	}
	.title
	{
	color: #047DCE  !important;
	text-decoration: none;
	font-family: "Roboto", Roboto;
    font-size: 24px;
    font-weight: 800;
    letter-spacing: 1.5px;
    word-spacing: 5px;
    fill: #047DCE;
    color: #047DCE;
    background-color: #00000000;
    border-style: double;
    border-width: 3px 0px 3px 0px;
    border-color: var(--e-global-color-secondary );
    border-radius: 20px 20px 20px 20px;
	}
</style>