<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<title><?php echo (isset($title)) ? $title : 'Endpoint'; ?></title>

		<!-- META -->
		<?php if (isset($fbproperty)) : ?>
		<meta property="fb:app_id" content="<?= $fbproperty['app_id']; ?>" /> 
		<meta property="og:type" content="<?= $fbproperty['type']; // qwizzle_users:property ?>" /> 
		<meta property="og:url" content="http://<?= $fbproperty['url']; ?>" /> 
		<meta property="og:title" content="<?= $fbproperty['address']; ?>" /> 
		<meta property="og:description" content="<?= $fbproperty['description']; ?>" /> 
		<meta property="og:image" content="<?= $fbproperty['img_link']; ?>" />
		}
		<?php endif; ?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php if(isset($description)): ?><meta name="description" content="<?php echo $description?>" /><?php endif; ?>
		<?php if(isset($keywords)): ?><meta name="keywords" content="<?php echo $keywords?>" /><?php endif; ?>
		
		<!-- STYLES -->
		<?php if(isset($styles)) foreach($styles as $file => $type){ echo HTML::style($file, array('media' => $type)), "\n"; } ?>
		<?php if(isset($less)) echo Less::compile($less); ?>
		<link rel="stylesheet" href="/media/css/reveal.css">
		<link rel="stylesheet" href="/media/css/stylesheet.css">
	
		<!-- JS_VARS -->
		<?php if (isset($js_vars)) : ?>
		<script type="text/javascript">
		<?php foreach ($js_vars as $key => $value) echo "var $key = '$value'; \r\n"; ?>
		</script>
		<?php endif; ?>
		
		<!-- SCRIPTS -->
		<?php if (isset($scripts)) foreach ($scripts as $file) { echo HTML::script($file, NULL, FALSE), "\n"; } ?>
		
		<?php if (isset($head)) echo $head; ?>
		<script type="text/javascript" src="/media/js/libs/modernizr-2.5.3.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="/media/js/libs/jquery-1.7.2.min.js"><\/script>')</script>
		<script src="/media/js/libs/jquery.form.js"></script>
		<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCgDq58XR1uUISSdIwoWKjZqNnxUGrIJO0&sensor=true"></script>
		<script src="/media/js/libs/jquery.reveal.js"></script>
		<script src="/media/js/plugins.js"></script>
		<script src="/media/js/script.js"></script>
		<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>

		<!-- LOOK AT THIS LATER -->
		<?php /*
		// if ( isset( $user ) ) {
		
			<script type="text/javascript">
			 	SR.options.userInfo = {
			 		"username": "<?php echo $user->username; ?>",
					"firstname": "<?php echo $user->firstname; ?>",
					"lastname": "<?php echo $user->lastname; ?>"
				};
			</script>
		
		// }
		*/?>

		<script type="text/javascript">
			// var disasters = <?php echo json_encode( $disasters ); ?>;
		</script>	
	</head>
	
	<body 
		id="<?php if (isset($id)) echo $id; ?>" 
		class="<?php if (isset($classes)) foreach ($classes as $c) echo $c.' '; ?><?php if (isset($class)) echo $class; ?>"
	><!-- bracket for body -->

	<header>
		<nav>
			<ul id="menu">  
				<li id="disaster">
					<a href="#" id="select-disaster">Select Relief Effort</a>
					<ul class="dropdown_2columns">
						<li><a href="#" class="world">Select Relief Effort</a></li>
<?php
foreach ( $disasters as $disaster ) {
?>
						<li id="disaster-<?php echo $disaster->id; ?>"><a href="#" class="<?php echo $disaster_types[$disaster->type]; ?>"><?php echo $disaster->name; ?></a></li>
<?php
}
?>
					</ul>
				</li>
				<li><a href="#" id="find-relief">Find Relief</a></li>  
				<li><a href="#" id="offer-relief">Offer Relief</a></li>
				<li><a href="#">Learn More</a></li>  
				<li><a href="#">Contribute</a></li> 
				<li id="user">
					<a href="#">welcome friend</a>
					<div id="login-menu">
