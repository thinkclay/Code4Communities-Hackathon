		<!-- Facebook Open Graph META -->
		<?php if (isset($fbproperty)) : ?>
		<meta property="fb:app_id" content="<?= $fbproperty['app_id']; ?>" /> 
		<meta property="og:type" content="<?= $fbproperty['type']; // qwizzle_users:property ?>" /> 
		<meta property="og:url" content="http://<?= $fbproperty['url']; ?>" /> 
		<meta property="og:title" content="<?= $fbproperty['address']; ?>" /> 
		<meta property="og:description" content="<?= $fbproperty['description']; ?>" /> 
		<meta property="og:image" content="<?= $fbproperty['img_link']; ?>" />
		}
		<?php endif; ?>