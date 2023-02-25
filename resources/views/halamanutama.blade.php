<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
{{-- head --}}
<head>
    <title>KSGB</title>
    @include('TamplateDepan.Tamplate.head')
</head>
{{-- /head --}}
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wthree-different-dot">
			<div class="w3layouts-header-top">
				<div class="container">
					<div class="w3-header-top-grids">
						<div class="w3-header-top-left">
							<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +62896130883</p>
						</div>
						<div class="w3-header-top-right">
							<div class="agileinfo-social-grids">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									<li><a href="#"><i class="fa fa-vk"></i></a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="head">
				<div class="container">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								
							  </button>	
								
								 <div class="navbar-brand logo ">
									<h1><a href="halamanutama"><img src="TamplateDepan/Tamplate/images/logo-ksgb.jpg" width="100"alt="" srcset=""></span></a></h1>
									
								</div>
							</div>
							
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
							<li class="active first-list"><a href="halamanutama">Home</a></li>
								
								{{-- <li><a href="daftarevent" class="scroll">Daftar Event</a></li> --}}
								<li><a href="registrasi" >Registrasi</a></li>
								<li><a href="#about" class="scroll">Tentang kami</a></li>
								
							</div>
							<!-- /.navbar-collapse -->
						</div>
				</div>
			</div>
			<div class="w3layouts-banner-slider">
				<div class="container">
					<div class="w3-agile-info">
						<div class="agileits-banner">
							<h3><span>M</span></h3>
							<h3><span>T</span></h3>
							<h3><span>B</span></h3>
						</div>
						
						<div class="wthree-border"> </div>
						<h4>Start Your Pedal 2023 ...</h4>
						<p>UP Elevasi 2000+ MDPL</p>
						
						<div class="w3-arrow bounce animated">
							
							<a href="#about" class="scroll"><i class="fa fa-angle-down" aria-hidden="true"></i></a>

						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	{{-- registrasi --}}
	{{-- <div class="registrasi" id="registrasi">
		<div class="container">
						
			<form action="">
				<h1 action="center">Registrasi Disini</h1>
			
			<div class="form-group">
				<label for="NIK">No identitas</label>
				<input type="text" class="form-control" id="nik" placeholder="">
			</div>
			<div class="form-group">
				<label for="kategori_kelas">Kategori Kelas </label>
				<select class="form-control"name="kategori_kelas" id="" ></select>
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" placeholder="">
			</div>
			<div class="form-group">
				<label for="nm_komunitas">Nama Komunitas</label>
				<input type="text" class="form-control" id="nm_komunitas" placeholder="">
			</div>
			<div class="form-group">
				<label for="tempat_lahir">Tempat Lahir</label>
				<input type="text" class="form-control" id="tempat_lahir" placeholder="">
			</div>
			
			<div class="form-group">
				<label for="tanggal_lahir">Tanggal Lahir</label>
				<input type="date" class="form-control" id="tanggal_lahir" placeholder="">
			</div>
			<div class="form-group">
				<label for="no_telp">No Telphone atau whatsapp</label>
				<input type="text" class="form-control" id="no_telp" placeholder="">
			</div>
			
				<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Saya setuju untuk mendaftar</label>
				</div>
				<button type="submit" class="btn btn-success">Daftar</button>
			</form>
		</div>
	</div> --}}
	{{-- banner --}}
	@include('TamplateDepan.Tamplate.banner')
	<!-- about -->
	@include('TamplateDepan.Tamplate.about')
	<!-- //about -->
	<!-- gallery -->
	@include('TamplateDepan.Tamplate.galeri')
	<!-- //gallery -->

	<!-- footer -->
        @include('TamplateDepan.Tamplate.footer')
	<!-- //footer -->
	
</body>	
</html>