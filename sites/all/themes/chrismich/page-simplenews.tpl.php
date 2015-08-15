<?php if ($is_admin) { print $tabs . $messages;} ?>
<?php print theme('simplenews_newsletter_body', $node); ?>
<?php print theme('simplenews_newsletter_footer', $node->simplenews['tid']); ?>