<?php
if ( isset( $user ) ) {
?>
						<p>Thanks for being awesome!</p>
						<div class="blue-button">
							<input class="blue-button-inner" type="button" value="log out" onclick="location.href='./logout';" />
						</div>
<?php
} else {
?>
						<h2>Please login so you can:</h2>
						<ul>
							<li>keep our community safe</li>
							<li>show us you are a real person</li>
							<li>ensure you can modify your post</li>
							<li>receive responses to your post</li>
						</ul>
						<h3>Thank you from Sparkrelief</h3>
						<form action="./login" method="post">
							<fieldset>
								<!--<label for="username">Enter an Email:</label>-->
								<input type="text" name="username" id="username" placeholder="enter an email or mobile number" tabindex="1" />
								<!--<label for="password">And A Password:</label>-->
								<div id="password-wrapper">
									<input type="password" name="password" id="password" placeholder="and a password..." tabindex="2" />
									<a href="#">forgot?</a>
								</div>
								<div class="blue-button">
									<input type="submit" value="sign in or sign up" class="blue-button-inner" />
								</div>
							</fieldset>
						</form>
						<span class="terms">I agree to the terms of use by signing in</span>
<?php
}
?>
					</div>
				</li>
			</ul>
		</nav>
	</header>
	<div id="main">
		<!--SideBar -->
		<!-- The ones besides the default has display: none on them -->
		<aside id="sidebar">
			<ul class="relief">
				<li><a href="#" class="filterform housing">Housing</a></li>
				<li><a href="#" class="food">Food</a></li>
				<li><a href="#" class="goods">Goods</a></li>
				<li><a href="#" class="medical">Medical</a></li>
				<li><a href="#" class="transport">Transport</a></li>
				<li><a href="#" class="services">Services</a></li>
				<li><a href="#" class="animals">Animals</a></li>
				<li><a href="#" class="other">Other</a></li>
			</ul>
			<ul class="contribute">
				<li><a href="#">Donate Money</a></li>
				<li><a href="#">Donate Goods</a></li>
				<li><a href="#">Donate Services</a></li>
				<li><a href="#">Volunteer Time</a></li>
				<li><a href="#">Contribute Insights</a></li>
				<li><a href="#">Create Connections</a></li>
				<li><a href="#">Or Suggest Another</a></li>
			</ul>
			<ul class="explore">
				<li><a href="#">News</a></li>
				<li><a href="#">Photos</a></li>
				<li><a href="#">Video</a></li>
				<li><a href="#">Audio</a></li>
			</ul>
			<ul class="locate">
				<li><a href="#">People</a></li>
				<li><a href="#">Pets</a></li>
				<li><a href="#">Things</a></li>
			</ul>
		</aside><!-- end #sidebar -->
		<div id="map"></div>
		<!-- Modal Box -->
		<div id="offerReliefBox" class="reveal-modal">
			<form action="./offer" method="post">
				<fieldset>
					<div class="relief_selection">
						<label for="offer_type">Offer: </label>
						<select name="offer_type" id="offer_type" required="required">
							<option value="1">Housing</option>
							<option value="2">Food</option>
							<option value="3">Goods</option>
							<option value="4">Medical</option>
							<option value="5">Transport</option>
							<option value="6">Services</option>
							<option value="7">Animals</option>
							<option value="8">Other</option>
						</select>
						<label for="for_disaster">For: </label>
						<select name="for_disaster" id="for_disaster" class="for_disaster" required="required">
