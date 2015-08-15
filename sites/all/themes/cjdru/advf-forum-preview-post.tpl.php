<?php
// $Id: advf-forum-preview-post.tpl.php,v 1.1.2.3 2009/02/07 04:40:48 michellec Exp $

/**
 * @file
 *
 * Theme implementation: Template for each forum post whether node or comment.
 *
 * All variables available in node.tpl.php and comment.tpl.php for your theme
 * are available here. In addition, Advanced Forum makes available the following
 * variables:
 *
 * - $top_post: TRUE if we are formatting the main post (ie, not a comment)
 * - $reply_link: Text link / button to reply to topic.
 * - $total_posts: Number of posts in topic (not counting first post).
 * - $new_posts: Number of new posts in topic, and link to first new.
 * - $links_array: Unformatted array of links.
 * - $account: User object of the post author.
 * - $name: User name of post author.
 * - $author_pane: Entire contents of advf-author-pane.tpl.php.

 */
 $topic_node = node_load(arg(2));
 $last_comment_id = advanced_forum_last_post_in_topic(arg(2));
 $last_page = advanced_forum_get_last_page($topic_node);
 $link_to_last_post = "$topic_node->nid";
 if($last_page > 0){
  $link_to_last_post .= "?page=".$last_page.".#comment-".$last_comment_id;
 }else{
  $link_to_last_post .= '#comment-'.$last_comment_id;
 }
?>

<iframe src="<?php print base_path(); ?>preview/<?php print $link_to_last_post; ?>" id='last_post_view'></iframe>

<?php /*
<?php if ($top_post): ?>
  <a id="top"></a>

  <?php $classes .= $node_classes; ?>
  <div id="node-<?php print $node->nid; ?>" class="top-post forum-post <?php print $classes; ?> clear-block">

<?php else: ?>
  <?php $classes .= $comment_classes; ?>
  <div id="comment-<?php print $comment->cid; ?>" class="forum-post <?php print $classes; ?> clear-block">
<?php endif; ?>

  <div class="post-info clear-block">
    <div class="posted-on">
      <?php print $date ?>

      <?php if (!$top_post && !empty($comment->new)): ?>
        <a id="new"><span class="new">(<?php print $new ?>)</span></a>
      <?php endif; ?>
    </div>

    <?php if (!$top_post): ?>
      <span class="post-num"><?php print $comment_link . ' ' . $page_link; ?></span>
    <?php endif; ?>
  </div>

  <div class="forum-post-wrapper">

    <div class="forum-post-panel-sub">
      <div class="author-pane">
        <?php print $author_pane; ?>
     </div>
    </div>

    <div class="forum-post-panel-main clear-block">
      <?php if ($title && !$top_post): ?>
        <div class="post-title">
          <?php print $title ?>
        </div>
      <?php endif; ?>

      <div class="content">
        <?php print $content ?>
      </div>

      <?php if ($signature): ?>
        <div class="author-signature">
          <?php print $signature ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
*/ ?>