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
				<a href="#" class="logo">KOPMA ITS</a>
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
				<!--<ul class="actions vertical">
					<li><a href="#" class="button fit">Login</a></li>
				</ul>-->
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h1>Sisa hasil Usaha</h1>
								<!-- Form -->
									<h3>Form SHU</h3>

									<form method="post" action="<?php echo base_url().'admin/submit_shu' ?>">
											<!-- Break -->
								        <div class="row uniform">								           
												<div class="2u 12u$(small) align-center">
												    <h2>Bulan : </h2>
												</div>
												<div class="10u$ 12u$(small)">
												    <input type="text" name="bulan" id="Bulan" value="" placeholder="Bulan" />
												</div>
												<div class="2u 12u$(small) align-center">
												    <h2>NAK&nbsp;&nbsp;&nbsp;&nbsp;: </h2>
												</div>
												<div class="10u$ 12u$(small)">
												    <input type="text" name="NAK" id="NAK" value="" placeholder="Nomor Anggota Kopma" />
												</div>
												<div class="2u 12u$(small) align-center">
												    <h2>Nama&nbsp;&nbsp;&nbsp;&nbsp;: </h2>
												</div>
												<div class="10u$ 12u$(small)">
												    <input type="text" name="nama" id="nama" value="" placeholder="Nama Anggota Kopma" />
												</div>
												<div class="2u 12u$(small) align-center">
												    <h2>SHU&nbsp;&nbsp;&nbsp;&nbsp;: </h2>
												</div>
												<div class="10u$ 12u$(small)">
												    <input type="text" name="SHU" id="SHU" value="" placeholder="Jumlah SHU" />
												</div>	
												<div>
													<label><?php echo $err_message;?></label>
												</div>
                    
                                           	<div class="12u$" style="margin-top: 1.5em">
												<ul class="actions">
													<li><input type="submit" value="Submit" /></li>
                                                </ul>
                                            </div>
				                        </div>  
								            
								        
											<!-- Break -->
											
										
									</form>

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