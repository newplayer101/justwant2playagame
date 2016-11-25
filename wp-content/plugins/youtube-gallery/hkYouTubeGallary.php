<?php
/*
Plugin Name: Husker YouTube Gallary 
Plugin URI:http://www.huskerinfotech.com/index.php/wordpress-plugins
Description: Manage and display Your Youtube Video with  lightbox option. create page with shortcode [hk_youtube].
Version: 0.3
Author: Husker infotech
Author URI: http://huskerinfotech.com/
License: GPLv2
*/

/**
 * Flushes rewrite rules on plugin activation to ensure portfolio posts don't 404
 * http://codex.wordpress.org/Function_Reference/flush_rewrite_rules
 */
error_reporting(0);
add_action('admin_head', 'my_Vedioaction_javascript');

function my_Vedioaction_javascript()
 {
?>
<script type="text/javascript">
   jQuery(document).ready(function(){
                         jQuery('#post').attr('enctype','multipart/form-data');
                         jQuery('#post').attr('encoding', 'multipart/form-data');                           
                 });
                
</script>
    
<?php
}
function yougallary_activation() {
	$sql = "CREATE TABLE `wp_gallary_setting` (
  				   id INT(10) unsigned NOT NULL auto_increment,
				   width varchar(150),
				   height varchar(255),
				   lightbox varchar(255),
				   pageno INT(1) UNSIGNED NOT NULL DEFAULT '0',
     			   pagecolumn INT(1) UNSIGNED NOT NULL DEFAULT '0',
				   PRIMARY KEY (id) 
				) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;";
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
		global $wpdb;
		$wpdb->query("INSERT INTO  `wp_gallary_setting` (width ,height ,lightbox ,pageno ,pagecolumn) VALUES (250,250,'No',5 ,2)");
	yougallary();
	flush_rewrite_rules();
	
}

