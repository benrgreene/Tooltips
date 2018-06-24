<span class="tooltip__container tooltip__container--<?php echo $atts['position']; if( true === $atts['underline'] ): echo ' underline'; endif; ?>">
  <span class="tooltip__tip"><span class="tooltip__tip-content"><?php echo $atts['tip']; ?></span></span>
  <?php echo $content; ?>
</span>