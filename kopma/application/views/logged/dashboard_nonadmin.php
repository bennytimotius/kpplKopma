<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>KOPMA ITS</title>
		<link rel="icon" href=<?php echo base_url('assets/images/kopma.ico') ?> />
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
				<a href="" class="logo">KOPMA ITS</a>
                <nav class="right">
                    <h3 style="text-transform: uppercase;"><?php echo "Hai, " . $this->session->userdata('nama') . " !" ?></h3>
                </nav>
                
				<nav class="right">
					<a href="<?php echo base_url() . 'Login/logout' ?>" class="button alt small ">Logout</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<!--<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>-->
				<ul class="actions vertical">
					<li><a href="<?php echo base_url() . 'Login/logout' ?>" class="button fit ">Logout</a>
				</nav>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
        
								<!-- Table -->
								<h4>Histori Tagihan</h4>
									<div class="table-wrapper ">
										<table class="alt">
											<thead>
												<tr>
													<th class="align-center">Deadline</th>
													<th class="align-center">Jumlah Tagihan</th>
													<th class="align-center">Status</th>
												</tr>
											</thead>
											
										 <tbody>
										  <?php foreach ($data as $x) { ?>
										  <tr>
										   <td><?= $x['deadline'] ?></td>
										   <td><?= $x['jumlah'] ?></td>
										   <td><?= $x['jenis'], ", ", $x['status'] ?></td>
										  </tr>
										  <?php } ?>
										 </tbody>
										</table>
									</div>
									<div class="pagination">
                                          <a href="#">&laquo;</a>
                                          <a href="#">1</a>
                                          <a href="#">2</a>
                                          <a href="#">3</a>
                                          <a href="#">4</a>
                                          <a href="#">5</a>
                                          <a href="#">6</a>
                                          <a href="#">&raquo;</a>
									    </div>
								
									<h4>Sisa Hasil Usaha</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th class="align-center">NAK</th>
													<th class="align-center">Nama</th>
													<th class="align-center">Bulan</th>
													<th class="align-center">SHU</th>
												</tr>
											</thead>
											<tbody>
										  <?php foreach ($shu as $x) { ?>
										  <tr>
										   <td><?= $x['nak'] ?></td>
										   <td><?= $x['nama'] ?></td>
										   <td><?= $x['bulan'] ?></td>
										   <td><?= $x['sisa'] ?></td>
										  </tr>
										  <?php } ?>
										 </tbody>
										</table>
									</div>
                                   <div class="pagination">
                                          <a href="#">&laquo;</a>
                                          <a href="#">1</a>
                                          <a href="#">2</a>
                                          <a href="#">3</a>
                                          <a href="#">4</a>
                                          <a href="#">5</a>
                                          <a href="#">6</a>
                                          <a href="#">&raquo;</a>
									    </div>
                                    
                                    <h4>Agenda</h4>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th class="align-center">Nama</th>
													<th class="align-center">Deskripsi</th>
													<th class="align-center">Tanggal</th>
												</tr>
											</thead>
											<tbody>
										  <?php foreach ($agenda as $x) { ?>
										  <tr>
										   <td><?= $x['nama'] ?></td>
										   <td><?= $x['deskripsi'] ?></td>
										   <td><?= $x['tanggal'] ?></td>
										  </tr>
										  <?php } ?>
										 </tbody>
										</table>
										<div class="pagination">
                                          <a href="#">&laquo;</a>
                                          <a href="#">1</a>
                                          <a href="#">2</a>
                                          <a href="#">3</a>
                                          <a href="#">4</a>
                                          <a href="#">5</a>
                                          <a href="#">6</a>
                                          <a href="#">&raquo;</a>
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

	</body>
</html>