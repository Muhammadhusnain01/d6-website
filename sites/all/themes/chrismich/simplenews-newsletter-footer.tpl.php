<?php
// $Id: simplenews-newsletter-footer.tpl.php,v 1.1.2.4 2009/01/02 11:59:33 sutharsan Exp $

/**
 * @file
 * Default theme implementation to format the simplenews newsletter footer.
 * 
 * Copy this file in your theme directory to create a custom themed footer.
 * Rename it to simplenews-newsletter-footer--<tid>.tpl.php to override it for a 
 * newsletter using the newsletter term's id.
 *
 * Available variables:
 * - $node: newsletter node object
 * - $language: language object
 * - $key: email key [node|test]
 * - $format: newsletter format [plain|html]
 * - $unsubscribe_text: unsubscribe text
 * - $test_message: test message warning message
 *
 * Available tokens:
 * - !confirm_unsubscribe_url: unsubscribe url to be used as link
 * for more tokens: see simplenews_mail_tokens()
 *
 * @see template_preprocess_simplenews_newsletter_footer()
 */
 print_r($node);
?>
                              <table border="0" cellpadding="10" cellspacing="0" width="600" id="templateFooter">
                                <tr>
                                  <td valign="top" class="footerContent">
                                    
                                        <!-- // Begin Module: Standard Footer \\ -->
                                        <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                            <tr>
                                                <td colspan="2" valign="middle" id="social">
                                                    <div mc:edit="std_social">
                                                        &nbsp;<a href="*|TWITTER:PROFILEURL|*">follow on Twitter</a> | <a href="*|FACEBOOK:PROFILEURL|*">friend on Facebook</a> | <a href="*|FORWARD|*">forward to a friend</a>&nbsp;
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="top" width="350">
                                                    <div mc:edit="std_footer">
                                                      <em>Copyright &copy; <?php print date('Y', $node->created); ?> <?php print variable_get('site_name', ''); ?>, Tous droits r&eacute;serv&eacute;s.</em>
                                                      <br />
                                                      <?php print variable_get('site_slogan', ''); ?>
                                                      <br />
                                                      <strong>Pour nous contacter :</strong>
                                                      <br />
                                                      <?php print l(variable_get('site_mail', ''), 'mailto:' . variable_get('site_mail', '')); ?>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign="middle" id="utility">
                                                    <div mc:edit="std_utility">
                                                        &nbsp;<a href="[simplenews-unsubscribe-url]">unsubscribe from this list</a> | <a href="<?php print $base_url .'/newsletter/subscriptions'; ?>">update subscription preferences</a>&nbsp;
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // End Module: Standard Footer \\ -->
                                    
                                    </td>
                                </tr>
                              </table>
                            <!-- // End Template Footer \\ -->
                          </td>
                      </tr>
                    </table>
                  <br />
                </td>
            </tr>
        </table>
    </center>
  </body>
</html>