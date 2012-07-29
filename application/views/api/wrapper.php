<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Endpoint's API</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}
			.sidebar-nav {
				padding: 9px 0;
			}
		</style>
		<link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a class="brand" href="#">End Point&trade; API</a>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row-fluid">
				<?php if ( isset($sidebar) ) : ?>
				<div class="span3">
					<div class="well sidebar-nav">
						<?php echo $sidebar; ?>
					</div><!--/.well -->
				</div><!--/span-->
				<?php endif; ?>
				
				<?php if ( isset($main) ) : ?>
				<div class="span9">
					<?php echo $main; ?>
				</div><!--/span-->
			</div><!--/row-->
			<?php endif; ?>

			<hr>

			<footer>
				<p>
					&copy; End Point, LLC <?php echo date('Y'); ?>
				</p>
			</footer>

		</div><!--/.fluid-container-->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-alert.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-button.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-collapse.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-carousel.js"></script>
		<script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-typeahead.js"></script>

	</body>
</html>
