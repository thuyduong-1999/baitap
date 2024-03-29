<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Trường Đại Học Nguyễn Tất Thành </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="slick/slick.css" />
	<!-- Add the new slick-theme.css if you want the default styling -->
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
	<script type="text/javascript"></script>
</head>

<body>
	<div class="home">
		<div class="head head-desktop">
			<div class="wrapper row top_head">
				<div class="col-md-3 hotline">
					HOTLINE: <span id="hotline-1">0902.298.300 - 0906.298.300</span>
				</div>
				<div class="col-md-5 ">
					<a class="col" href="">SINH VIÊN</a>
					<a class="col" href="">GIẢNG VIÊN</a>
					<a class="col" href="">ĐÀO TẠO QUỐC TẾ</a>
					<a class="col" href="login.php">ĐĂNG NHẬP</a>
					<a class="col" href="register.php">ĐĂNG KÝ</a>
				</div>
				<div class="col-md-4 input d-flex justify-content-end">
					<form>
						<input type="text" name="" placeholder="Tìm kiếm thông tin ">
						<i class="fa fa-search" aria-hidden="true"></i>
					</form>
					<img src="http://ntt.edu.vn/web/frontend/images/ico-flagen.jpg">
				</div>
			</div>
		</div>
		
		<div class="head-responsive">
			<div class="row">
				<div class="col left">
					<i style="color: white;" id="showMenuRes" class="fa fa-bars c-blue-a5"></i>
				</div>
				<div class="col-10 input">
					<form>
						<input type="text" name="" placeholder="Tìm kiếm thông tin">
						<button>
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
					</form>
				</div>
				<div class="col right">
					<img src="http://ntt.edu.vn/web/frontend/images/ico-flagen.jpg">
				</div>
			</div>
		</div>

		<div class="menu">
			<!-- start responsive -->
			<div class="content-responsive">
				<ul>
					<li><a href="#">HOTLINE: 0902.298.300 - 0906.298.300</a></li>
					<li><a href="#">SINH VIÊN</a></li>
					<li><a href="#">GIẢNG VIÊN</a></li>
					<li><a href="#">ĐÀO TẠO QUỐC TẾ</a></li>
					<li><a href="http://localhost/home/login.php">ĐĂNG NHẬP</a></li>
					<li><a href="http://localhost/home/register.php">ĐĂNG KÝ</a></li>
				</ul>
			</div>
			<!-- end head-responsive -->
			<div class="wrapper">
				<nav class="navbar navbar-expand-lg">
					<img src="http://ntt.edu.vn/web/frontend/images/logo_ntt.png">
					<button style="outline: none;" class="navbar-toggler" type="button">
						<i id="showCollapse2" style="border: 1px solid #d0d0d0;padding: 10px;"
							class="fa fa-bars c-blue-a5"></i>
					</button>
					<div class="collapse navbar-collapse row" id="navbarNav">
						<ul class="navbar-nav ">
							<li class="nav-item col">
								<i class="fa fa-info-circle"></i>
								<a class="nav-link" href="#">Giới thiệu </a>
							</li>
							<li class="nav-item col">
								<i class="fa fa-graduation-cap"></i>
								<a class="nav-link" href="#">Tuyển sinh </a>
							</li>
							<li class="nav-item col">
								<i class="fa fa-book"></i>
								<a class="nav-link" href="#">Đào tạo </a>
							</li>
							<li class="nav-item col">
								<i class="fa fa-bookmark"></i>
								<a class="nav-link" href="#">Nghiên cứu </a>
							</li>
							<li class="nav-item col-3">
								<i class="fas fa-handshake"></i>
								<a class="nav-link" href="#">Hợp tác doanh nghiệp</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>

		<div class="slideshow">
			<div class="wrapper slide-wrapper">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="triangle-wrapper">
						<div class="triangle">
							<a id="showCollapse"><i class="fa fa-bars c-blue-a5"></i></a>
						</div>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="http://ntt.edu.vn/web/upload/images/slider/Chinh-sach-hoc-bong-NTTU_Web-Slider.jpg"
								class="d-block w-100" alt="First slide">
							<div class="title">
								<h3>Chính sách học bổng Trường Đại học Nguyễn Tất Thành năm 2019</h3>
							</div>
						</div>
						<div class="carousel-item">
							<img src="http://ntt.edu.vn/web/upload/images/slider/Lien-thong-NTTU_Web-Slider.jpg"
								class="d-block w-100" alt="Second slide">
							<div class="title">
								<h3>Tuyển sinh liên thông 2019</h3>
							</div>
						</div>
						<div class="carousel-item">
							<img src="http://ntt.edu.vn/web/upload/images/slider/Thac-sy-2019-NTTU_Web-Slider.jpg"
								class="d-block w-100" alt="Third slide">
							<div class="title">
								<h3>Tuyển sinh trình độ Thạc sỹ đợt 1 năm 2019 tại ĐH Nguyễn Tất Thành</h3>
							</div>
						</div>
						<div class="carousel-item">
							<img src="http://ntt.edu.vn/web/upload/images/slider/Vien%20dao%20tao%20quoc%20te%20NTT%202019_NIIE.jpg"
								class="d-block w-100" alt="Fourth slide">
							<div class="title">
								<h3>Viện đào tạo quốc tế NTT (NIIE) - "Cử nhân quốc tế, Cơ hội toàn cầu"</h3>
							</div>
						</div>
						<div class="carousel-item">
							<img src="http://ntt.edu.vn/web/upload/images/slider/BANER-FUTSAL-SINH-VIEN-TP-HCM-2019_NTTU.jpg"
								class="d-block w-100" alt="Fifth second">
							<div class="title">
								<h3>Giải đấu Futsal SV Thành phố Hồ Chí Minh 2019</h3>
							</div>
						</div>
						<div class="carousel-item">
							<img src="http://ntt.edu.vn/web/upload/images/slider/Tham-van-chuyen-gia-NTTU_Web-Slider.jpg"
								class="d-block w-100" alt="Sixth slide">
							<div class="title">
								<h3>Lịch phát sóng Chương trình Tham vấn Chuyên gia</h3>
							</div>
						</div>
					</div>
					<div class="collapse-handmade" id="collapse-handmade">
						<div class="row">
							<div class="col-md-6 col-lg-9 row">
								<div class="col-12 col-md-6 col-lg-4 item">
									<ul>
										<li>
											<h5><a href="">Giới thiệu chung</a></h5>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Giới thiệu chung</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Toàn cảnh ĐH Nguyễn Tất Thành</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Hệ thống Cơ sở vật chất</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Thông tin 3 công khai</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Đảm bảo chất lượng</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Phát triển bền vững</a>
										</li>
									</ul>
								</div>
								<div class="col-12 col-md-6 col-lg-4 item">

									<ul>
										<li>
											<h5><a href="">Tuyển sinh</a> </h5>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Các bậc đào tạo</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Thông tin tuyển sinh</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Chính sách học bổng</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Hướng nghiệp</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Xét tuyển trực tuyến</a>
										</li>
									</ul>
								</div>
								<div class="col-12 col-md-6 col-lg-4 item">
									<ul>
										<li>
											<h5><a href="">Đào tạo</a> </h5>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Khối Khoa học sức khỏe</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Khối Kinh tế - Quản trị</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Khối Kỹ thuật - Công nghệ</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Khối Khoa học xã hội - Nhân văn</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Khối Mỹ thuật - Nghệ thuật</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Khối đào tạo quốc tế</a>
										</li>
									</ul>
								</div>
								<div class="col-12 col-md-6 col-lg-4 item">
									<ul>
										<li>
											<h5><a href="">Hợp tác doanh nghiệp</a> </h5>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Giới thiệu việc làm</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Giới thiệu thực tập</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Câu lạc bộ Doanh nghiệp</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Ban liên lạc Cựu sinh viên</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Liên kết - Hợp tác</a>
										</li>
									</ul>
								</div>
								<div class="col-12 col-md-6 col-md-4 item">
									<ul>
										<li>
											<h5><a href="">Nghiên cứu</a> </h5>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Hoạt động khoa học công nghệ</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Viện - Trung tâm nghiên cứu</a>
										</li>
										<li>
											<i class="fa fa-angle-double-right"></i>
											<a href="">Công bố khoa học</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 sociaty">
								<ul>
									<li><a href=""><i class="fab fa-facebook-square"></i>Facebook</a></li>
									<li><a href=""><i class="fab fa-google-plus-g"></i>Google Plus</a></li>
									<li><a href=""><i class="fab fa-youtube"></i>Youtube</a></li>
									<li><a href=""><i class="fas fa-envelope"></i>E-mail</a></li>
									<li><a href=""><i class="fab fa-youtube"></i>Youtube</a></li>
									<li><a href=""><i class="fa fa-wechat"></i>Zalo</a></li>
									<li><a href=""><i class="fa fa-mortar-board"></i>E-office</a></li>
									<li><a href=""><i class="fa fa-users"></i>Tuyển dụng</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="line-slide">
						<div class="control-button">
							<div class="right">
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button"
									data-slide="prev">							
									<i class="fas fa-angle-left"></i>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button"
									data-slide="next">
									<i class="fas fa-angle-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- end slide -->
			</div>
		</div>

		<div class="tintuc">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-9">
						<h4 class="title">Tin tức </h4>
						<div class="ngang"></div>
						<div class="row content d-flex justify-content-end">
							<div class="col-12 col-md-4">
								<img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201908_TIN/36996677083_a06a2a29fc_o.jpg"
									class="w-100" class="w-100">
								<a class="" href="">Những lý do nên chọn học thạc sĩ tại Trường ĐH Nguyễn Tất Thành</a>
								<p>NTTU - Hiện nay, có rất nhiều trường ĐH được đào tạo thạc sĩ, tiến sĩ… nhu cầu người
									học cũng nhiều nhưng để tìm được một môi trường học tập có chất lượng đào tạo cao,
									đáp ứng được nhu cầu của các học viên</p>
							</div>
							<div class="col-12 col-md-4">
								<img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201909_TIN/13(1).JPG"
									class="w-100" class="w-100">
								<a class="" href="">ĐH Nguyễn Tất Thành phối hợp tổ chức Workshop “Youtube đã làm thay
									đổi</a>
								<p>NTTU – Sáng ngày 19/09/2019, tại cơ sở An Phú Đông, Trường ĐH Nguyễn Tất Thành phối
									hợp cùng Công ty Truyền thông và Giải trí Điền Quân tổ chức chương trình Workshop
									“Youtube đã làm thay đổi cuộc</p>
							</div>
							<div class="col-12 col-md-4">
								<img src="http://ntt.edu.vn/web/upload/images/Khoa-nganh/ketoan-taichinh-thumb.png"
									class="w-100" class="w-100">
								<a class="" href="">ĐH Nguyễn Tất Thành tuyển sinh liên thông các ngành đào tạo</a>
								<p>NTTU - ĐH Nguyễn Tất Thành tuyển sinh liên thông các ngành đào tạo...</p>
							</div>
							<div class="xemthem">
								<div class="" style="text-align:end;">
									<a href="">
										<i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>
										Xem thêm
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="title">Media</h4>
						<div class="ngang"></div>
						<div class="row content">
							<div class="col-12 video">
								<iframe src="https://www.youtube.com/embed/JViDyojZzhs" frameborder="0"
									allowfullscreen></iframe>
								<div class="description">
									<ul>
										<li>
											<a href="#"><i class="fa fa-angle-right"></i>ĐIỂM TIN THÁNG 8</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-angle-right"></i>ĐH Nguyễn Tất Thành – 20 năm
												dấu ấn một chặng đường</a>
										</li>
										<li>
											<a href="#"><i class="fa fa-angle-right"></i>NỎ THẦN - TẬP 8 | BẬT MÍ VỀ NỎ
												THẦN VÀ NHỮNG CÂU CHUYỆN CÓ THẬT</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="xemthem">
							<div class="" style="text-align:end;">
								<a href="">
									<i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>
									Xem thêm
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="reason">
			<div class="wrapper ">
				<div class="wrapper-reason">
					<div class="title">
						<b>TẠI SAO CHỌN ĐẠI HỌC NGUYỄN TẤT THÀNH?</b>
						<div class="d-flex justify-content-center">
							<div class="ngang">
							</div>
						</div>
					</div>
					<div class="content">
						<div class="carousel_wrapper_track">
							<section class="center slider">
								<div class="item">
									<img src="http://ntt.edu.vn/web/upload/images/hp_nguoithay-01.svg">
									<div class="main">
										<h5>Chuẩn 3 sao QS-Starts</h5>
										<p>Xếp hạng quốc tế 3 sao theo chuẩn QS-Stars, một trong các chuẩn xếp hạng hàng
											đầu
											dành cho các trường đại học trên thế giới. </p>
									</div>
								</div>
								<div class="item">
									<img src="http://ntt.edu.vn/web/upload/images/hp_xhoi-01.svg">
									<div class="main">
										<h5>Đạt chuẩn chất lượng quốc gia</h5>
										<p>Là trường đại học ngoài công lập đầu tiên tại TP.HCM được kiểm định đạt chất
											lượng theo bộ tiêu chí quốc gia do Bộ GD&ĐT ban hành.</p>
									</div>
								</div>
								<div class="item">
									<img src="http://ntt.edu.vn/web/upload/images/hp_nhatruong-01.svg">
									<div class="main">
										<h5>Đại học hạnh phúc</h5>
										<p>Đại học Nguyễn Tất Thành là ngôi trường tri thức và hạnh phúc dành cho sinh
											viên
											với 5 giá trị nổi bật</p>
									</div>
								</div>
								<div class="item">
									<img src="http://ntt.edu.vn/web/upload/images/hp_sinhvien-01.svg">
									<div class="main">
										<h5>Top 10 thương hiệu nổi tiếng</h5>
										<p>Trong những năm qua, Trường ĐH Nguyễn Tất Thành đã không ngừng đổi mới công
											tác
											quản trị đại học, nâng cao chất lượng đào tạo, nghiên cứu khoa học, công tác
											hợp
											tác quốc tế, công tác sinh viên.</p>
									</div>
								</div>
								<div class="item">
									<img src="http://ntt.edu.vn/web/upload/images/hp_doanhnghiep-01.svg">
									<div class="main">
										<h5>95% sinh viên tốt nghiệp có việc làm</h5>
										<p>Định vị là trường ứng dụng và thực hành hướng tới mục tiêu đáp ứng nhu cầu
											giáo
											dục đại học đại chúng, trí thức hóa nguồn nhân lực, tạo môi trường học tập
											tích
											cực và trải nghiệm thực tiễn cho sinh viên</p>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="tintuc cooperate">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-4">
						<h4 class="title">Hợp tác quốc tế</h4>
						<div class="ngang"></div>
						<div class="row content">
							<div class="col-12">
								<img src="http://ntt.edu.vn/web/upload/images/Tin_Tuc/201909_TIN/DSC04631.JPG"
									class="w-100" style="height:170px;">
								<a class="" href="">Khoa Công nghệ Sinh học ĐH Nguyễn Tất Thành làm việc với ĐH
									Hiroshima</a>
								<p>NTTU - Sáng ngày 17/09/2019, khoa Công nghệ Sinh học Trường ĐH Nguyễn Tất Thành đã có
									buổi
									làm việc với ĐH Hiroshima (Nhật Bản)</p>
								<div class="xemthem">
									<a href="">
										<i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>
										Xem thêm
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<h4 class="title">Môi trường học tập</h4>
						<div class="ngang"></div>
						<div class="row content">
							<div class="col-md-12">
								<img src="http://ntt.edu.vn/web/upload/images/3e3.JPG" class="w-100"
									style="height:170px; width: 95%;">
								<a class="" href="">Tìm hiểu về các câu lạc bộ tại Trường ĐH Nguyễn Tất Thành</a>
								<p>NTTU - Những năm gần đây, bên cạnh việc nâng cao chất lượng đào tạo, Trường ĐH Nguyễn
									Tất
									Thành không ngừng phát triển mô hình câu lạc bộ sinh viên</p>
								<div class="xemthem">
									<a href="">
										<i class="fa fa-chevron-circle-right mr-2 c-blue-a5"></i>
										Xem thêm
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<h4 class="title">Sự kiện nổi bật</h4>
						<div class="ngang"></div>
						<div class="row content">
							<div class="col-md-12 noibat">
								<div class="row item_noibat">
									<div class="col-3 col-md-3 day">
										<span>Sep</span>
										<b>25</b>
									</div>
									<div class="col-9 col-md-9">
										<a href="#">Đại hội đại biểu Đoàn TNCS Hồ CHí Minh - Trường ĐH Nguyễn Tất Thành
											lần
											VII, nhiệm kỳ 2019 - 2022</a>
										<ul>
											<li class="line-1">
												<i class="fas fa-clock"></i>
												07:30
											</li>
											<li class="line-2">
												Hội trường A.801, 300A Nguyễn Tất Thành, phường 13, quận 4, TP. HCM
											</li>
										</ul>
									</div>
								</div>
								<div class="row item_noibat">
									<div class="col-3 col-md-3 day">
										<span>Sep</span>
										<b>22</b>
									</div>
									<div class="col-9 col-md-9">
										<a href="#">Chuyên đề tốt nghiệp lớp Việt Nam học - Khoa Du lịch và Việt Nam
											học</a>
										<ul>
											<li class="line-1">
												<i class="fas fa-clock"></i>
												07:00
											</li>
											<li class="line-2">
												Sân bóng - cơ sở quận 7, 458/3F Nguyễn Hữu Thọ, phường Tân Hưng, quận 7
											</li>
										</ul>
									</div>
								</div>
								<div class="row item_noibat">
									<div class="col-3 col-md-3 day">
										<span>Sep</span>
										<b>19</b>
									</div>
									<div class="col-9 col-md-9">
										<a href="#">Workshop, Chủ đề: "Youtube đã thay đổi cuộc sống của tôi như thế
											nào''</a>
										<ul>
											<li class="line-1">
												<i class="fas fa-clock"></i>
												07:30
											</li>
											<li class="line-2">
												Hội trường L.HT1, 331 QL1A, phường An Phú Đông, quận 12
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="contact">
			<div class="wrapper">
				<div class="row ">
					<div class="col-md-6 col-lg-3">
						<h4><a href="">ĐH NGUYỄN TẤT THÀNH</a></h4>
						<ul>
							<li><a href="">Thư ngỏ</a></li>
							<li><a href="">Tầm nhìn - Sứ mạng</a></li>
							<li><a href="">Văn hóa ĐH Nguyễn Tất Thành</a></li>
							<li><a href="">Thông tin 3 công khai</a></li>
							<li><a href="">Đảm bảo chất lượng</a></li>
							<li><a href="">Phát triển bền vững</a></li>
							<li><a href="">Trường Trung cấp Nguyễn Tất Thành</a></li>
							<li><a href="">Trường Tiểu học Anh Việt Mỹ</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-lg-3 cot-2">
						<h4><a href="">PHÒNG - BAN</a></h4>
						<h4><a href="">THƯ VIỆN ẢNH</a></h4>
						<h4><a href="">E-LEARNING</a></h4>
					</div>
					<div class="col-md-6 col-lg-3">
						<h4><a href="">TRUNG TÂM - VIỆN</a></h4>
						<ul>
							<li><a href="">Viện Đào Tạo Quốc Tế</a></li>
							<li><a href="">Viện Công Nghệ Cao</a></li>
							<li><a href="">Viện Đào tạo Sau đại học</a></li>
							<li><a href="">Trung tâm Thông tin Thư viện</a></li>
							<li><a href="">TT Ngoại Ngữ</a></li>
							<li><a href="">TT Tin Học NTT</a></li>
							<li><a href="">TT QH Doanh Nghiệp & Khởi nghiệp</a></li>
							<li><a href="">TT Đào tạo theo nhu cầu XH</a></li>
							<li><a href="">TT Xuất khẩu lao động Texgamex</a></li>
							<li><a href="">Công đoàn Trường ĐH Nguyễn Tất Thành</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-lg-3 sociaty">
						<ul>
							<li><a href=""><i class="fab fa-facebook-square"></i>Facebook</a></li>
							<li><a href=""><i class="fab fa-google-plus-g"></i>Google Plus</a></li>
							<li><a href=""><i class="fab fa-youtube"></i>Youtube</a></li>
							<li><a href=""><i class="fas fa-envelope"></i>E-mail</a></li>
							<li><a href=""><i class="fab fa-youtube"></i>Youtube</a></li>
							<li><a href=""><i class="fa fa-wechat"></i>Zalo</a></li>
							<li><a href=""><i class="fa fa-mortar-board"></i>E-office</a></li>
							<li><a href=""><i class="fa fa-users"></i>Tuyển dụng</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="wrapper">
				<div class="row">
					<div class="col-md-7">
						<h4>THÔNG TIN LIÊN HỆ</h4>
						<p>Trụ sở chính: <b>300A – Nguyễn Tất Thành, Phường 13, Quận 4, TP. Hồ Chí Minh, Việt Nam</b></p>
						<p>Điện thoại: <b>1900 2039 </b>Fax:<b> 028 39 404 759</b></p>
						<p>Hotline: <b>0902 298 300 – 0906 298 300 – 0912 298 300 – 0914 298 300</b></p>
						<p>Email: <b>tttvtsinh@ntt.edu.vn – bangiamhieu@ntt.edu.vn</b></p>
					</div>
					<div class="col-md-5">
						<p>©2017. Bản quyền thuộc về trường <b>Đại học Nguyễn Tất Thành</b></p>
					</div>
				</div>
			</div>
		</div>
		<div class="wrapper_chatbox">
			<div class="chatbox">
				<button href="#">Hãy để lại lời nhắn</button>
			</div>
			<div class="content_chatbox">
				<div class="top">
					<div class="d-flex row">
						<div class="col-8 d-flex justify-content-start">
							<p>Hãy để lại lời nhắn</p>
						</div>
						<div class="col-4 d-flex justify-content-end">
							<i id="close" class="fas fa-times-circle"></i>
						</div>
					</div>
					<div>Bạn vui lòng điền vào biểu mẫu dưới đây và chúng tôi sẽ liên hệ lại với bạn ngay khi có thể.
					</div>
				</div>
				<div class="main">
					<input type="text" placeholder="*Tên" name="">
					<input type="text" placeholder="*E-mail" name="">
					<input type="text" placeholder="Điện thoại" name="">
					<input type="text" placeholder="Ngày sinh" name="">
					<textarea placeholder="*lời nhắn"></textarea>
					<input type="submit" value="Hoàn tất" name="">
					<div class="tiny">
						We're <img src="https://cdn.jsdelivr.net/emojione/assets/png/26a1.png?v=2.2.7"> by tawk.to
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
		(function () {
			var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
			s1.async = true;
			s1.src = 'https://embed.tawk.to/5cc12161ee912b07bec4bce7/default';
			s1.charset = 'UTF-8';
			s1.setAttribute('crossorigin', '*');
			s0.parentNode.insertBefore(s1, s0);
		})();
	</script>
	<!--End of Tawk.to Script-->
