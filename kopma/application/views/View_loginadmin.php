<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Administrator</title>
  <link rel="icon" href=<?php echo base_url('assets/images/kopma.ico') ?> >
  
  
      <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css") ?>">

  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form action="<?php echo base_url('login_admin/aksi_login'); ?>" method="post" role="form">
			<input type="text" placeholder="Username" name="username">
			<input type="password" placeholder="Password" name="pass">
			<button type="submit" id="login-button">Login</button>
			<div class="form-group">
				<label><?php echo $err_message;?></label>
			</div>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="<?php echo base_url("js/index.js") ?>"></script>

</body>
</html>
