<?php
// $Id: fb_views_handler_author_is_friend.inc,v 1.4 2010/03/21 04:44:26 yogadex Exp $
/**
 * @file
 * Handler definition for limiting results to friends.
 * 
 */

class fb_views_handler_author_is_friend extends views_handler_argument_user_uid {
  function get_default_argument($raw = FALSE) {
    return $GLOBALS['user']->uid;
  }

  function query() {
    //dpm($this, 'fb_views_handler_author_is_friend->query');
    $fb_app = $GLOBALS['_fb_app']; // Set on Canvas and Connect pages.
    
    $uid = $this->argument;

    if ($fb_app && $uid) {
      $fbu = fb_get_fbu($uid, $fb_app);

      if ($fbu) {
        $friends = fb_get_friends($fbu, $fb_app);
        
        if (is_array($friends) && count($friends)) {
          $this->ensure_my_table();
          $this->query->add_where(0, 'fb_user_app.fbu IN (%s)', implode(',', $friends));
        }

      }
    }
  }
}
