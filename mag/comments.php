<?php
if(post_password_required()){
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
		if (have_comments()) {
	?>
	 <div class="heading">
      <h2>All Comments:</h2>
    </div>
	<ol class="comment-list">
		<?php 
		$args = array(
		'walker'            => null,
		'max_depth'         => '',
		'style'             => 'ol',
		'callback'          => null,
		'end-callback'      => null,
		'type'              => 'all',
		'reply_text'        => 'Reply',
		'page'              => '', //1
		'per_page'          => '', //3
		'avatar_size'       => 40,
		'reverse_top_level' => null,
		'reverse_children'  => '',
		'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
		'short_ping'        => false,   // @since 3.6
	   'echo'              => true     // boolean, default is true
	);

		 	wp_list_comments($args); 
	 	?> 
	</ol>

	<?php
		if (!comments_open() && get_comments_number()) {
			# code...
		}
	}
	?>

	<?php 
		comment_form();
	?>
</div>