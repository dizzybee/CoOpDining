<?php
if (!defined('WEBPATH')) die();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php zp_apply_filter('theme_head'); ?>
	<title><?php printGalleryTitle(); ?> | <?php printPageTitle();?></title>
	<link rel="stylesheet" href="<?php echo $_zp_themeroot ?>/zen.css" type="text/css" />
	<?php printRSSHeaderLink('Gallery',gettext('Gallery RSS')); ?>

        <!-- Flexislider stuff -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="./lib/jquery.flexslider.js"></script>
        <link rel="stylesheet" href="./lib/flexslider.css" type="text/css" />
        <script type="text/javascript" charset="utf-8">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    pauseOnAction: true,
                    slideshowSpeed: 9000,
                    animationSpeed: 1200,
                    randomize: true,
                    controlNav: false,
                });
            });
            $(document).ready(function() {
                $(".menu-active").parent().css("background-color","#d1d1d1");
            });
        </script>

        <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro' rel='stylesheet' type='text/css'>
</head>
<body class="sidebars">
<?php zp_apply_filter('theme_body_open'); ?>
<div id="navigation"></div>
<div id="wrapper">
	<div id="container">
     	<div id="leftsidebar" class="sidebar">
      	<?php include("sidebar-left.php"); ?>
      </div>

		<div id="jcenter">
			<div id="jsqueeze">
				<div class="jright-corner">
					<div class="jleft-corner">
						<!-- begin content -->
						<div class="main section" id="main">
      	<?php include("header.php"); ?>

							<h3><?php printPageTitle(); ?></h3>
							<div id="pagetext">
							<?php printCodeblock(1); ?>
							<?php printPageContent(); ?>
							<?php printCodeblock(2); ?>
							</div>
							<?php
							if (function_exists('printRating')) printRating();
							if (function_exists('printCommentForm')) printCommentForm();
							footer();
							?>
							<p style="clear: both;"></p>
						</div>
						<!-- end content -->
						<span class="clear"></span> </div>
				</div>
			</div>
		</div>
		<span class="clear"></span>
			<div id="rightsidebar" class="sidebar">
				<?php include("sidebar-right.php"); ?>
			</div><!-- right sidebar -->
	</div><!-- /container -->
</div>
<?php
printAdminToolbox();
zp_apply_filter('theme_body_close');
?>
</body>
</html>