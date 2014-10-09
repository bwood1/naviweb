<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Naviweb Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/style.css'); ?>"></style>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/bootstrap.min.css'); ?>"></style>
</head>
<body>
    <div class="container-fluid">
    	<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
    			<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Naviweb</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">File</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Open Table <img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" />O</a></li>
								<li><a href="#">Open Table (Quick)</a></li>
								<li><a href="#">Design Table <img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" />D</a></li>
								<li><a href="#">New Table <img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" />N</a></li>
								<li><a href="#">Delete Table</a></li>
								<li><a href="#">Duplicate Table <span class="glyphicon glyphicon-play"></span></a></li>
								<li><a href="#">Empty Table</a></li>
								<li><a href="#">Truncate Table</a></li>
								<li><a href="#">Set Privlideges</a></li>
								<li class="divider"></li>
								<li><a href="#">Import Wizard <img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" /><span class="glyphicon glyphicon-arrow-up"></span></a></li>
								<li><a href="#">Export Wizard <img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" /><span class="glyphicon glyphicon-arrow-down"></span></a></li>
								<li class="divider"></li>
								<li><a href="#">Dump SQL File</a></li>
								<li><a href="#">View Table Structure</a></li>
								<li><a href="#">Maintain <span class="glyphicon glyphicon-play"></span></a></li>
								<li class="divider"></li>
								<li><a href="#">Manage Group <span class="glyphicon glyphicon-play"></span></a></li>
								<li><a href="#">Rename</a></li>
								<li class="divider"></li>
								<li><a href="#">Refresh <img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" />R</a></li>
								<li class="divider"></li>
								<li><a href="#">Close <img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" />W</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Edit</a>
							<ul class="dropdown-menu" role="menu">
					            <li><a href="#">Undo <img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" />Z</a></li>
					            <li><a href="#">Redo <span class="glyphicon glyphicon-arrow-up"></span><img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" />Z</a></li>
					            <li class="divider"></li>
					            <li><a href="#">Cut <img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" />X</a></li>
								<li><a href="#">Copy <img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" />C</a></li>
								<li><a href="#">Paste <img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" />V</a></li>
								<li><a href="#">Delete</a></li>
								<li><a href="#">Select All <img src="<?php echo base_url('assets/images/cmd.jpg'); ?>" height="20px" />A</a></li>
					            <li class="divider"></li>
					            <li><a href="#">Spelling <span class="glyphicon glyphicon-play"></span></a></li>
								<li class="divider"></li>
								<li><a href="#">Special Characters</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">View</a>
							<ul class="dropdown-menu" role="menu">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li class="divider"></li>
					            <li><a href="#">Separated link</a></li>
					            <li class="divider"></li>
				            	<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Favorites</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Connection</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Window</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Help</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<!-- <form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li class="divider"></li>
				            	<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul> -->
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					col1
				</div>
				<div class="col-md-4">
					col2
				</div>
				<div class="col-md-4">
					col3
				</div>
			</div>
		</div>

	</div>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
</body>
</html>
