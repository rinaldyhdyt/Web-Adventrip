<!DOCTYPE html>
<html>
	<head>
		<title>AdvenTrip | Pesan Tiket | Travel | Trip</title>

		<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">

	    <!-- Javascript/Jquery -->

	    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>
	    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-sm navbar-expand-lg navbar-dark shadow-sm" style="z-index: 1026;">
			<a href="" class="navbar-brand ml-2 display-4">AdvenTrip</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="" class="nav-link active">Beranda</a>
					</li>
					<li class="nav-item">
						<a href="#daftar_wisata" class="nav-link">Daftar Wisata</a>
					</li>
				</ul>
			</div>
		</nav>
		
		<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
			    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			 </ol>

			<div class="carousel-inner position-relative" style="margin-top: -70px !important;">
				<div class="carousel-item active">
					<img src="img/4.jpg" class="d-block w-100 img-fluid" style="margin-top: -300px !important;" alt="0">
					<div class="carousel-caption d-none d-md-block">
				        <h5 class="text-warning display-4 shadow-sm">Lembang</h5>
				        <p class="shadow-sm">Lembang ini berada di Indonesia</p>
				        <a href="#explore">
				        	<button class="btn btn-dark">Explore</button>
				        </a>
				        
				    </div>
				</div>
				<div class="carousel-item">
					<img src="img/2.jpg" class="d-block w-100 img-fluid" style="margin-top: -300px !important;" alt="1">
					<div class="carousel-caption d-none d-md-block">
				        <h5 class="text-warning display-4 shadow-sm">Gurun</h5>
				        <p class="shadow-sm">Gurun ini berada di Indonesia</p>
				        <a href="#explore">
				        	<button class="btn btn-dark">Explore</button>
				        </a>
				    </div>
				</div>
				<div class="carousel-item">
					<img src="img/7.jpg" class="d-block w-100 img-fluid" style="margin-top: -300px !important;" alt="1">
					<div class="carousel-caption d-none d-md-block">
				        <h5 class="text-warning display-4 shadow-sm">Rawa</h5>
				        <p class="shadow-sm">Rawa ini berada di Indonesia</p>
				        <a href="#explore">
				        	<button class="btn btn-dark">Explore</button>
				        </a>
				    </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="navbar bg-dark" id="explore"></div>

		<div class="container mt-5">
			<div class="row mb-5">
				<div class="col-lg-6 mb-5">
					<img src="img/travel.jpg" class="d-block w-75">
				</div>
				<div class="col-lg-6">
					<div class="bg-warning w-25">
						<p class="ml-3 text-light">Travel</p>
					</div>					
					<p style="font-size: 35px;" class="display-4 mt-n3">Explore Sekarang</p>

					<p class="mt-5 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis egestas nunc sit amet sem condimentum, sit amet tempor mauris volutpat. Donec suscipit odio libero, eu consectetur arcu suscipit ultrices. Vivamus diam nisl, auctor vel dolor nec, suscipit pulvinar libero. Pellentesque aliquet nec diam ut rutrum. Sed rhoncus porttitor semper. Nullam eu vestibulum purus, laoreet porttitor quam. Mauris mattis lacus sit amet sodales vehicula. Donec maximus non urna sed pretium. Praesent bibendum vulputate arcu, a efficitur ante malesuada vel.</p>
					<a style="text-decoration: none;" href="#daftar_wisata">
						<button class="btn btn-sm rounded-pill btn-warning mt-5 text-black-50" style="width: 170px;">Pesan Tiket Sekarang</button>
					</a>
					
					<button class="btn btn-sm rounded-pill mt-5 ml-4 text-black-50 border-dark" style="width: 170px;">Explore Lainnya</button>
				</div>
				
			</div>
		</div>

		<div id="daftar_wisata">
			<img src="img/12.jpg" class="d-block w-100 position-absolute" style="opacity: 0.3 !important; transform: rotate(180deg);">

			<div class="container">
				
				<div class="row mb-5">
					<div class="col-lg-4">
						<div class="card mt-5 shadow-sm" style="margin-top: 70px !important;">
							<div class="card-title">
								<img src="img/1.jpg" class="d-block w-100">
							</div>
							<div class="bg-primary text-light mt-n3 text-center">
								<p class="mt-3 display-4" style="font-size: 20px;">Gunung Es</p>
							</div>
							<div class="card-text container mt-3">
								<div class="row">
									<div class="col-lg-8">
										<button class="btn btn-primary w-100 mb-4" data-toggle="modal" data-target="#ModalGunung">Lihat Informasi</button>
									</div>
									<div class="col-lg-4">
										<button class="btn btn-primary w-100 mb-4" data-toggle="modal" data-target="#ModalGunungPesan">Pesan</button>
									</div>
								</div>
								
							</div>

							<div class="modal fade" id="ModalGunungPesan" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ModalLongTitle">
												Pesan Tiket
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<ul class="list-group list-group-flush mt-2 mb-3">
												<li class="list-group-item active">
													Pesan Tiket Ke Gunung
												</li>
											</ul>

											<form>
												<div class="form-group ml-3 mr-3">
													<label>Nama Pemesan</label>
													<input type="text" class="form-control" placeholder="Nama Lengkap" required>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Nomor Telepon</label>
													<input type="text" class="form-control" placeholder="Nomor Telepon" required>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Alamat Lengkap</label>
													<textarea class="form-control" rows="5" placeholder="Alamat Lengkap" required></textarea>
												</div>
												<div class="custom-control custom-radio ml-3 mr-3">
													<input type="radio" class="custom-control-input" id="travel" name="Travel" value="Travel">
													<label class="custom-control-label w-100 mt-1 mb-3" for="travel">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center active">
																Paket Travel
																<span class="badge badge-primary badge-pill">Rp. 750.000,-</span>
															</li>
														</ul>
													</label>
												</div>
												<div class="custom-control custom-radio ml-3 mr-3">
													<input type="radio" class="custom-control-input" id="biasa" name="Travel" value="Travel">
													<label class="custom-control-label w-100 mt-1 mb-3" for="biasa">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center active">
																Paket Biasa
																<span class="badge badge-primary badge-pill">Rp. 400.000,-</span>
															</li>
														</ul>
													</label>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Metode Pembayaran</label>
													<select class="form-control">
														<option disabled selected>Pilih Metode Pembayaran</option>
														<option>BNI</option>
														<option>BRI</option>
														<option>BCA</option>
														<option>OVO</option>
														<option>GoPay</option>
														<option>Indomaret</option>
													</select>
												</div>

												<input type="button" class="btn btn-primary mb-5 float-right ml-3 mr-3" value="Pesan Tiket">
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="ModalGunung" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ModalLongTitle">
												Informasi Tempat
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-lg-6">
													<img src="img/1.jpg" class="d-block w-100">

													<p class="ml-3 mr-3 mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet nunc eu ante scelerisque elementum. Morbi rhoncus consectetur libero eget vestibulum. Proin imperdiet tempor turpis a semper. Sed massa magna, congue quis malesuada a, luctus vel odio. Morbi vulputate cursus nisi condimentum malesuada. Sed tempus fringilla ultrices. Etiam blandit quis urna sit amet sollicitudin. Duis vitae semper velit.</p>
												</div>
												<div class="col-lg-6">
													<h1 style="font-size: 20px;">Gunung Es</h1>

													<ul class="list-group list-group-flush mt-5 mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center active">
															Paket Travel
															<span class="badge badge-primary badge-pill">Rp. 750.000,-</span>
														</li>
														<li class="list-group-item">Menjelajahi Lebih Dari 10 Tempat</li>
														<li class="list-group-item">Lorem Ipsum</li>
														<li class="list-group-item">Lorem Ipsum</li>
													</ul>

													<ul class="list-group list-group-flush mt-5 mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center active">
															Paket Biasa
															<span class="badge badge-primary badge-pill">Rp. 400.000,-</span>
														</li>
														<li class="list-group-item">Menjelajahi Lebih Dari 7 Tempat</li>
														<li class="list-group-item">Lorem Ipsum</li>
														<li class="list-group-item">Lorem Ipsum</li>
													</ul>
												</div>
											</div>						
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card mt-5 shadow-sm" style="margin-top: 70px !important;">
							<div class="card-title">
								<img src="img/2.jpg" class="d-block w-100">
							</div>
							<div class="bg-secondary text-light mt-n3 text-center">
								<p class="mt-3 display-4" style="font-size: 20px;">Gurun</p>
							</div>
							<div class="card-text container mt-3">
								<div class="row">
									<div class="col-lg-8">
										<button class="btn btn-primary w-100 mb-4" data-toggle="modal" data-target="#ModalGurun">Lihat Informasi</button>
									</div>
									<div class="col-lg-4">
										<button class="btn btn-primary w-100 mb-4" data-toggle="modal" data-target="#ModalGurunPesan">Pesan</button>
									</div>
								</div>
							</div>

							<div class="modal fade" id="ModalGurunPesan" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ModalLongTitle">
												Pesan Tiket
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<ul class="list-group list-group-flush mt-2 mb-3">
												<li class="list-group-item active">
													Pesan Tiket Ke Gurun
												</li>
											</ul>

											<form>
												<div class="form-group ml-3 mr-3">
													<label>Nama Pemesan</label>
													<input type="text" class="form-control" placeholder="Nama Lengkap" required>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Nomor Telepon</label>
													<input type="text" class="form-control" placeholder="Nomor Telepon" required>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Alamat Lengkap</label>
													<textarea class="form-control" rows="5" placeholder="Alamat Lengkap" required></textarea>
												</div>
												<div class="custom-control custom-radio ml-3 mr-3">
													<input type="radio" class="custom-control-input" id="travel" name="Travel" value="Travel">
													<label class="custom-control-label w-100 mt-1 mb-3" for="travel">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center active">
																Paket Travel
																<span class="badge badge-primary badge-pill">Rp. 750.000,-</span>
															</li>
														</ul>
													</label>
												</div>
												<div class="custom-control custom-radio ml-3 mr-3">
													<input type="radio" class="custom-control-input" id="biasa" name="Travel" value="Travel">
													<label class="custom-control-label w-100 mt-1 mb-3" for="biasa">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center active">
																Paket Biasa
																<span class="badge badge-primary badge-pill">Rp. 400.000,-</span>
															</li>
														</ul>
													</label>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Metode Pembayaran</label>
													<select class="form-control">
														<option disabled selected>Pilih Metode Pembayaran</option>
														<option>BNI</option>
														<option>BRI</option>
														<option>BCA</option>
														<option>OVO</option>
														<option>GoPay</option>
														<option>Indomaret</option>
													</select>
												</div>

												<input type="button" class="btn btn-primary mb-5 float-right ml-3 mr-3" value="Pesan Tiket">
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="ModalGurun" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ModalLongTitle">
												Informasi Tempat
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-lg-6">
													<img src="img/2.jpg" class="d-block w-100">

													<p class="ml-3 mr-3 mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet nunc eu ante scelerisque elementum. Morbi rhoncus consectetur libero eget vestibulum. Proin imperdiet tempor turpis a semper. Sed massa magna, congue quis malesuada a, luctus vel odio. Morbi vulputate cursus nisi condimentum malesuada. Sed tempus fringilla ultrices. Etiam blandit quis urna sit amet sollicitudin. Duis vitae semper velit.</p>
												</div>
												<div class="col-lg-6">
													<h1 style="font-size: 20px;">Gurun</h1>

													<ul class="list-group list-group-flush mt-5 mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center active">
															Paket Travel
															<span class="badge badge-primary badge-pill">Rp. 750.000,-</span>
														</li>
														<li class="list-group-item">Menjelajahi Lebih Dari 10 Tempat</li>
														<li class="list-group-item">Lorem Ipsum</li>
														<li class="list-group-item">Lorem Ipsum</li>
													</ul>

													<ul class="list-group list-group-flush mt-5 mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center active">
															Paket Biasa
															<span class="badge badge-primary badge-pill">Rp. 400.000,-</span>
														</li>
														<li class="list-group-item">Menjelajahi Lebih Dari 7 Tempat</li>
														<li class="list-group-item">Lorem Ipsum</li>
														<li class="list-group-item">Lorem Ipsum</li>
													</ul>
												</div>
											</div>								
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card mt-5 shadow-sm" style="margin-top: 70px !important;">
							<div class="card-title">
								<img src="img/3.jpg" class="d-block w-100">
							</div>
							<div class="bg-warning text-light mt-n3 text-center">
								<p class="mt-3 display-4" style="font-size: 20px;">Bukit</p>
							</div>
							<div class="card-text container mt-3">
								<div class="row">
									<div class="col-lg-8">
										<button class="btn btn-primary w-100 mb-4" data-toggle="modal" data-target="#ModalBukit">Lihat Informasi</button>
									</div>
									<div class="col-lg-4">
										<button class="btn btn-primary w-100 mb-4" data-toggle="modal" data-target="#ModalBukitPesan">Pesan</button>
									</div>
								</div>
							</div>

							<div class="modal fade" id="ModalBukitPesan" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ModalLongTitle">
												Pesan Tiket
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<ul class="list-group list-group-flush mt-2 mb-3">
												<li class="list-group-item active">
													Pesan Tiket Ke Bukit
												</li>
											</ul>

											<form>
												<div class="form-group ml-3 mr-3">
													<label>Nama Pemesan</label>
													<input type="text" class="form-control" placeholder="Nama Lengkap" required>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Nomor Telepon</label>
													<input type="text" class="form-control" placeholder="Nomor Telepon" required>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Alamat Lengkap</label>
													<textarea class="form-control" rows="5" placeholder="Alamat Lengkap" required></textarea>
												</div>
												<div class="custom-control custom-radio ml-3 mr-3">
													<input type="radio" class="custom-control-input" id="travel" name="Travel" value="Travel">
													<label class="custom-control-label w-100 mt-1 mb-3" for="travel">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center active">
																Paket Travel
																<span class="badge badge-primary badge-pill">Rp. 750.000,-</span>
															</li>
														</ul>
													</label>
												</div>
												<div class="custom-control custom-radio ml-3 mr-3">
													<input type="radio" class="custom-control-input" id="biasa" name="Travel" value="Travel">
													<label class="custom-control-label w-100 mt-1 mb-3" for="biasa">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center active">
																Paket Biasa
																<span class="badge badge-primary badge-pill">Rp. 400.000,-</span>
															</li>
														</ul>
													</label>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Metode Pembayaran</label>
													<select class="form-control">
														<option disabled selected>Pilih Metode Pembayaran</option>
														<option>BNI</option>
														<option>BRI</option>
														<option>BCA</option>
														<option>OVO</option>
														<option>GoPay</option>
														<option>Indomaret</option>
													</select>
												</div>

												<input type="button" class="btn btn-primary mb-5 float-right ml-3 mr-3" value="Pesan Tiket">
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="ModalBukit" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ModalLongTitle">
												Informasi Tempat
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-lg-6">
													<img src="img/3.jpg" class="d-block w-100">

													<p class="ml-3 mr-3 mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet nunc eu ante scelerisque elementum. Morbi rhoncus consectetur libero eget vestibulum. Proin imperdiet tempor turpis a semper. Sed massa magna, congue quis malesuada a, luctus vel odio. Morbi vulputate cursus nisi condimentum malesuada. Sed tempus fringilla ultrices. Etiam blandit quis urna sit amet sollicitudin. Duis vitae semper velit.</p>
												</div>
												<div class="col-lg-6">
													<h1 style="font-size: 20px;">Bukit</h1>

													<ul class="list-group list-group-flush mt-5 mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center active">
															Paket Travel
															<span class="badge badge-primary badge-pill">Rp. 750.000,-</span>
														</li>
														<li class="list-group-item">Menjelajahi Lebih Dari 10 Tempat</li>
														<li class="list-group-item">Lorem Ipsum</li>
														<li class="list-group-item">Lorem Ipsum</li>
													</ul>

													<ul class="list-group list-group-flush mt-5 mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center active">
															Paket Biasa
															<span class="badge badge-primary badge-pill">Rp. 400.000,-</span>
														</li>
														<li class="list-group-item">Menjelajahi Lebih Dari 7 Tempat</li>
														<li class="list-group-item">Lorem Ipsum</li>
														<li class="list-group-item">Lorem Ipsum</li>
													</ul>
												</div>
											</div>								
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card mt-5 shadow-sm" style="margin-top: 30px !important;">
							<div class="card-title">
								<img src="img/4.jpg" class="d-block w-100">
							</div>
							<div class="bg-warning text-light mt-n3 text-center">
								<p class="mt-3 display-4" style="font-size: 20px;">Lembang</p>
							</div>
							<div class="card-text container mt-3">
								<div class="row">
									<div class="col-lg-8">
										<button class="btn btn-primary w-100 mb-4" data-toggle="modal" data-target="#ModalLembang">Lihat Informasi</button>
									</div>
									<div class="col-lg-4">
										<button class="btn btn-primary w-100 mb-4" data-toggle="modal" data-target="#ModalLembangPesan">Pesan</button>
									</div>
								</div>
							</div>

							<div class="modal fade" id="ModalLembangPesan" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ModalLongTitle">
												Pesan Tiket
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<ul class="list-group list-group-flush mt-2 mb-3">
												<li class="list-group-item active">
													Pesan Tiket Ke Lembang
												</li>
											</ul>

											<form>
												<div class="form-group ml-3 mr-3">
													<label>Nama Pemesan</label>
													<input type="text" class="form-control" placeholder="Nama Lengkap" required>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Nomor Telepon</label>
													<input type="text" class="form-control" placeholder="Nomor Telepon" required>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Alamat Lengkap</label>
													<textarea class="form-control" rows="5" placeholder="Alamat Lengkap" required></textarea>
												</div>
												<div class="custom-control custom-radio ml-3 mr-3">
													<input type="radio" class="custom-control-input" id="travel" name="Travel" value="Travel">
													<label class="custom-control-label w-100 mt-1 mb-3" for="travel">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center active">
																Paket Travel
																<span class="badge badge-primary badge-pill">Rp. 750.000,-</span>
															</li>
														</ul>
													</label>
												</div>
												<div class="custom-control custom-radio ml-3 mr-3">
													<input type="radio" class="custom-control-input" id="biasa" name="Travel" value="Travel">
													<label class="custom-control-label w-100 mt-1 mb-3" for="biasa">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center active">
																Paket Biasa
																<span class="badge badge-primary badge-pill">Rp. 400.000,-</span>
															</li>
														</ul>
													</label>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Metode Pembayaran</label>
													<select class="form-control">
														<option disabled selected>Pilih Metode Pembayaran</option>
														<option>BNI</option>
														<option>BRI</option>
														<option>BCA</option>
														<option>OVO</option>
														<option>GoPay</option>
														<option>Indomaret</option>
													</select>
												</div>

												<input type="button" class="btn btn-primary mb-5 float-right ml-3 mr-3" value="Pesan Tiket">
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="ModalLembang" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ModalLongTitle">
												Informasi Tempat
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-lg-6">
													<img src="img/4.jpg" class="d-block w-100">

													<p class="ml-3 mr-3 mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet nunc eu ante scelerisque elementum. Morbi rhoncus consectetur libero eget vestibulum. Proin imperdiet tempor turpis a semper. Sed massa magna, congue quis malesuada a, luctus vel odio. Morbi vulputate cursus nisi condimentum malesuada. Sed tempus fringilla ultrices. Etiam blandit quis urna sit amet sollicitudin. Duis vitae semper velit.</p>
												</div>
												<div class="col-lg-6">
													<h1 style="font-size: 20px;">Lembang</h1>

													<ul class="list-group list-group-flush mt-5 mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center active">
															Paket Travel
															<span class="badge badge-primary badge-pill">Rp. 750.000,-</span>
														</li>
														<li class="list-group-item">Menjelajahi Lebih Dari 10 Tempat</li>
														<li class="list-group-item">Lorem Ipsum</li>
														<li class="list-group-item">Lorem Ipsum</li>
													</ul>

													<ul class="list-group list-group-flush mt-5 mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center active">
															Paket Biasa
															<span class="badge badge-primary badge-pill">Rp. 400.000,-</span>
														</li>
														<li class="list-group-item">Menjelajahi Lebih Dari 7 Tempat</li>
														<li class="list-group-item">Lorem Ipsum</li>
														<li class="list-group-item">Lorem Ipsum</li>
													</ul>
												</div>
											</div>								
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card mt-5 shadow-sm" style="margin-top: 30px !important;">
							<div class="card-title">
								<img src="img/5.jpg" class="d-block w-100">
							</div>
							<div class="bg-secondary text-light mt-n3 text-center">
								<p class="mt-3 display-4" style="font-size: 20px;">Kawah</p>
							</div>
							<div class="card-text container mt-3">
								<div class="row">
									<div class="col-lg-8">
										<button class="btn btn-primary w-100 mb-4" data-toggle="modal" data-target="#ModalKawah">Lihat Informasi</button>
									</div>
									<div class="col-lg-4">
										<button class="btn btn-primary w-100 mb-4" data-toggle="modal" data-target="#ModalKawahPesan">Pesan</button>
									</div>
								</div>
							</div>

							<div class="modal fade" id="ModalKawahPesan" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ModalLongTitle">
												Pesan Tiket
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<ul class="list-group list-group-flush mt-2 mb-3">
												<li class="list-group-item active">
													Pesan Tiket Ke Kawah
												</li>
											</ul>

											<form>
												<div class="form-group ml-3 mr-3">
													<label>Nama Pemesan</label>
													<input type="text" class="form-control" placeholder="Nama Lengkap" required>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Nomor Telepon</label>
													<input type="text" class="form-control" placeholder="Nomor Telepon" required>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Alamat Lengkap</label>
													<textarea class="form-control" rows="5" placeholder="Alamat Lengkap" required></textarea>
												</div>
												<div class="custom-control custom-radio ml-3 mr-3">
													<input type="radio" class="custom-control-input" id="travel" name="Travel" value="Travel">
													<label class="custom-control-label w-100 mt-1 mb-3" for="travel">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center active">
																Paket Travel
																<span class="badge badge-primary badge-pill">Rp. 750.000,-</span>
															</li>
														</ul>
													</label>
												</div>
												<div class="custom-control custom-radio ml-3 mr-3">
													<input type="radio" class="custom-control-input" id="biasa" name="Travel" value="Travel">
													<label class="custom-control-label w-100 mt-1 mb-3" for="biasa">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center active">
																Paket Biasa
																<span class="badge badge-primary badge-pill">Rp. 400.000,-</span>
															</li>
														</ul>
													</label>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Metode Pembayaran</label>
													<select class="form-control">
														<option disabled selected>Pilih Metode Pembayaran</option>
														<option>BNI</option>
														<option>BRI</option>
														<option>BCA</option>
														<option>OVO</option>
														<option>GoPay</option>
														<option>Indomaret</option>
													</select>
												</div>

												<input type="button" class="btn btn-primary mb-5 float-right ml-3 mr-3" value="Pesan Tiket">
											</form>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="ModalKawah" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ModalLongTitle">
												Informasi Tempat
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-lg-6">
													<img src="img/5.jpg" class="d-block w-100">

													<p class="ml-3 mr-3 mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet nunc eu ante scelerisque elementum. Morbi rhoncus consectetur libero eget vestibulum. Proin imperdiet tempor turpis a semper. Sed massa magna, congue quis malesuada a, luctus vel odio. Morbi vulputate cursus nisi condimentum malesuada. Sed tempus fringilla ultrices. Etiam blandit quis urna sit amet sollicitudin. Duis vitae semper velit.</p>
												</div>
												<div class="col-lg-6">
													<h1 style="font-size: 20px;">Kawah</h1>

													<ul class="list-group list-group-flush mt-5 mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center active">
															Paket Travel
															<span class="badge badge-primary badge-pill">Rp. 750.000,-</span>
														</li>
														<li class="list-group-item">Menjelajahi Lebih Dari 10 Tempat</li>
														<li class="list-group-item">Lorem Ipsum</li>
														<li class="list-group-item">Lorem Ipsum</li>
													</ul>

													<ul class="list-group list-group-flush mt-5 mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center active">
															Paket Biasa
															<span class="badge badge-primary badge-pill">Rp. 400.000,-</span>
														</li>
														<li class="list-group-item">Menjelajahi Lebih Dari 7 Tempat</li>
														<li class="list-group-item">Lorem Ipsum</li>
														<li class="list-group-item">Lorem Ipsum</li>
													</ul>
												</div>
											</div>								
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="card mt-5 shadow-sm" style="margin-top: 30px !important;">
							<div class="card-title">
								<img src="img/7.jpg" class="d-block w-100">
							</div>
							<div class="bg-primary text-light mt-n3 text-center">
								<p class="mt-3 display-4" style="font-size: 20px;">Rawa</p>
							</div>
							<div class="card-text container mt-3">
								<div class="row">
									<div class="col-lg-8">
										<button class="btn btn-primary w-100 mb-4" data-toggle="modal" data-target="#ModalRawa">Lihat Informasi</button>
									</div>
									<div class="col-lg-4">
										<button class="btn btn-primary w-100 mb-4" data-toggle="modal" data-target="#ModalRawaPesan">Pesan</button>
									</div>
								</div>
							</div>
						</div>

						<div class="modal fade" id="ModalRawaPesan" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ModalLongTitle">
												Pesan Tiket
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<ul class="list-group list-group-flush mt-2 mb-3">
												<li class="list-group-item active">
													Pesan Tiket Ke Rawa
												</li>
											</ul>

											<form>
												<div class="form-group ml-3 mr-3">
													<label>Nama Pemesan</label>
													<input type="text" class="form-control" placeholder="Nama Lengkap" required>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Nomor Telepon</label>
													<input type="text" class="form-control" placeholder="Nomor Telepon" required>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Alamat Lengkap</label>
													<textarea class="form-control" rows="5" placeholder="Alamat Lengkap" required></textarea>
												</div>
												<div class="custom-control custom-radio ml-3 mr-3">
													<input type="radio" class="custom-control-input" id="travel" name="Travel" value="Travel">
													<label class="custom-control-label w-100 mt-1 mb-3" for="travel">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center active">
																Paket Travel
																<span class="badge badge-primary badge-pill">Rp. 750.000,-</span>
															</li>
														</ul>
													</label>
												</div>
												<div class="custom-control custom-radio ml-3 mr-3">
													<input type="radio" class="custom-control-input" id="biasa" name="Travel" value="Travel">
													<label class="custom-control-label w-100 mt-1 mb-3" for="biasa">
														<ul class="list-group">
															<li class="list-group-item d-flex justify-content-between align-items-center active">
																Paket Biasa
																<span class="badge badge-primary badge-pill">Rp. 400.000,-</span>
															</li>
														</ul>
													</label>
												</div>
												<div class="form-group ml-3 mr-3">
													<label>Metode Pembayaran</label>
													<select class="form-control">
														<option disabled selected>Pilih Metode Pembayaran</option>
														<option>BNI</option>
														<option>BRI</option>
														<option>BCA</option>
														<option>OVO</option>
														<option>GoPay</option>
														<option>Indomaret</option>
													</select>
												</div>

												<input type="button" class="btn btn-primary mb-5 float-right ml-3 mr-3" value="Pesan Tiket">
											</form>
										</div>
									</div>
								</div>
							</div>

						<div class="modal fade" id="ModalRawa" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="ModalLongTitle">
												Informasi Tempat
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-lg-6">
													<img src="img/7.jpg" class="d-block w-100">

													<p class="ml-3 mr-3 mt-4 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet nunc eu ante scelerisque elementum. Morbi rhoncus consectetur libero eget vestibulum. Proin imperdiet tempor turpis a semper. Sed massa magna, congue quis malesuada a, luctus vel odio. Morbi vulputate cursus nisi condimentum malesuada. Sed tempus fringilla ultrices. Etiam blandit quis urna sit amet sollicitudin. Duis vitae semper velit.</p>
												</div>
												<div class="col-lg-6">
													<h1 style="font-size: 20px;">Rawa</h1>

													<ul class="list-group list-group-flush mt-5 mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center active">
															Paket Travel
															<span class="badge badge-primary badge-pill">Rp. 750.000,-</span>
														</li>
														<li class="list-group-item">Menjelajahi Lebih Dari 10 Tempat</li>
														<li class="list-group-item">Lorem Ipsum</li>
														<li class="list-group-item">Lorem Ipsum</li>
													</ul>

													<ul class="list-group list-group-flush mt-5 mb-3">
														<li class="list-group-item d-flex justify-content-between align-items-center active">
															Paket Biasa
															<span class="badge badge-primary badge-pill">Rp. 400.000,-</span>
														</li>
														<li class="list-group-item">Menjelajahi Lebih Dari 7 Tempat</li>
														<li class="list-group-item">Lorem Ipsum</li>
														<li class="list-group-item">Lorem Ipsum</li>
													</ul>
												</div>
											</div>								
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>

		
	</body>

	<footer class="py-4 bg-dark text-white-50 position-relative" style="flex-shrink: none; bottom: 0; margin-top: 30px !important;">		
		<div class="container text-center">
			<small>AdvenTrip</small>
			<small>&copy; 2020</small>
		</div>
	</footer>

</html>