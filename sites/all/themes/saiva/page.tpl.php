<?php 
  $user_info = user_load($user->uid);
  $name = t(array_key_exists('und', $user_info->field_first_name) ? $user_info->field_first_name['und']['0']['value'] : $user->name);
  $images = $base_path . $directory . '/images';
?>

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
      <a id="main-content"></a>
      <?php if(!$is_front): ?>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <?php if(arg(0) == 'user' && arg(1) == 'register') { ?>
          <h1 class="title" id="page-title">Signup:</h1>
        <?php } else if ($node->type == 'article') { ?>
          <h1 class="title" id="page-title">News:</h1>
          <h2 class="article-title"><?php print $title; ?></h2>
        <?php } else if ($node->type == 'document') { ?>
          <h1 class="title" id="page-title">Documents:</h1>
          <h2 class="article-title"><?php print $title; ?></h2>
        <?php } else { ?>
          <h1 class="title" id="page-title"><?php print $title; ?>:</h1>
        <?php } ?>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php endif; ?>
      <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
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
<?php db_query("DELETE FROM {cache};") ?>
