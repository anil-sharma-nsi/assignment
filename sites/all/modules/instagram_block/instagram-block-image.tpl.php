<?php
/**
 * @file
 * Default theme implementation of an Instagram image link.
 *
 * Available variables:
 * - post: The entire data array returned from the Instagram API request.
 * - href: The url to the Instagram post page.
 * - src: The source url to the instagram image.
 * - width: The display width of the image.
 * - height: The display height of the image.
 */
?>
<a class="group" target="_blank" data-instagram-rel="1" href="<?php print $href ?>">
  <img alt="<?php if(isset($post->caption->text)) print $post->caption->text; ?>" style="float: left; margin: 0 20px 10px 0px;-moz-box-shadow:3px 3px 2px 2px #ccc;-webkit-box-shadow: 3px 3px 2px 2px #ccc;box-shadow:3px 3px 2px 2px #ccc;" src="<?php print $src ?>">
</a>
