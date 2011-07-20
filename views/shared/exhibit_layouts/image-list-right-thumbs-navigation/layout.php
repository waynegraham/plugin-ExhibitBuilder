<?php 
/**
 *	@name: Image List Right Thumbs;
 *	@description: An image gallery, with the thumbnail image on the right;
 *	@author: Wayne Graham; 
*/
?>

	<div class="image-list-right-thumbs">
		<?php for ($i=1; $i <= 8; $i++): ?>
			<?php if(exhibit_builder_use_exhibit_page_item($i)):?>
			    <div class="exhibit-item">
					<?php echo exhibit_builder_exhibit_display_item(array('imageSize'=>'thumbnail'), array('class'=>'permalink')); ?>
					<?php if($text = exhibit_builder_page_text($i)): ?>
			        <div class="exhibit-text"><?php echo $text; ?></div>
					<?php endif; ?>
			    </div>
			<?php endif; ?>
		<?php endfor;?>
	</div>