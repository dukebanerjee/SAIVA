<?php $name = t(user_load($user->uid)->field_first_name['und']['0']['value']) ?>
<?php $images = $base_path . $directory . '/images' ?>

<div id="header">
  <div id="top-gutter-left"></div>
  <div id="top-center">
    <img id="logo" src="<?php print $images ?>/logo.jpg" />
    <div id="menu-destinations">
        <?php print drupal_render(menu_tree('menu-destinations')) ?>
        <?php if($name) { ?>
        <ul>
          <li><?php print l('Logout', 'user/logout', array()) ?></li>
          <li><?php print l('Welcome ' . $name, '<front>', array()) ?></li>
        </ul>
        <?php } ?>
    </div>
    <?php print render($page['header']); ?>
    <div id="tagline">Promote friendship, education and well-being through volunteering</div>
  </div>
  <div id="top-gutter-right"></div>
  <div id="top-bottom-separator"></div>
  <div id="bottom-gutter-left"></div>
  <div id="bottom-center">
    <div id="main-menu">
      <?php print drupal_render(menu_tree('main-menu')) ?>
    </div>
  </div>
  <div id="bottom-gutter-right"></div>
  <div id="clear"></div>
  <div id="highlighted">
    <img src="<?php print $images ?>/joinnow.jpg" />
    <?php print render($page['highlighted']); ?>
  </div>
  <div id="columns-top"></div>
  <div id="columns">
    <div id="content">
      <?php print render($page['content']); ?>
    </div>
    <div id="footer1">
      <div id="footer1-gutter-left"></div>
      <div id="footer1-center">
        <div id="menu-quick-links">
          <h2>Quick Links</h2>
          <?php print drupal_render(menu_tree('menu-quick-links')) ?>
        </div>
      </div>
      <div id="footer1-gutter-right"></div>
    </div>
    <div id="footer2">
      <div id="footer2-gutter-left"></div>
      <div id="footer2-center">
        <div id="footer-left">SAIVA - Division of the Saxena Foundation, Inc.</div>
        <div id="footer-right">Copyright &copy; 2010-2011 SAIVA. All Rights Reserved.</div>
      </div>
      <div id="footer2-gutter-right"></div>
    </div>
  </div>
</div>

