<?php
	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc); 		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
      </li>

	  <?php 
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				?>
				<li class="nav-item" ><a class="nav-link" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
				<?php
				} 
				?>
      
			<li class="nav-item"><a class="nav-link" href="index.php?quanly=giohang">Giỏ hàng</a></li>
		
      <li class="nav-item">
        <a class="nav-link" href="index.php?quanly=tintuc">Tin tức</a>
      </li>

	    <li class="nav-item">
        <a class="nav-link" href="index.php?quanly=lienhe">Liên hệ</a>
      </li>

	  	<?php
				if(isset($_SESSION['dangky'])){ 

			?>
			<li class="nav-item"><a class="nav-link" href="index.php?dangxuat=1">Đăng xuất</a></li>
			<li class="nav-item"><a class="nav-link" href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
			<?php
			}else{ 
			?>
			<li class="nav-item"><a class="nav-link" href="index.php?quanly=dangky">Đăng ký</a></li>
			<?php
				} 
			?>

    </ul>
    <form class="form-inline my-2 my-lg-0" action="index.php?quanly=timkiem" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name='tukhoa'>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name='timkiem'>Search</button>
    </form>
  </div>
</nav>