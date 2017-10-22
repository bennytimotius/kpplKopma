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
					<a href="<?php echo base_url() . 'Login_admin/logout' ?>" class="button alt small ">Logout</a>
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
						<h1>Agenda</h1>
					</header>

					<!-- Content -->
								<!-- Table -->
									<h3></h3>

									<h4>Tabel Agenda</h4>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>SELECT</th>
													<th>Tanggal</th>
													<th>Nama Agenda</th>
													<th>Deskripsi</th>
													<th>Action</th>
													
												</tr>
											</thead>
											<form method="post" action="<?php echo base_url().'admin/delete_agenda'?>">
											<tbody>
												 <?php foreach ($list as $x) { ?>
												 <tr>
											<td><input type="checkbox" name="agenda[]" value="<?php echo
			$x['id']?>"></td>
										   <td><?= $x['tanggal'] ?></td>
										   <td><?= $x['nama'] ?></td>
										   <td><?= $x['deskripsi'] ?></td>
										   <td><a href="<?php echo site_url("admin/viewAgenda/".$x['name']); ?>" class="button alt small">Update</a></td>
										  </tr>
										  <?php } ?>
											</tbody>
										</table>
										  <a href=<?php echo base_url("admin/register_agenda") ?> class="button special small">Tambah Agenda</a>
										  <input type="submit" value="Delete Agenda" class="button special small">
									</div>
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
			
			
			
			
			
			