<?php
// $Id: referers-search.tpl.php,v 1.1.2.4 2009/06/13 13:19:43 hass Exp $
?>
<h2><?php print t('Search engines') ?></h2>
<div class="content">
  <object width="100%" height="300" type="application/x-shockwave-flash" data="<?php print $piwik_url ?>/libs/open-flash-chart/open-flash-chart.swf?v2i" id="ReferersgetSearchEnginesChart">
    <param name="allowScriptAccess" value="always"/>
    <param name="wmode" value="opaque"/>
    <param name="flashvars" value="data-file=<?php print $data1_url ?>"/>
  </object>
</div>

<h2><?php print t('Keywords') ?></h2>