</body>

<script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script type="text/javascript">
	$(document).ready(function () {
		$('#showCollapse').click(function () {
			// $(".collapse-handmade").css("display",'block');
			$(".collapse-handmade").slideToggle("slow");
		});
		$('#showCollapse2').click(function () {
			// $(".collapse-handmade").css("display",'block');
			$(".collapse-handmade").slideToggle("slow");
		});

		$('.content_chatbox').hide();
		$('.chatbox').click(function () {
			$('.content_chatbox').show();
			$(this).hide();
		});
		$('#close').click(function () {
			$('.content_chatbox').hide();
			$('.chatbox').show();
		});

		count = 0;
		wordsArray = ["0902.298.300 - 0906.298.300", "0912.298.300  - 0914.298.300"];
		setInterval(function () {
			count++;
			$("#hotline-1").slideUp(600, function () {
				// odd % 2 == 1
				$(this).text(wordsArray[count % wordsArray.length]).slideDown(200);
				console.log('wordsArray ' + count % wordsArray.length + ' count ' + count + ' length ' + wordsArray.length);
			});
		}, 3000);

		setInterval(function () {
			count++;
			$("#hotline-2").slideUp(600, function () {
				// odd % 2 == 1
				$(this).text(wordsArray[count % wordsArray.length]).slideDown(200);
				console.log('wordsArray ' + count % wordsArray.length + ' count ' + count + ' length ' + wordsArray.length);
			});
		}, 3000);

		$('.content-responsive').hide();
		$('#showMenuRes').click(function () {
			$('.content-responsive').slideToggle();
		});
		$(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			dots: false,
			responsive: [
				{
					breakpoint: 900,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
					}
				}]
		});
	});
</script>

</html>