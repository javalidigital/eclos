<?php 
		  //@TODO enqueu script for videojs
		  $post_id =  get_the_ID();
		  $video_type = get_post_meta($post_id, "select_videos" ,true );
		  if( $video_type === "vimeo_hosted"  ) {//vimeo_video_id
		  //enqueu script for fitVids
		  wp_enqueue_script('fitvids_js');
		  ?>
          <?php
		  $vimeo_id = get_post_meta($post_id, "vimeo_video_id",true );
		  	if($vimeo_id){?>
            <div class="featured_image video_post">
                <?php echo '<ifr'.'ame width="770" height="375" allowfullscreen="" mozallowfullscreen webkitallowfullscreen src="http://player.vimeo.com/video/'.$vimeo_id.'"></iframe>';?>
            </div>
            	<script>
				  jQuery(document).ready(function(){
					"use script";
					// For Fit Vimeo Youtube Videos Target your .container, .wrapper, .post, etc.
					jQuery(".featured_image").fitVids();
				  });
				</script>
            <?php
			}// if($vimeo_id) ends?>
	<?php }
		  if( $video_type === "youtube_hosted" ) {//youtube_video_id
		  //enqueu script for fitVids
		  wp_enqueue_script('fitvids_js');
		  ?>
          	<?php
			$protocol = is_ssl() ? 'https' : 'http';
			$youtube_id = get_post_meta($post_id, "youtube_video_id",true );
			if($youtube_id){?>
            <div class="featured_image video_post">
 				<?php echo '<ifr'.'ame title="YouTube video player" class="youtube-player" type="text/html" width="770" height="430" src="'.$protocol.'://www.youtube.com/embed/'.$youtube_id.'" frameborder="0" allowFullScreen></iframe>';?>
            </div>
            	<script>
				  jQuery(document).ready(function(){
					"use script";
					// For Fit Vimeo Youtube Videos Target your .container, .wrapper, .post, etc.
					jQuery(".featured_image").fitVids();
				  });
				</script>
            <?php
			}// if($youtube_id) ends?>
	<?php }
	      if( $video_type === "self_hosted" ) {//self_hosted_mp4 //self_hosted_webm
		  //@enqueu script for video_js
		  wp_enqueue_style('video-js_css');
		  wp_enqueue_script('video_js');
		  	$self_hosted_mp4 = get_post_meta($post_id, "self_hosted_mp4",true );
			$self_hosted_webm = get_post_meta($post_id, "self_hosted_webm",true );
			$self_hosted_poster = get_post_meta($post_id, "self_hosted_poster",true );
			$article_image = aq_resize($self_hosted_poster['url'], 770, 430, true, true, true);
			$article_image = $article_image?$article_image:$self_hosted_poster;
			if($self_hosted_mp4 || $self_hosted_webm){
			?>
            <div class="featured_image video_post">
                <video 
                	width="770" 
                    height="430" 
                    id="video-post-id-<?php echo $post_id;?>" 
                    class="video-js vjs-default-skin" 
                    controls preload="auto" 
                    <?php 
					if($article_image){?>
					poster="<?php echo $article_image; ?>" 
                    <?php 
					}//if($article_image) ends?>
                    data-setup="{}">
                    <?php 
					if($self_hosted_mp4){?>
                	<source src="<?php echo $self_hosted_mp4['url'];?>" type="video/mp4">
                    <?php
					}//if($self_hosted_mp4) ends?>
                    <?php 
					if($self_hosted_webm){?>
                    <source src="<?php echo $self_hosted_webm['url'];?>" type="video/webm">
                    <?php
					}//if($self_hosted_webm) ends?>
                </video>
            </div>
            <?php
			} //if($self_hosted_mp4 || $self_hosted_webm) ends?>
	<?php }?>
                    