<br /><br /><br /><br /><br /><br />
<table width="970" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" valign="top">
            <table width="980" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="4" align="left" valign="top">
                  <img src="<?php print $base_path . $directory ?>/images/top-left.jpg" width="4" height="93" />
                </td>
                <td width="970" align="left" valign="top" style="background-image: url(<?php print $base_path . $directory ?>/images/top-center.jpg); background-repeat: repeat-x; ">
                  <table width="929" border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                      <td align="left" valign="top">
                        <table width="929" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="324" align="left" valign="top" style="padding-top:5px;">
                              <img src="<?php print $base_path . $directory ?>/images/logo.jpg" width="141" height="59" />
                            </td>
                            <td width="605" align="left" valign="top">
                              <table width="605" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td align="left" valign="top">
                                    <table width="605" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="20" align="left" valign="top">
                                          <img src="<?php print $base_path . $directory ?>/images/-t-left.jpg" width="20" height="32" />
                                        </td>
                                        <td width="585" align="left" valign="top" style="background-image: url(<?php print $base_path . $directory ?>/images/-t-center.jpg); background-repeat: repeat-x; ">
                                          <div class="toplink" style="padding-top:5px;">
                                            <a href="blog/">Blog</a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="photo_gallery.php">Photos</a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="videos.php">Videos</a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="recipes.php">Recipes</a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="testimonials.php">Testimonials</a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="#">Welcome Shubhada Saxena</a>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="left" valign="top" style="padding-top:5px; padding-right:">
                                    <form name="formlogin" action="" method="post" onsubmit="return checkUserEmpty();">
                                      <table width="605" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td width="192" align="right" valign="middle" class="loginhead">
										    Login Here
										  </td>
                                          <td width="158" align="right" valign="top">
                                            <label><input name="email1" id="email1" type="text" value="Username" onclick="javascript:this.value=''" /></label>
                                          </td>
                                          <td width="165" align="right" valign="top" style="padding-right:10px;">
                                            <label><input name="pass" id="pass" type="password" value="Password" onclick="javascript:this.value=''" /></label>
                                          </td>
                                          <td width="90"><input name="cmdUserSubmit" type="submit" class="enterbtn" value="" />
                                          </td>
                                        </tr>
                                      </table>
                                    </form>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" style="padding-top:5px;">
                        <table width="929" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="619" align="left" valign="top" class="ltagline">
                              Promote friendship, education and well-being through volunteering
                            </td>
                            <td width="13" align="left" valign="top">
                              &nbsp;
                            </td> 
                            <td width="297" align="left" valign="middle" class="password">
                              <a href="forgot.php">&raquo; Forgot Your Password?</a>
                              &nbsp;&nbsp;
                              <a href="login.php">Login</a>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
                <td width="6" align="left" valign="top">
                  <img src="<?php print $base_path . $directory ?>/images/top-right.jpg" width="6" height="93" />
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top">
            <img src="<?php print $base_path . $directory ?>/images/top-bottom.jpg" width="980" height="7" />
          </td>
        </tr>
        <tr>
          <td align="left" valign="top">
            <table width="980" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="7" align="left" valign="top">
                  <img src="<?php print $base_path . $directory ?>/images/tab-left.jpg" width="7" height="52" />
                </td>
                <td width="966" align="center" valign="middle" background="<?php print $base_path . $directory ?>/images/tab-center.jpg">
                  <table width="965" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="center" valign="top">
                        <a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/home1.jpg',1)"><img src="<?php print $base_path . $directory ?>/images/home1.jpg" name="Image6" width="90" height="52" border="0" id="Image6" /></a>
                      </td>
                      <td align="center" valign="top">
                        <a href="#" onmouseout="MM_swapImgRestore(); delayhidemenu()" onmouseover="MM_swapImage('Image7','','images/about1.jpg',1); dropdownmenu(this, event, menu1, '130px')"><img src="<?php print $base_path . $directory ?>/images/about.jpg" name="Image7" width="102" height="52" border="0" id="Image7" /></a>
                      </td>
                      <td align="center" valign="top">
                        <a href="#" onmouseout="MM_swapImgRestore(); delayhidemenu()" onmouseover="MM_swapImage('Image8','','images/programs1.jpg',1); dropdownmenu(this, event, menu2, '130px')"><img src="<?php print $base_path . $directory ?>/images/programs.jpg" name="Image8" width="203" height="52" border="0" id="Image8" /></a>
                      </td>
                      <td align="center" valign="top">
                        <a href="#" onmouseout="MM_swapImgRestore(); delayhidemenu()" onmouseover="MM_swapImage('Image9','','images/news1.jpg',1); dropdownmenu(this, event, menu3, '160px')"><img src="<?php print $base_path . $directory ?>/images/news.jpg" name="Image9" width="166" height="52" border="0" id="Image9" /></a>
                      </td>
                      <td align="center" valign="top">
                        <a href="contact.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','images/contact1.jpg',1)"><img src="<?php print $base_path . $directory ?>/images/contact.jpg" name="Image10" width="113" height="52" border="0" id="Image10" /></a></td>
                      <td align="center" valign="top"><a href="signup.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','images/join1.jpg',1)"><img src="<?php print $base_path . $directory ?>/images/join.jpg" name="Image11" width="88" height="52" border="0" id="Image11" /></a></td>
                    </tr>
                  </table>
                </td>
                <td width="7" align="left" valign="top">
                  <img src="<?php print $base_path . $directory ?>/images/tab-right.jpg" width="7" height="52" />
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
      <table width="980" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="760" align="left" valign="middle" style="padding-left:15px;">
            <img src="<?php print $base_path . $directory ?>/images/joinnow.jpg" width="739" height="60" />
          </td>
          <td width="186" align="left" valign="middle">
            <input name="textfield" type="text" value="Search" size="24" />
          </td>
          <td width="34" align="left" valign="middle">
            <img src="<?php print $base_path . $directory ?>/images/go.jpg" width="28" height="26" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
      <img src="<?php print $base_path . $directory ?>/images/box1-top.jpg" width="980" height="6" />
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" background="<?php print $base_path . $directory ?>/images/box1-center.jpg">
      <table width="942" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="left" valign="top" style="padding-top:10px;">
            <table width="942" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="668" align="left" valign="top">
                  <table width="668" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="left" valign="top">
                        <img src="<?php print $base_path . $directory ?>/images/box2-top.jpg" width="668" height="46" />
                      </td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" background="<?php print $base_path . $directory ?>/images/box2-center.jpg" style="padding-top:10px; padding-bottom:10px;">
                        <table width="639" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tbody>
                            <tr>
                              <t    d width="412" align="left" valign="top">
                                <table width="399" border="0" cellspacing="0" cellpadding="0">
                                  <tbody>
                                    <tr>
                                      <td align="left" valign="top" class="text">
                                        SAIVA (South Asians&rsquo; International Volunteer Association) is a non-profit group aimed at promoting well-being, education and friendship through volunteering.<br />
                                        <br />
                                        We focus on enabling seniors to participate in the communities where they live either on a temporary or permanent basis. SAIVA aims to empower South Asians to be active participants in the communities in which they live around the world.  SAIVA members actively gain information on community services and volunteer opportunities while identifying ways of sharing and engaging in such opportunities.
                                      </td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top"><img width="399" height="11" alt="" src="<?php print $base_path . $directory ?>/images/box5-top.jpg" /></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top" background="<?php print $base_path . $directory ?>/images/box5-center.jpg">
                                        <table width="379" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tbody>
                                            <tr>
                                              <td align="left" valign="top">
                                                <img width="278" height="27" alt="" src="<?php print $base_path . $directory ?>/images/activities-head.jpg" />
                                              </td>
                                            </tr>
                                            <tr>
                                              <td align="left" valign="top" class="text3">
                                                <strong>Friendship:</strong> Weekly workshops, Monthly Appreciation Lunches, Annual Picnics, Days or Service, Community Volunteering<br />
                                                <strong>Education: </strong>Computer Classes, Yoga/Meditation sessions, Volunteer opportunities at Any Baby Can, Recording for the Blind &amp; Dyslexic, Communities in Schools etc. to support education<br />
                                                <strong>Well-Being:</strong> Health screening camps, Bone Marrow registries, Well-being workshops, Self-awareness &amp; Healthy Relationships workshops
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="top">
                                        <img width="399" height="8" alt="" src="<?php print $base_path . $directory ?>/images/box5-bottom.jpg" />
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                              <td width="227" align="left" valign="top">
                                <img width="227" height="362" alt="" src="<?php print $base_path . $directory ?>/images/main-image.jpg" />
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><img src="<?php print $base_path . $directory ?>/images/box2-bottom.jpg" width="668" height="6" /></td>
                    </tr>
                  </table>
                </td>
                <td width="24" align="left" valign="top">&nbsp;</td>
                <td width="250" align="left" valign="top">
                  <table width="250" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="left" valign="top">
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                          <input type="hidden" name="cmd" value="_donations">
                          <input type="hidden" name="business" value="saivamembership@gmail.com">
                          <input type="hidden" name="lc" value="US">
                          <input type="hidden" name="item_name" value="SAIVA, a division of the Saxena Foundation">
                          <input type="hidden" name="no_note" value="0">
                          <input type="hidden" name="currency_code" value="USD">
                          <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
                          <input type="image" src="<?php print $base_path . $directory ?>/images/donate.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                          <!-- <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->
                        </form>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" style="padding-bottom:10px;">
                        <a href="event_calendar.php"><img src="<?php print $base_path . $directory ?>/images/event-icon.jpg" width="249" height="46" border="0" /></a>
                      </td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" class="text5">
                        <span class="toplinknormal"><a href="event_detail.php?eventid=5">this is testing event title</a></span><br />2011-06-09,&nbsp;10am - 12am<br /> 
                        Ram lila maidan, jawaharlal Nehru Marg,jaipur,rajasthan 
                        ....................................................................
                        ....................................................................
                      </td>
                    </tr>
                    <tr>
                      <td align="left" valign="top" class="text5">
                        <span class="toplinknormal"><a href="event_detail.php?eventid=4">this is testing event title</a></span><br />2011-05-24,&nbsp;10am - 12am<br /> 
                        birla mandir,jawaharlal Nehru Marg,jaipur,rajasthan 
                        ....................................................................
                        ....................................................................
                    </td>
                  </tr>
                  <tr>
                    <td align="right" class="toplink" style="padding-right:25px"><a href="events.php">View all</a></td>
                  </tr> 
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="left" valign="top" style="padding-top:10px;">
                <table width="942" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="11" align="left" valign="top"><img src="<?php print $base_path . $directory ?>/images/box3-left.jpg" width="11" height="36" /></td>
                    <td width="920" align="left" valign="middle" background="<?php print $base_path . $directory ?>/images/box3-center.jpg">
                      <table width="920" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="136" align="left" valign="middle" class="loginhead">Bookmark &amp; Share</td>
                          <td width="367" align="left" valign="middle"><img src="<?php print $base_path . $directory ?>/images/facebook.jpg" width="19" height="19" border="0" /><img src="<?php print $base_path . $directory ?>/images/twitter.jpg" width="16" height="19" hspace="5" border="0" /></td>
                          <td width="23" align="left" valign="middle"><img src="<?php print $base_path . $directory ?>/images/divider.jpg" width="1" height="36" /></td>
                          <td width="69" align="left" valign="middle" class="loginhead">Quick Links</td>
                          <td width="325" align="right" valign="middle" class="toplink"><a href="staticpage.php?pageid=7">Privacy Policy</a>  &nbsp;&nbsp;&nbsp; |  &nbsp;&nbsp;&nbsp; <a href="staticpage.php?pageid=7">Terms of Use</a>   &nbsp;&nbsp;&nbsp;|   &nbsp;&nbsp;&nbsp;<a href="contact.php">Email & Contact us</a></td>
                        </tr>
                      </table>
                    </td>
                    <td width="11" align="left" valign="top">
                      <img src="<?php print $base_path . $directory ?>/images/box3-right.jpg" width="11" height="36" />
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td align="left" valign="top" style="padding-top:7px; padding-bottom:7px;">
                <table width="942" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="10" align="left" valign="top">
                      <img src="<?php print $base_path . $directory ?>/images/box4-left.jpg" width="10" height="50" />
                    </td>
                    <td width="921" align="left" valign="middle" style="background-image: url(<?php print $base_path . $directory ?>/images/box4-center.jpg); background-repeat: repeat-x; ">
                      <table width="921" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="565" align="left" valign="middle" class="copyright">SAIVA - Division of the Saxena Foundation, Inc.</td>
                          <td width="356" align="right" valign="middle" class="copyright">Copyright &copy; 2010-2011 SAIVA. All Rights Reserved.</td>
                        </tr>
                      </table>
                    </td>
                    <td width="11" align="left" valign="top">
                      <img src="<?php print $base_path . $directory ?>/images/box4-right.jpg" width="11" height="50" />
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<?php db_query("DELETE FROM {cache};") ?>
<?php print render($page['header']); ?>
<?php print drupal_render(menu_tree('user-menu')); ?>