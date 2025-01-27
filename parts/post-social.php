<?php
/**
 * Displays share buttons for social networks (Twitter, LinkedIn) for a post.
 *
 * @package WordPress
 * @subpackage Thunderblog
 * @since 0.0.1
 */
?>

<section class="social" id="c">
	<!-- Mail -->
	<a
		href="mailto:?subject=<?php echo get_the_title() ?>&body=<?php echo get_the_excerpt() ?> <?php echo get_permalink() ?>"
		class="social-mail"
		target="_blank"
		title="<?php _e( 'Share this article via email', 'thunderblog' ); ?>"
		aria-label="<?php _e( 'Share this article via email', 'thunderblog' ); ?>"
	>
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-m" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<rect x="3" y="5" width="18" height="14" rx="2" />
			<polyline points="3 7 12 13 21 7" />
		</svg>
	</a>
	<!-- Twitter -->
	<a
		href="https://twitter.com/intent/tweet?original_referer=<?php echo urlencode( get_site_url() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>&url=<?php echo urlencode(get_permalink()) ?>&via=mozthunderbird"
		class="social-twitter"
		target="_blank"
		title="<?php _e( 'Share this article on Twitter', 'thunderblog' ); ?>"
		aria-label="<?php _e( 'Share this article on Twitter', 'thunderblog' ); ?>"
	>
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-m" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
		</svg>
	</a>
	<!-- WhatsApp -->
	<a
		href="https://api.whatsapp.com/send?phone=&text=<?php echo get_the_title() ?> <?php echo get_permalink() ?>"
		class="social-whatsapp"
		target="_blank"
		title="<?php _e( 'Share this article via WhatsApp', 'thunderblog' ); ?>"
		aria-label="<?php _e( 'Share this article via WhatsApp', 'thunderblog' ); ?>"
	>
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-m" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
			<path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
		</svg>
	</a>
	<!-- Telegram -->
	<a
		href="https://telegram.me/share/url?url=<?php echo get_permalink() ?>&text=<?php echo get_the_title() ?>"
		class="social-telegram"
		target="_blank"
		title="<?php _e( 'Share this article via Telegram', 'thunderblog' ); ?>"
		aria-label="<?php _e( 'Share this article via Telegram', 'thunderblog' ); ?>"
	>
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-m" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
		</svg>
	</a>
	<!-- LinkedIn -->
	<a
		href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( get_permalink() ); ?>"
		class="social-linkedin"
		target="_blank"
		title="<?php _e( 'Share this article on LinkedIn', 'thunderblog' ); ?>"
		aria-label="<?php _e( 'Share this article on LinkedIn', 'thunderblog' ); ?>"
	>
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-m" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<rect x="4" y="4" width="16" height="16" rx="2" />
			<line x1="8" y1="11" x2="8" y2="16" />
			<line x1="8" y1="8" x2="8" y2="8.01" />
			<line x1="12" y1="16" x2="12" y2="11" />
			<path d="M16 16v-3a2 2 0 0 0 -4 0" />
		</svg>
	</a>
	<!-- Facebook -->
	<a
		href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>"
		class="social-facebook"
		target="_blank"
		title="<?php _e( 'Share this article on Facebook', 'thunderblog' ); ?>"
		aria-label="<?php _e( 'Share this article on Facebook', 'thunderblog' ); ?>"
	>
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-m" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
		</svg>
	</a>
	<!-- Reddit -->
	<a
		href="http://www.reddit.com/submit?url=<?php echo urlencode( get_permalink() ); ?>&title=<?php echo get_the_title() ?>"
		class="social-reddit"
		target="_blank"
		title="<?php _e( 'Share this article on Reddit', 'thunderblog' ); ?>"
		aria-label="<?php _e( 'Share this article on Reddit', 'thunderblog' ); ?>"
	>
		<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-m" viewBox="0 0 24 24">
			<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
			<path d="M12 8c2.648 0 5.028 .826 6.675 2.14a2.5 2.5 0 0 1 2.326 4.36c0 3.59 -4.03 6.5 -9 6.5c-4.875 0 -8.845 -2.8 -9 -6.294l-1 -.206a2.5 2.5 0 0 1 2.326 -4.36c1.646 -1.313 4.026 -2.14 6.674 -2.14z" />
			<path d="M12 8l1 -5l6 1" />
			<circle cx="19" cy="4" r="1" />
			<circle cx="9" cy="13" r=".5" fill="currentColor" />
			<circle cx="15" cy="13" r=".5" fill="currentColor" />
			<path d="M10 17c.667 .333 1.333 .5 2 .5s1.333 -.167 2 -.5" />
		</svg>
	</a>
</section>
