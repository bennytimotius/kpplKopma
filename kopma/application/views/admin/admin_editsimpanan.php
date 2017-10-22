<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>KOPMA ITS</title>
		<link rel="icon" href=<?php echo base_url('assets/images/kopma.ico') ?> >
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href=<?php echo base_url("assets/css/main.css") ?> />
	</head>
	<body class="subpage">

		<!-- Header -->
				<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.html" class="logo">KOPMA ITS</a>
                <nav class="right">
                    <h3 style="text-transform: uppercase;"><?php echo "Hai, " . $this->session->userdata('nama') . " !" ?></h3>
                </nav>
                
				<nav class="right">
					<a href=<?php echo base_url() . 'Login_admin/logout' ?> class="button alt small ">Logout</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href=<?php echo base_url('admin') ?>>Anggota</a></li>
					<li><a href=<?php echo base_url('admin/shu') ?>>SHU</a></li>
					<li><a href=<?php echo base_url('admin/simpanan') ?>>Simpanan</a></li>
					<li><a href=<?php echo base_url('admin/agenda') ?>>Agenda</a></li>
				</ul>
				<<ul class="actions vertical">
					<li><a href="<?php echo base_url() . 'Login_admin/logout' ?>" class="button alt small ">Logout</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Edit Simpanan</h1>
								<!-- Form -->
									<h3>Form Simpanan</h3>
									<h4>Batas pembayaran dikosongkan jika jenis simpanan sukarela</h4>
									<?php echo form_open_multipart('admin/updateSimpanan/' . $pemicu); ?>
									<form method="post">
											<!-- Break -->
											<div class="12u$">
												<div>
												<!-- <select name="NAK" id="nak" style="margin-top: 1em">
													<option>
														<option value="" disabled selected>- NAK -</option>
														<option value="<?php echo $NAK ?>"></option>

													</option>
												</select> -->
												<input type="text" name="NAK" id="NAK" value="<?php echo $NAK ?>" placeholder="Nomor Anggota Kopma" style="margin-top: 1.5em"/>
												<input type="text" name="nama" id="nama" value="<?php echo $nama ?>" placeholder="Nama" style="margin-top: 1.5em"/>
												<input type="text" name="email" id="email" value="" placeholder="Email" style="margin-top: 1.5em"/>
												<input type="date" name="deadline" id="deadline" value="<?php echo $deadline ?>" placeholder="Batas pembayaran" style="margin-top: 1em"/>
												<div class="row uniform">
                                            
											    <div class="4u 12u$(xsmall)">
												    <input type="text" name="jumlah" id="jumlah" value="<?php echo $jumlah ?>" placeholder="Jumlah (ex:20000)" style="margin-top: 1em"/>
											    </div>
											     <div class="4u 12u$(xsmall)">
												   <select name="jenis" id="jenis" style="margin-top: 1em">
														<option value="<?php echo $jenis ?>" disabled selected><?php echo $jenis ?></option>
														<option value="Wajib">Wajib</option>
														<option value="Sukarela">Sukarela</option>
													</select>
											    </div>
                                            <div class="4u 12u$(xsmall)">
												   <select name="status" id="Status" style="margin-top: 1em">
														<option value="<?php echo $status ?>" disabled selected><?php echo $status ?></option>
														<option value="Lunas">Lunas</option>
														<option value="Belum Lunas">Belum Lunas</option>
													</select>
											    </div>
                                            </div>
                                           	<div class="12u$" style="margin-top: 1.5em">
												<ul class="actions">
													<li><input type="submit" value="Submit" /></li>
                                                </ul>
                                            </div>
				                               
								            </div>
								        </div>
											<!-- Break -->
											
										
									</form>
									<?php echo form_close(); ?>
									<hr />
                    </header>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(000) 000-0000</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">information@untitled.tld</a></li>
						<li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Nashville, TN 00000</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. Design <a href="https://templated.co">TEMPLATED</a>. Images <a href="https://unsplash.com">Unsplash</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src=<?php echo base_url("assets/js/jquery.min.js") ?> ></script>
			<script src=<?php echo base_url("assets/js/jquery.scrolly.min.js") ?> ></script>
			<script src=<?php echo base_url("assets/js/skel.min.js") ?> ></script>
			<script src=<?php echo base_url("assets/js/util.js") ?> ></script>
			<script src=<?php echo base_url("assets/js/main.js") ?> ></script>

	</body>
</html>