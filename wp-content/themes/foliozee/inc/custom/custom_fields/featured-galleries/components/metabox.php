<?php

function fg_register_metabox() {
/*
	$options = get_option( 'gl_gallery_settings' );
	$types = $options[ 'gl_post_types' ] ;
	if( !isset( $types ) && ! $types ):
		$types = array('post', 'page');
	endif;
*/
	$post_types	= apply_filters( 'fg_post_types', array('post', 'portfolio') );
	$context	= apply_filters( 'fg_context', 'normal' );
	$priority	= apply_filters( 'fg_priority', 'high' );

	foreach( $post_types as $post_type ) {

		add_meta_box( 'featuredgallerydiv', __( 'Featured Gallery', 'kraftives' ), 'fg_display_metabox', $post_type, $context, $priority );

	}

}

function fg_display_metabox() {

	global $post;

	// Get the Information data if its already been entered
	$galleryHTML = '';
	$selectText = 'Select Images';
	$visible = ''; //SHOULD WE SHOW THE REMOVE ALL BUTTON? THIS WILL BE APPLIED AS A CLASS, AND IS BLANK BY DEFAULT.
	$galleryArray = get_post_gallery_ids($post->ID);
	$galleryString = get_post_gallery_ids($post->ID, 'string');
	if (!empty($galleryString)){
		foreach ($galleryArray as &$id) {
			$galleryHTML .= '<li><button>&#xf335</button><img id="'.$id.'" src="'.wp_get_attachment_url($id).'"></li> ';
		}
		$selectText = 'Edit Selection';
		$visible = " visible";
	} update_post_meta($post->ID, 'fg_temp_metadata', $galleryString); // Overwrite the temporary featured gallery data with the permanent data. This is a precaution in case someone clicks Preview Changes, then exits withing saving. ?>

	<input type="hidden" name="fg_temp_noncedata" id="fg_temp_noncedata" value="<?php echo wp_create_nonce("fg_temp_noncevalue"); ?>" />

	<input type="hidden" name="fg_perm_noncedata" id="fg_perm_noncedata" value="<?php echo wp_create_nonce( plugin_basename(__FILE__) ); ?>" />

	<input type="hidden" name="fg_perm_metadata" id="fg_perm_metadata" value="<?php echo $galleryString; ?>" data-post_id="<?php echo $post->ID; ?>" />

	<button class="button" id="fg_select"><?php echo $selectText; ?></button>

	<button class="button<?php echo $visible; ?>" id="fg_removeall">Remove All</button>

	<ul><?php echo $galleryHTML; ?></ul><div style="clear:both;"></div><?php

}

function fg_save_perm_metadata($post_id, $post) {
	$post_type = folio_get_current_post_type();
	if($post_type==='portfolio' || $post_type==='post'){
		// Noncename
		
		if(isset($_POST['fg_perm_noncedata'])){if ( !wp_verify_nonce( $_POST['fg_perm_noncedata'], plugin_basename(__FILE__) )) {return $post->ID;}}
		// Verification of User
		if ( !current_user_can( 'edit_post', $post->ID )) {return $post->ID;}
		// OK, we're authenticated: we need to find and save the data
		if(isset($_POST['fg_perm_metadata'])){
			$events_meta['fg_perm_metadata'] = $_POST['fg_perm_metadata'];
			// Add values of $events_meta as custom fields
			foreach ($events_meta as $key => $value) {
				if( $post->post_type == 'revision' ) return;
				$value = implode(',', (array)$value);
				if(get_post_meta($post->ID, $key, FALSE)) {
					update_post_meta($post->ID, $key, $value);
				} else {
					add_post_meta($post->ID, $key, $value);
				}
				if(!$value) delete_post_meta($post->ID, $key);
			}
		}
	}

}