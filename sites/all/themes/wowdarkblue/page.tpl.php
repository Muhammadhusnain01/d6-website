<?php
// $Id: page.tpl.php,v 1.1 2009/02/15 18:27:01 magicmatze Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title><?php print $head_title; ?></title>
	<?php print $head; ?>
	<?php print $styles; ?>
	<style type="text/css" media="screen">
		#page { background: url("themes/wowdarkblue/images/kubrickbg-ltr.jpg") repeat-y top; border: none; padding-left:0px; }
	</style>
	

	<?php print $scripts; ?>
</head>

<body>

<div id="page"><!-- START PAGE -->


<div id="header"><!-- START HEADER -->
	<div id="headerimg">
		<h1><a href="<?php print $front_page ?>" Title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1>

		<div class="description"><?php print $site_slogan ?></div>
		<div style="padding-left:140px; padding-top:10px;"><?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links) ?><?php } ?></div>
	</div>
	
</div><!-- ENDE HEADER -->
<hr />

	


      				

	<div id="content" class="narrowcolumn"><!-- START CONTENT-->
		  <?php print $breadcrumb ?>
          <?php if ($title) { ?><h1 class="title"><?php print $title ?></h1><?php } ?>
          <?php if ($tabs) { ?><div class="tabs"><?php print $tabs ?></div><?php } ?>
          <?php print $help ?>
          <?php print $messages ?>
          <?php print $content; ?>
          <?php print $feed_icons; ?>		
  
	</div><!-- ENDE CONTENT -->



  	<div id="sidebar" class="wowsidebarright"><!-- START SIDEBAR-->
		<ul>
			<li>
			<?php if ($right) { ?><?php print $right ?><?php } ?>
			  		<?php if ($left) { ?><div><?php print $left ?></div><?php } ?>
			</li>
		</ul>
	</div><!-- ENDE SIDEBAR -->






<div id="footer"><!-- START FOOTER -->

	<div style="text-align:center">
	  <p>
	  	<?php if ($footer_message) : ?>
	      <?php print $footer_message ?>
	    <?php endif ?>
		<br />
	    WebDesign by <a href="http://www.nunodesign.de/">nunodesign</a> &#124; <a href="http://www.randyrun.com">WoW Gold</a> Reseller &#124; ported to Drupal by <a href="http://www.mathiasdittrich.de">Mathias Dittrich</a>
  </p></div>
</div><!-- ENDE FOOTER -->

</div><!-- ENDE PAGE -->

</body>
</html>
