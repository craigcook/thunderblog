<?php
/**
 * Displays tags for a post.
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<div class="tags">
	<?php
	$posttags = get_the_tags();
	if ($posttags):
		_e('Tags:');
		foreach($posttags as $tag): ?>
			<a class="tag" href="<?= esc_attr(get_tag_link($tag->term_id)) ?>"><?= $tag->name ?> </a>
		<?php endforeach;
	endif;
	?>
</div>