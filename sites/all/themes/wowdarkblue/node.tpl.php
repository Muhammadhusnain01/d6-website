<?php
// $Id: node.tpl.php,v 1.1 2009/02/15 18:27:01 magicmatze Exp $
?>
		<div  class="post">
		<h2><a href="<?php print $node_url?>"><?php print $title?></a></h2>
			<div class="entry">
			<span class="submitted"><?php print $submitted?></span>
				<br /><br />
			    <?php if ($picture) { print $picture; }?>
			    <div> <?php print $content?></div>
				<?php if ($terms) { ?><div class="taxonomy"><?php print $terms?></div><?php }; ?>		
				<?php if ($links) { ?><div class="links"><?php print $links?></div><?php }; ?>
			</div>
		</div>