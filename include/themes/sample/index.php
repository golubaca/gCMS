


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo showSiteName($SiteInfo); ?></title>

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo Template::style(); ?>">
</head>
<body>

<div class="wrapper">

	<header>
	<li class="logo">
					<a href="#">
						<img src="http://xxlmarketing.co.rs/izgled/xxl/images/xxllogonovo.png" alt="xxl marketing logo">
					</a>
				</li>
		<?php echo showNavigation($SiteInfo); ?>
	</header>

	<div class="content">


		<?php echo showBannerTop($SiteInfo), showBanners($SiteInfo);
		?>


	</div>


	

</div>

<?php echo showFooter($SiteInfo); ?>


<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="<?php echo Template::js(); ?>"></script>
	
</body>
</html>