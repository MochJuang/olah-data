<!DOCTYPE html>
<html>
	<head>
		<title>My Application</title>
	</head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<?php if (isset($css)): ?>
		<?php foreach ($css as $key => $value): ?>
			<link rel="stylesheet" href="<?php echo $value ?>">
		<?php endforeach ?>
	<?php endif ?>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<body>
		<input type="hidden" id="base_url" value="<?php echo base_url() ?>">
		<!-- NAVBAR -->
		   <nav id="main-navbar" class="navbar navbar-expand-md navbar-dark bg-dark py-0">
		     <div class="container">
		       <a class="navbar-brand" href="<?php echo base_url() ?>">
		        	<span class="d-none" >MyApp</span>
					<!--<img src="img/ilkoom_logo.png" class="main-logo d-none d-md-inline" alt="ilkoom logo">
			        <img src="img/ilkoom_logo.png" class="small-logo d-inline d-md-none" alt="ilkoom logo"> -->		       
			        MyApp
				</a>
		       <button class="navbar-toggler" type="button" data-toggle="collapse"
		         data-target="#navbarNav">
		         <span class="navbar-toggler-icon"></span>
		       </button>

		       <div class="collapse navbar-collapse" id="navbarNav">
		         <ul class="navbar-nav ml-auto">
		           <li class="nav-item">
		             <a class="nav-link p-4" href="<?php echo base_url() ?>">Upload</a>
		           </li>
		           <li class="nav-item">
		             <a class="nav-link p-4" href="<?php echo base_url() ?>/home/pengolahan">Data Pengolahan</a>
		           </li>
		           <<!-- li class="nav-item">
		             <a class="nav-link p-4" href="blog.html">Blog</a>
		           </li>
		           <li class="nav-item">
		             <a class="nav-link p-4 active" href="article.html">Article</a>
		           </li>
		           <li class="nav-item">
		             <a class="nav-link p-4" href="gallery.html">Gallery</a>
		           </li>
		           <li class="nav-item">
		             <a class="nav-link p-4" href="login.html">Login</a>
		           </li> -->
		         </ul>
		       </div>
		     </div>
		   </nav>
