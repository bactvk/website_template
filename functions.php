<?php 
	// a
	function theme_settup() {
	    register_nav_menu('topmenu',__( 'Menu chính' ));

	    add_theme_support( 'post-thumbnails' ); //hiển thị khu vực upload image
	}
	add_action( 'init', 'theme_settup' );


	
	function pagination($pages = '', $range = 4){
		$showitems = ($range * 2)+1;
		global $paged;
		if(empty($paged)) $paged = 1;

		if($pages == ''){
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if(!$pages){
				$pages = 1;
			}
		}

		if(1 != $pages){
			echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
			if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
			if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
			for ($i=1; $i <= $pages; $i++){
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
					echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
				}
			}

			if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
			if ($paged < $pages - 1 && $page + $range - 1 < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged)."\">Last &raquo;</a>";

			echo "</div>\n";
		}

	}


?>