register_activation_hook( __FILE__, 'yougallary_activation' );
function showMessage($message, $errormsg = false)
{
	if ($errormsg) {
		echo '<div id="message" class="error">';
	}
	else {
		echo '<div id="message" class="updated fade">';
	}

	echo "<p><strong>$message</strong></p></div>";
}   
function yougallary() 
{
	if($_SESSION['output'] != "")
	{
	showMessage($_SESSION['output']);
	unset($_SESSION['output']);
	}
		//add_submenu_page('edit.php?post_type=yougallary', 'Options', 'Options', 'manage_options', 'wiki-options', array(&$this, 'options_page') );
	$labels = array(
		'name' => __( 'YouTube gallary', 'yougallary' ),
		'singular_name' => __( 'YouTube gallary Item', 'yougallary' ),
		'add_new' => __( 'Add New Item', 'yougallary' ),
		'add_new_item' => __( 'Add New YouTube gallary Item', 'yougallary' ),
		'edit_item' => __( 'Edit YouTube gallary Item', 'yougallary' ),
		'new_item' => __( 'Add New YouTube gallary Item', 'yougallary' ),
		'view_item' => __( 'View Item', 'yougallary' ),
		'search_items' => __( 'Search YouTube gallary', 'yougallary' ),
		'not_found' => __( 'No YouTube gallary items found', 'yougallary' ),
		'not_found_in_trash' => __( 'No YouTube gallary items found in trash', 'yougallary' )
	);

	$args = array(
    	'labels' => $labels,
    	'public' => true,
		//'supports' => array( 'title', 'editor', 'thumbnail', 'comments' ),
		'supports' => array( 'title', 'editor', '', '' ),
		'capability_type' => 'post',
		'rewrite' => array("slug" => "yougallary"), // Permalinks format
		'menu_position' => 5,
		'has_archive' => true
	); 

	register_post_type('yougallary', $args );
	
	add_action( 'add_meta_boxes', 'thumb_Vediomage' );
		function thumb_Vediomage()
		{
		add_meta_box( 'add_thumb_Vedioimage', 'Thumb Image', 'add_thumb_Vedioimage', 'yougallary', 'normal', 'high' );
		}
		function add_thumb_Vedioimage( $post )
		{
		echo '<input type="file" name="vedioImage" id="vedioImage" >';
		}		
   		$taxonomy_yougallary_category_labels = array(
		'name' => _x( 'YouTube gallary  Categories', 'yougallary' ),
		'singular_name' => _x( 'YouTube gallary  Category', 'yougallary' ),
		'search_items' => _x( 'Search YouTube gallary  Categories', 'yougallary' ),
		'popular_items' => _x( 'Popular YouTube gallary  Categories', 'yougallary' ),
		'all_items' => _x( 'All YouTube gallary  Categories', 'yougallary' ),
		'parent_item' => _x( 'Parent YouTube gallary  Category', 'yougallary' ),
		'parent_item_colon' => _x( 'Parent YouTube gallary  Category:', 'yougallary' ),
		'edit_item' => _x( 'Edit YouTube gallary  Category', 'yougallary' ),
		'update_item' => _x( 'Update YouTube gallary  Category', 'yougallary' ),
		'add_new_item' => _x( 'Add New YouTube gallary  Category', 'yougallary' ),
		'new_item_name' => _x( 'New YouTube gallary  Category Name', 'yougallary' ),
		'separate_items_with_commas' => _x( 'Separate YouTube gallary  categories with commas', 'yougallary' ),
		'add_or_remove_items' => _x( 'Add or remove YouTube gallary  categories', 'yougallary' ),
		'choose_from_most_used' => _x( 'Choose from the most used YouTube gallary  categories', 'yougallary' ),
		'menu_name' => _x( 'YouTube gallary  Categories', 'yougallary' ),
   		 );
	
		$taxonomy_yougallary_category_args = array(
			'labels' => $taxonomy_yougallary_category_labels,
			'public' => true,
			'show_in_nav_menus' => true,
			'show_ui' => true,
			'show_tagcloud' => true, 
			'hierarchical' => true,
			'rewrite' => true,
			'query_var' => true
		);
	
   	   register_taxonomy( 'yougallary_category', array( 'yougallary' ), $taxonomy_yougallary_category_args );
	   
	   
	   add_action( 'add_meta_boxes', 'yougallary_images' );
	function yougallary_images()
		{
			add_meta_box( 'my-meta-box-id', 'Gallary', 'add_Vedio_url', 'yougallary', 'normal', 'high' );
		}

	function add_Vedio_url( $post )
		{
		global $wpdb;
		$data = $wpdb->get_row("SELECT * FROM wp_postmeta where meta_key ='gallary_url' and post_id =".$_REQUEST['post']);
		?>
			Add Vedio Url:
			<input type="text" name="gallary_url" id="gallary_url"  style="width: 707px;"  value="<?php echo $data->meta_value; ?>"/>
		<?php
		}
			
		add_action('save_post', 'save_details');
		function save_details(){
	
		$folder = ABSPATH.'wp-content/plugins/hkYouTubeGallary/upload/';
		chmod($folder, 0777); 
		$cnt = count($_FILES["vedioImage"]["tmp_name"]);
		$arr =$_FILES["vedioImage"]["tmp_name"];
		$arrName = $_FILES["vedioImage"]["name"];
		move_uploaded_file($arr,$folder. $arrName);
		$_POST["vedioImage"] = $arrName;
		
		global $post;
        update_post_meta($post->ID, "gallary_url", $_POST["gallary_url"]);
        update_post_meta($post->ID, "vedioImage", $_POST["vedioImage"]);
		
		}	
		add_action('admin_menu', 'register_my_custom_submenu_page');
		function register_my_custom_submenu_page() {
		add_submenu_page( 'edit.php?post_type=yougallary', 'Settings', 'Settings', 'manage_options', 'settings', 'settings_page_callback' ); 
		}
		function settings_page_callback() {
		global $wpdb;
		$data = $wpdb->get_row("SELECT * FROM wp_gallary_setting ");
		echo "<form name='setting' id='setting' method='post' action='#'>";
		echo "<br />";
		echo 'Dimensions   Width  ';
		echo '<input type="text" name="width" id="width" value="'.$data->width.'"  /> x Height   <input type="text" name="height" id="height" value="'.$data->height.'" /> ';
		echo "<br /><br />";
		echo 'Open in LightBox   ';
		?>
		<select name='lightbox' id='lightbox'><option value='Yes'  <?php if($data->lightbox == 'Yes'){ ?>selected='selected'<?php } ?>>Yes</option><option value='No' <?php if($data->lightbox == 'No'){ ?>selected='selected'<?php } ?>>No</option></select>
	    <?php
		echo "<br /><br />";
		echo 'Vedio per page  ';
		echo '<input type="text" name="vedioNo" id="vedioNo" value="'.$data->pageno.'" />';
		echo "<br /><br />";
		echo 'Page Layout:  ';
		?>
        <select name='pagecolumn' id='pagecolumn'><option value='1'  <?php if($data->pagecolumn == '1'){ ?>selected='selected'<?php } ?>>1 Column</option><option value='2' <?php if($data->pagecolumn == '2'){ ?>selected='selected'<?php } ?>>2 Column</option><option value="3" <?php if($data->pagecolumn == '3'){ ?>selected='selected'<?php } ?>>3 Column</option></select>
        <?php
		echo "<br /><br />";
		echo '<input type="submit" name="submit" value="submit"  />';
		echo "</form>";
		if(isset($_REQUEST['submit']))
		{
		$wpdb->query("UPDATE wp_gallary_setting SET width = '".$_REQUEST['width']."', height ='".$_REQUEST['height']."' ,lightbox = '".$_REQUEST['lightbox']."' ,pageno ='".$_REQUEST['vedioNo']."',pagecolumn ='".$_REQUEST['pagecolumn']."'");
		$status = "Settings are saved...";
		$_SESSION['output'] = $status;
		header( 'Location: edit.php?post_type=yougallary' ) ;
		}
		}
}
		add_action( 'init', 'yougallary' );
		function huskerGallary_convertShortcodeToGallary($params, $content = null)
		{
		?>
        <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/plugins/hkYouTubeGallary/js/mootools.js"></script>
		<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/plugins/hkYouTubeGallary/js/swfobject.js"></script>
        <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/plugins/hkYouTubeGallary/js/videobox.js"></script>
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/plugins/hkYouTubeGallary/css/videobox.css" type="text/css" media="screen" />
        <?php
		global $wpdb;
		if(isset($params['category']))
		{
		$query="SELECT wp_terms.term_id ,wp_term_taxonomy.`term_taxonomy_id`,wp_term_relationships.`object_id`,
								wp_posts.`ID`,wp_posts.`post_content`,wp_posts.`post_name`,wp_posts.`post_title`
								FROM wp_terms 
								LEFT JOIN wp_term_taxonomy ON wp_term_taxonomy.`term_id`=wp_terms.`term_id`
								LEFT JOIN wp_term_relationships ON wp_term_relationships.`term_taxonomy_id` = wp_term_taxonomy.`term_taxonomy_id`
								LEFT JOIN wp_posts ON wp_posts.`ID` = wp_term_relationships.`object_id`
								WHERE slug ='".$params['category']."' AND wp_posts.`post_status`='publish' AND wp_posts.`post_type`='yougallary'
								";
		}
		else
		{
				$query="SELECT wp_posts.`ID`,wp_posts.`post_content`,wp_posts.`post_name`,wp_posts.`post_title`
		FROM  wp_posts 
		WHERE  wp_posts.`post_status`='publish' AND wp_posts.`post_type`='yougallary'
								";
		}
		$settings = $wpdb->get_row("select * from wp_gallary_setting");

		$rows_per_page =$settings->pageno;
		$current = (intval(get_query_var('paged'))) ? intval(get_query_var('paged')) : 1;
		
		$rows = $wpdb->get_results($query);
		global $wp_rewrite;
		$pagination_args = array(
		 'base' => @add_query_arg('paged','%#%'),
		 'format' => '',
		 'total' => ceil(sizeof($rows)/$rows_per_page),
		 'current' => $current,
		 'show_all' => false,
		 'type' => 'plain',
		);
		if( $wp_rewrite->using_permalinks() )
        $pagination_args['base'] = user_trailingslashit( trailingslashit( remove_query_arg('s',get_pagenum_link(1) ) ) . 'page/%#%/', 'paged');
		if( !empty($wp_query->query_vars['s']) )
		$pagination_args['add_args'] = array('s'=>get_query_var('s'));
		$start = ($current - 1) * $rows_per_page;
		$end = $start + $rows_per_page;
		$end = (sizeof($rows) < $end) ? sizeof($rows) : $end;
		
		 $col =$settings->pagecolumn;
		 $dif = intval($end-$start);
		 $rowVal = intval($dif/$col);
		 $rowNo = intval($dif - $rowVal);
		 $a =$start;
		 if($col != 1)
		 {
		 echo '<table>';
		 for($i=0;$i<$rowNo;$i++)
		 {
			echo  '<tr>';
			for($j=0;$j<$col;$j++)
			{
			if($a == $end)
			{
			break;
			}
			echo"<td>";
			
			$row = $rows[$a];
		   	$vedio  = $wpdb->get_row("select * from wp_postmeta where meta_key ='gallary_url' and post_id =".$row->ID);	
			$reverse = strrev( $vedio->meta_value );
			$rest = substr($reverse, 0, 11);	
			if($settings->lightbox != "No")
				{
				$vedioImg  = $wpdb->get_row("select * from wp_postmeta where meta_key ='vedioImage' and post_id =".$row->ID);
				$vedioDisplay = '<a href= "http://www.youtube.com/watch?v='.strrev( $rest ).'" rel="vidbox" title="caption"><img src="'.get_site_url().'/wp-content/plugins/hkYouTubeGallary/upload/'.$vedioImg->meta_value.'" width="'.$settings->width.'" height="'.$settings->height.'"></a> ';
				echo $vedioDisplay;
				}
				else
				{
				echo '<iframe width="'.$settings->width.'" height="'.$settings->height.'" src="http://www.youtube.com/embed/'.strrev( $rest ).'" frameborder="0" allowfullscreen width="'.$settings->width.'" height="'.$settings->height.'"></iframe>';
				}
				?>
				<div>
				<?php echo "<i>".$row->post_name ."</i><br />"; 
					  echo substr($row->post_content, 0,125)."..."; 	
				?>
       			</div>	
                <?php
				echo "</td>";
				$a++;
				}
				echo '</tr>';
				$a+$col;
				}
				echo '</table>';
		 }
		
		 else
		 {
		 ?>
             <table>
        <?php
		
		
		for ($i=$start;$i<$end ;++$i)
		 {
		$row = $rows[$i];
		$vedio  = $wpdb->get_row("select * from wp_postmeta where meta_key ='gallary_url' and post_id =".$row->ID);	
		$reverse = strrev( $vedio->meta_value );
		$rest = substr($reverse, 0, 11);	
		if($settings->lightbox != "No")
			{
			$vedioImg  = $wpdb->get_row("select * from wp_postmeta where meta_key ='vedioImage' and post_id =".$row->ID);
	        $vedioDisplay = '<a href= "http://www.youtube.com/watch?v='.strrev( $rest ).'" rel="vidbox" title="caption"><img src="'.get_site_url().'/wp-content/plugins/hkYouTubeGallary/upload/'.$vedioImg->meta_value.'" width="'.$settings->width.'" height="'.$settings->height.'"></a> ';
			echo $vedioDisplay;
			}
			else
			{
			echo '<iframe width="'.$settings->width.'" height="'.$settings->height.'" src="http://www.youtube.com/embed/'.strrev( $rest ).'" frameborder="0" allowfullscreen width="'.$settings->width.'" height="'.$settings->height.'"></iframe>';
			}
		?>
        <div>
        <?php echo "<i>".$row->post_name ."</i><br />"; 
			  echo substr($row->post_content, 0,125)."..."; 	
		?>
        </div>
        <?php
		}
		
		
		?>
        </table>
         <?php
		 }		
		echo paginate_links($pagination_args);
		}
		add_shortcode('hk_youtube','huskerGallary_convertShortcodeToGallary');
		?>
