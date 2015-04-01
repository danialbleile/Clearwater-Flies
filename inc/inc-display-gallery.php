<ul class="gallery<?php if ( ! empty( $display_ar['img'] ) ) echo ' has-image';?> <?php echo $display_ar['post_type'];?>">
	<?php if ( ! empty( $display_ar['img'] ) ): ?>
	<li class="image-wrapper">
    	<?php echo $display_ar['img']; ?>
    </li>
    <?php endif;?>
    <li class="caption">
    	<?php if ( ! empty( $display_ar['title'] ) ):?>
    	<h4>
        	<?php echo $display_ar['title'];?>
        </h4>
        <?php endif;?>
        <?php if ( ! empty( $display_ar['excerpt'] ) ):?>
    	<span class="excerpt">
        	<?php echo $display_ar['excerpt'];?>
        </span>
        <?php endif;?>
    </li>
</ul>