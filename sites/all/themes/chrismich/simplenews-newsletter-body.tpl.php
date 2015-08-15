<?php
// $Id: simplenews-newsletter-body.tpl.php,v 1.1.2.4 2009/01/02 11:59:33 sutharsan Exp $

/**
 * @file
 * Default theme implementation to format the simplenews newsletter body.
 *
 * Copy this file in your theme directory to create a custom themed body.
 * Rename it to simplenews-newsletter-body--<tid>.tpl.php to override it for a 
 * newsletter using the newsletter term's id.
 *
 * Available variables:
 * - node: Newsletter node object
 * - $body: Newsletter body (formatted as plain text or HTML)
 * - $title: Node title
 * - $language: Language object
 *
 * @see template_preprocess_simplenews_newsletter_body()
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <!-- Facebook sharing information tags -->
        <meta property="og:title" content="Pentacle &amp; Boule de Gnome" />
        
        <title>Pentacle &amp; Boule de Gnome</title>
		<style type="text/css">
			/* Client-specific Styles */
			#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
			body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
			body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */

			/* Reset Styles */
			body{margin:0; padding:0;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table td{border-collapse:collapse;}
			#backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

			/* Template Styles */

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: COMMON PAGE ELEMENTS /\/\/\/\/\/\/\/\/\/\ */
			
			/**
			* @tab Page
			* @section background color
			* @tip Set the background color for your email. You may want to choose one that matches your company's branding.
			* @theme page
			*/
			body, #backgroundTable{
				/*@editable*/ background-color:#FAFAFA;
			}
			
			/**
			* @tab Page
			* @section email border
			* @tip Set the border for your email.
			*/
			#templateContainer{
				/*@editable*/ border: 1px solid #DDDDDD;
			}
			
			/**
			* @tab Page
			* @section heading 1
			* @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
			* @style heading 1
			*/
			h1, .h1{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:34px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Page
			* @section heading 2
			* @tip Set the styling for all second-level headings in your emails.
			* @style heading 2
			*/
			h2, .h2{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:30px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Page
			* @section heading 3
			* @tip Set the styling for all third-level headings in your emails.
			* @style heading 3
			*/
			h3, .h3{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:26px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Page
			* @section heading 4
			* @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
			* @style heading 4
			*/
			h4, .h4{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:22px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:0;
				margin-right:0;
				margin-bottom:10px;
				margin-left:0;
				/*@editable*/ text-align:left;
			}
			
			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: PREHEADER /\/\/\/\/\/\/\/\/\/\ */
			
			/**
			* @tab Header
			* @section preheader style
			* @tip Set the background color for your email's preheader area.
			* @theme page
			*/
			#templatePreheader{
				/*@editable*/ background-color:#FAFAFA;
			}
			
			/**
			* @tab Header
			* @section preheader text
			* @tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
			*/
			.preheaderContent div{
				/*@editable*/ color:#505050;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:10px;
				/*@editable*/ line-height:100%;
				/*@editable*/ text-align:left;
			}
			
			/**
			* @tab Header
			* @section preheader link
			* @tip Set the styling for your email's preheader links. Choose a color that helps them stand out from your text.
			*/
			.preheaderContent div a:link, .preheaderContent div a:visited, /* Yahoo! Mail Override */ .preheaderContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}
			

			
			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: HEADER /\/\/\/\/\/\/\/\/\/\ */
			
			/**
			* @tab Header
			* @section header style
			* @tip Set the background color and border for your email's header area.
			* @theme header
			*/
			#templateHeader{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border-bottom:0;
			}
			
			/**
			* @tab Header
			* @section header text
			* @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
			*/
			.headerContent{
				/*@editable*/ color:#202020;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:34px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				/*@editable*/ padding:0;
				/*@editable*/ text-align:center;
				/*@editable*/ vertical-align:middle;
			}
			
			/**
			* @tab Header
			* @section header link
			* @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
			*/
			.headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}
			
			#headerImage{
				height:auto;
				max-width:600px;
			}
			
			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: MAIN BODY /\/\/\/\/\/\/\/\/\/\ */
			
			/**
			* @tab Body
			* @section body style
			* @tip Set the background color for your email's body area.
			*/
			#templateContainer, .bodyContent{
				/*@editable*/ background-color:#FFFFFF;
			}

			/**
			* @tab Body
			* @section body text
			* @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
			* @theme main
			*/
			.bodyContent div{
				/*@editable*/ color:#505050;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:14px;
				/*@editable*/ line-height:150%;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Body
			* @section body link
			* @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
			*/
			.bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			.bodyContent img{
				display:inline;
				height:auto;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: COLUMNS; LEFT, RIGHT /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Columns
			* @section left column text
			* @tip Set the styling for your email's left column text. Choose a size and color that is easy to read.
			*/
			.leftColumnContent{
				/*@editable*/ background-color:#FFFFFF;
			}
			
			/**
			* @tab Columns
			* @section left column text
			* @tip Set the styling for your email's left column text. Choose a size and color that is easy to read.
			*/
			.leftColumnContent div{
				/*@editable*/ color:#505050;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:14px;
				/*@editable*/ line-height:150%;
				/*@editable*/ text-align:left;
			}
			
			/**
			* @tab Columns
			* @section left column link
			* @tip Set the styling for your email's left column links. Choose a color that helps them stand out from your text.
			*/
			.leftColumnContent div a:link, .leftColumnContent div a:visited, /* Yahoo! Mail Override */ .leftColumnContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			.leftColumnContent img{
				display:inline;
				height:auto;
			}

			/**
			* @tab Columns
			* @section right column text
			* @tip Set the styling for your email's right column text. Choose a size and color that is easy to read.
			*/
			.rightColumnContent{
				/*@editable*/ background-color:#FFFFFF;
			}
			
			/**
			* @tab Columns
			* @section right column text
			* @tip Set the styling for your email's right column text. Choose a size and color that is easy to read.
			*/
			.rightColumnContent div{
				/*@editable*/ color:#505050;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:14px;
				/*@editable*/ line-height:150%;
				/*@editable*/ text-align:left;
			}
			
			/**
			* @tab Columns
			* @section right column link
			* @tip Set the styling for your email's right column links. Choose a color that helps them stand out from your text.
			*/
			.rightColumnContent div a:link, .rightColumnContent div a:visited, /* Yahoo! Mail Override */ .rightColumnContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			.rightColumnContent img{
				display:inline;
				height:auto;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: FOOTER /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Footer
			* @section footer style
			* @tip Set the background color and top border for your email's footer area.
			* @theme footer
			*/
			#templateFooter{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border-top:0;
			}

			/**
			* @tab Footer
			* @section footer text
			* @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
			* @theme footer
			*/
			.footerContent div{
				/*@editable*/ color:#707070;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:12px;
				/*@editable*/ line-height:125%;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Footer
			* @section footer link
			* @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
			*/
			.footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			.footerContent img{
				display:inline;
			}

			/**
			* @tab Footer
			* @section social bar style
			* @tip Set the background color and border for your email's footer social bar.
			* @theme footer
			*/
			#social{
				/*@editable*/ background-color:#FAFAFA;
				/*@editable*/ border:0;
			}
			
			/**
			* @tab Footer
			* @section social bar style
			* @tip Set the background color and border for your email's footer social bar.
			*/
			#social div{
				/*@editable*/ text-align:center;
			}

			/**
			* @tab Footer
			* @section utility bar style
			* @tip Set the background color and border for your email's footer utility bar.
			* @theme footer
			*/
			#utility{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border:0;
			}

			/**
			* @tab Footer
			* @section utility bar style
			* @tip Set the background color and border for your email's footer utility bar.
			*/
			#utility div{
				/*@editable*/ text-align:center;
			}
      
      <?php if ($is_admin) { ?>
      /* Admin tabs */

      <?php } ?>
		</style>
	</head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
      <div class="page-tabs">
        <?php if ($is_admin) { print $tabs . $messages;} ?>
      </div>
      <center>
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
            <tr>
                <td align="center" valign="top">
                      <!-- // Begin Template Preheader \\ -->
                      <table border="0" cellpadding="10" cellspacing="0" width="600" id="templatePreheader">
                          <tr>
                              <td valign="top" class="preheaderContent">
                              
                                <!-- // Begin Module: Standard Preheader \ -->
                                  <table border="0" cellpadding="10" cellspacing="0" width="100%">
                                    <tr>
                                        <td valign="top">
                                            <div mc:edit="std_preheader_content">
                                                 Use this area to offer a short teaser of your email's content. Text here will show in the preview area of some email clients.
                                              </div>
                                          </td>
                                          <!-- *|IFNOT:ARCHIVE_PAGE|* -->
                    <td valign="top" width="190">
                                            <div mc:edit="std_preheader_links">
                                                Is this email not displaying correctly?<br /><a href="*|ARCHIVE|*" target="_blank">View it in your browser</a>.
                                              </div>
                                          </td>
                    <!-- *|END:IF|* -->
                                      </tr>
                                  </table>
                                <!-- // End Module: Standard Preheader \ -->
                              
                              </td>
                          </tr>
                      </table>
                      <!-- // End Template Preheader \\ -->
                    <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
                        <tr>
                            <td align="center" valign="top">
                                  <!-- // Begin Template Header \\ -->
                                <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
                                      <tr>
                                          <td class="headerContent">
                                          
                                            <!-- // Begin Module: Standard Header Image \\ -->
                                            <img src="http://www.cjdru.org/sites/default/files/newsletter/header.jpg" style="max-width:600px;" id="headerImage campaign-icon" mc:label="header_image" mc:edit="header_image" mc:allowdesigner mc:allowtext />
                                            <!-- // End Module: Standard Header Image \\ -->
                                          
                                          </td>
                                      </tr>
                                  </table>
                                  <!-- // End Template Header \\ -->
                              </td>
                          </tr>
                        <tr>
                            <td align="center" valign="top">
                                  <!-- // Begin Template Body \\ -->
                                <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                                  <tr>
                                    <td colspan="3" valign="top" class="bodyContent">
                                      
                                          <!-- // Begin Module: Standard Content \\ -->
                                          <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                              <tr>
                                                  <td valign="top">
                                                      <div mc:edit="std_content00">
                                                        <h1><?php print $title; ?></h1>
                                                        <?php print $body; ?>
                                                      </div>
                                                  </td>
                                              </tr>
                                          </table>
                                          <!-- // End Module: Standard Content \\ -->
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <td valign="top" width="280" class="leftColumnContent">
                                      
                                          <!-- // Begin Module: Top Image with Content \\ -->
                                          <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                              <tr mc:repeatable>
                                                  <td valign="top">
                                                      <img src="http://gallery.mailchimp.com/653153ae841fd11de66ad181a/images/placeholder_260.gif" style="max-width:260px;" mc:label="image" mc:edit="tiwc300_image00" />
                                                      <div mc:edit="tiwc300_content00">
                                                       <h4 class="h4">Heading 4</h4>
                                                         <strong>Repeatable content blocks:</strong> Repeatable sections are noted with plus and minus signs so that you can add and subtract content blocks. You can also <a href="http://www.mailchimp.com/kb/article/how-do-i-work-with-repeatable-content-blocks" target="_blank">get a little fancy</a>: repeat blocks and remove all text to make image "gallery" sections, or do the opposite and remove images for text-only blocks!
                                                      </div>
                                                  </td>
                                              </tr>
                                          </table>
                                          <!-- // End Module: Top Image with Content \\ -->
                                      
                                      </td>
                                    <td valign="top" width="280" class="rightColumnContent">
                                      
                                          <!-- // Begin Module: Top Image with Content \\ -->
                                          <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                              <tr mc:repeatable>
                                                  <td valign="top">
                                                      <img src="http://gallery.mailchimp.com/653153ae841fd11de66ad181a/images/placeholder_260.gif" style="max-width:260px;" mc:label="image" mc:edit="tiwc300_image01" />
                                                      <div mc:edit="tiwc300_content01">
                                                       <h4 class="h4">Heading 4</h4>
                                                         <strong>Repeatable content blocks:</strong> Repeatable sections are noted with plus and minus signs so that you can add and subtract content blocks. You can also <a href="http://www.mailchimp.com/kb/article/how-do-i-work-with-repeatable-content-blocks" target="_blank">get a little fancy</a>: repeat blocks and remove all text to make image "gallery" sections, or do the opposite and remove images for text-only blocks!
                                                      </div>
                                                  </td>
                                              </tr>
                                          </table>
                                          <!-- // End Module: Top Image with Content \\ -->
                                      
                                      </td>
                                  </tr>
                                </table>
                            <!-- // End Template Body \\ -->
                            </td>
                        </tr>
                      <tr>
                          <td align="center" valign="top">
                            <!-- // Begin Template Footer \\ -->