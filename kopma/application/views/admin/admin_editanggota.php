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
				<ul class="actions vertical">
					<li><a href="<?php echo base_url() . 'Login_admin/logout' ?>" class="button alt small ">Logout</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Edit Anggota</h1>
								<!-- Form -->
									<h3>Form Anggota</h3>
									<?php echo form_open_multipart('admin/updatePhoto/' . $username); ?>
										<form method="post">
											<!-- Break -->
											<div class="12u$">
												<div class="select-wrapper">
													<span><label for="userfile">Photo</label></span>
												 	<img src="<?php echo base_url() . $pic; ?>" width="25%" height="25%">
												 	<div><input type="file" name="userfile" size="20" /></div>
												 	<input type="hidden" name="is_submit" value="1" />
												
                                           	<div class="12u$" style="margin-top: 1.5em">
												<ul class="actions">
													<li><input name ="register-submit" type="submit" value="Submit" /></li>
                                                </ul>
                                            </div>
				                               
								            </div>
								        </div>
											<!-- Break -->
											
									</form>
									<?php echo form_close(); ?>

									<?php echo form_open_multipart('admin/updateProfile/' . $username); ?>
									<form method="post">
											<!-- Break -->
											<div class="12u$">
												<div class="select-wrapper">
												<input type="text" name="nak" id="NAK" value="<?php echo $nak; ?>" placeholder="Nomor Anggota Kopma" style="margin-top: 1.5em"/>
												<input type="text" name="nrp" id="NRP" value="<?php echo $nrp; ?>" placeholder="NRP" style="margin-top: 1.5em"/>
												<input type="text" name="username" id="name" value="<?php echo $name; ?>" placeholder="Name" style="margin-top: 1em"/>
												<input type="password" name="password" id="password" value="<?php echo $password ?>" placeholder="Insert New Password" style="margin-top: 1em"/>
												<input type="text" name="email" id="email" value="<?php echo $email; ?>" placeholder="Email" style="margin-top: 1em"/>
												<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="line" id="IDLINE" value="<?php echo $line; ?>" placeholder="ID Line" style="margin-top: 1em"/>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="handphone" id="NOHP" value="<?php echo $handphone; ?>" placeholder="Nomor Handphone" style="margin-top: 1em"/>
											</div>
                                            </div>
												<input type="text" name="alamat" id="alamat" value="<?php echo $alamat; ?>" placeholder="Alamat" style="margin-top: 1em"/>
                                           	<div class="12u$" style="margin-top: 1.5em">
												<ul class="actions">
													<li><input name ="register-submit" type="submit" value="Submit" /></li>
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