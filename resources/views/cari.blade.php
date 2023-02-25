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
								<li><a href="cari" >Search</a></li>
								
								{{-- <li><a href="#about" class="scroll">About</a></li> --}}
								<!-- <li><a href="#services" class="scroll">Services</a></li>
								<li><a href="#gallery" class="scroll">Gallery</a></li>
								<li><a href="#news" class="scroll">News</a></li>
								<li><a href="#team" class="scroll">Trainers</a></li>
								<li><a href="#contact" class="scroll">Contact</a></li> -->
							  </ul>
							</div>
							<!-- /.navbar-collapse -->
						</div>
				</div>
			</div>
			
			</div>
		</div>
	</div>
	

	<div class="registrasi" id="registrasi">
		<div class="container">
			{{-- Pemberian info notifikasi --}}
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif		
		@if (session()->get('success'))
			<div class="alert alert-success mt-3">
				{!! session()->get('success') !!}
			</div>
		@endif
		{{-- /pemberian info notifikasi  --}}
		{{-- mengambil data dari registrasi controller-store --}}
			<form action="{{ route('registrasi.store') }}" method="post">
				@csrf
				<h1 action="center">Cari Disini</h1>
				<p>Silahkan cari nama anda</p>
				<div class="form-groupp">
					<label for="daftarevent-option">Daftar Event</label>
					<select class="form-control" name="id_event" id="daftarevent">
						@foreach ($daftarevent as $p)
						<option value="{{ $p->id_event }}">{{ $p->nama_event }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="kategorikelas-option">Kategori Kelas</label>
					<select class="form-control" id="id_kategori_event" name="id_kategori_event">
						@foreach ($kategorikelas as $p)
						<option value="{{  $p->id_kategori_event }}">{{ $p->nama_kategori }}</option>
						@endforeach
					</select>
				</div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama"id="nama" placeholder="" >
                </div>
				<button type="submit" class="btn btn-success">Search</button>

			</form>
		</div>
	</div>
</body>	
</html>