<?php
foreach ( $disasters as $disaster ) {
?>
							<option value="<?php echo $disaster->id; ?>"><?php echo $disaster->name; ?></option>
<?php
}
?>
						</select>						    
					</div>
					<div class="relief_textbox" >						         
						<textarea rows="10" cols="40" name="description" id="share" placeholder="Share more on your relief..." required="required"></textarea><br />
						<input type="text" name="location" id="location" placeholder="Location" required="required" />
					</div>
				</fieldset>
				<fieldset>
					<!--<input type="hidden" name="home_type" id="home-type" value="" />
					<div class="what_home">
						<button class="btn_home" type="button" onclick="$( '#home-type' ).val( 1 );">Home</button>
						<button class="btn_hotel" type="button" onclick="$( '#home-type' ).val( 2 );">Hotel</button>
						<button class="btn_shelter" type="button" onclick="$( '#home-type' ).val( 3 );">Shelter</button>
					</div>-->
					<div class="people_selection">
						 <label for="people">For</label>
						 <select name="people" id="people" class="people">
							<option value="1">1 Person</option>
							<option value="2">2 People</option>
							<option value="3">3 People</option>
							<option value="4">4 or More</option>
						</select>
					</div>
					<div class="people_misc">
						 <span>and</span>
						 <div class="checkbox">
							 <input type="checkbox" name="children" id="children" value="1" /><label for="children">Children</label><br />
							 <input type="checkbox" name="dogs" id="dogs" value="1" /><label for="dogs">Dogs</label><br />
							 <input type="checkbox" name="cats" id="cats" value="1" /><label for="cats">Cats</label><br />
						</div>
					
					</div>
					<div class="duration_selection">
						<select name="duration">
							<option value="1">Less than 1 week</option>
							<option value="2">1 Week</option>
							<option value="3">2 Weeks</option>
							<option value="4">3 Weeks</option>
							<option value="5">A Month or more</option>
						</select>
					</div>
					<div class="preferences">
						<span>Options</span>
						<div class="checkbox">
							<input type="checkbox" name="unoccupied" id="unoccupied" value="1" /><label for="unoccupied">Unoccupied</label><br />
							<input type="checkbox" name="baby_care" id="baby_care" value="1" /><label for="baby_care">Baby Care</label><br />
							<input type="checkbox" name="transportation" id="transportation" value="1" /><label for="transportation">Transportation</label><br />
							<input type="checkbox" name="parking" id="parking" value="1" /><label for="parking">Parking</label><br />
						</div>
					</div>
				</fieldset>
				<fieldset class="center">
					<div class="blue-button">
						<input class="blue-button-inner" type="submit" value="Post Offer/Relief" />
					</div>
				</fieldset>
			</form>
			 <a class="close-reveal-modal">&#215;</a>
		</div>
		<div class="filter">
			<div class="Housing_filter gp">
				<form action="#" method="post">
					<!--<div class="what_home">
						<button class="btn_home" type="button">Home</button>
						<button class="btn_hotel" type="button">Hotel</button>
						<button class="btn_shelter" type="button">Shelter</button>
					</div>-->
					<div class="people_selection">
						 <label for="people-filter">For</label>
						 <select name="people" id="people-filter" class="people">
							<option value="1 Person">1 Person</option>
							<option value="2 People">2 People</option>
							<option value="3 People">3 People</option>
							<option value="More Than 4">4 or More</option>
						</select>
					</div>
					<div class="people_misc">
						 <label>and</label>
						 <div class="checkbox">
							 <input type="checkbox" name="children" id="children-filter" value="1" /><label for="children-filter">Children</label><br />
							 <input type="checkbox" name="dogs" id="dogs-filter" value="1" /><label for="dogs-filter">Dogs</label><br />
							 <input type="checkbox" name="cats" id="cats-filter" value="1" /><label for="cats-filter">Cats</label><br />
						</div>
					
					</div>
					<div class="time_selection">
						<select name="time" class="time">
							<option value="1">Less than 1 week</option>
							<option value="2">1 Week</option>
							<option value="3">2 Weeks</option>
							<option value="4">3 Weeks</option>
							<option value="5">A Month or more</option>
						</select>
					</div>
					<div class="filter-preferences">
						<label for="preferences">Preferences</label>
						<div class="checkbox">
							<input type="checkbox" name="unoccupied" id="unoccupied-filter" value="1" /><label for="unoccupied-filter">Unoccupied</label><br />
						</div>
					</div>
					<div>					         
						<label for="filter-other">Other</label>
						<div class="checkbox">
							<input type="checkbox" name="has_baby" id="has-baby-filter" value="1" /><label for="has-baby-filter">Has Baby</label><br />
							<input type="checkbox" name="need_ride" id="need-ride-filter" value="1" /><label for="need-ride-filter">I need a Ride</label><br />
							<input type="checkbox" name="parking" id="parking-filter" value="1" /><label for="parking-filter">Parking</label><br />
						</div>
					</div>
					<a href="#" class="back_button">Go Back</a>
				</form>
			</div><!-- end .Housing_filter gp -->
		</div><!-- .filter -->
	</div>
	<footer>
		<ul>
			<li><a href="#">Sparkrelief</a></li>
			<li><a href="#">follow</a></li>
			<li><a href="#">share</a></li>
			<li><a href="#">talk to us</a></li>
			<li><a href="#">get involved</a></li>
			<li><a href="#">learn more</a></li>
		</ul>
	</footer>
		<?php if (isset($before)) echo $before; ?>
		<?php if(isset($header)) echo $header; ?>
		<?php if(isset($main)) echo $main; ?>
		<?php if(isset($footer)) echo $footer; ?>
		<?php if(isset($after)) echo $after; ?>
	</body>
</html>