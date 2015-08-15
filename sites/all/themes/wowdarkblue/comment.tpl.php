<?php
// $Id: comment.tpl.php,v 1.1 2009/02/15 18:27:01 magicmatze Exp $
?>

<div class="comment<?php print ' '. $status; ?>">

<h3 class="title"><?php print $title; ?></h3>
    <?php if ($new) : ?>
      <span class="new">
	<?php print $new ?> 
      </span>
    <?php endif ?> 
	
	<ol class="commentlist">



		<li class="alt"> 
			<cite><?php print $author ?></cite>


			<small class="commentmetadata"><?php print $date ?></small>

			 <?php print $content; ?>
			      <?php if ($signature): ?>
      <div class="clear-block">
       <div>—</div>
       <?php print $signature ?>
      </div>
     <?php endif; ?>

		</li>
    <div class="links"><?php print $links; ?></div>


	</ol>
	
	</div>