<?php
	 global $base_path;
	 $main_menu = menu_load_links('main-menu');

?>

<div class="navbar" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php print $base_path; ?>">College Women <img src="<?php print $base_path; ?>themes/sisters/resources/images/beta-badge.svg" alt="Beta" />
          <small class="hidden-sm">Documenting the History of Women in Higher Education</small></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav nav-links">

      	<?php foreach($main_menu as $menu): ?>
			<?php $path = drupal_get_path_alias($menu['link_path']); ?>

			<?php if(strpos($path,'http') !== false): ?>
	    		<li><a href="<?php print $menu['link_path']; ?>" target="_blank"><?php print $menu['link_title'] ?></a></li>
	    	<?php else: ?>
	    		<li><a href="<?php print $base_path; ?><?php print drupal_get_path_alias($menu['link_path']) ?>"><?php print $menu['link_title'] ?></a></li>
	    	<?php endif; ?>
		<?php endforeach; ?>

        <li class="divider-vertical"></li>
        <li class="browse-li">
        	<a href="<?php print $base_path; ?>browse">

                <span class="hidden-sm">Explore Collections</span>
            </a>
        </li>
        <!-- <li class="advance-search-li advance-search-link" data-toggle="modal">
        	<span class="glyphicon glyphicon-search" aria-hidden="true"></span> <span class="hidden-sm">Search</span>
        </li> -->
      </ul>
    </div>
  </div>
</div>
