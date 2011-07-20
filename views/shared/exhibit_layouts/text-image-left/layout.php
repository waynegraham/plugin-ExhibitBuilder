<div class="text-image-left">
	<div class="primary">
		<?php if(exhibit_builder_use_exhibit_page_item(1)):?>
		<div class="exhibit-item">
			<?php echo exhibit_builder_exhibit_display_item(array('imageSize'=>'fullsize'), array('class'=>'permalink')); ?>
			
			<?php //echo exhibit_builder_exhibit_display_caption(1); ?>
			
			<div class="exhibit-item">
    			<?php echo exhibit_builder_exhibit_display_item(array('imageSize'=>'fullsize'), array('class'=>'permalink')); ?>
    			<div class="exhibit-item-caption">
    			<?php echo item('Dublin Core', 'Title'); ?>
    			<?php echo item('Dublin Core', 'Description'); ?>
    			<?php echo exhibit_builder_link_to_exhibit_item('Item Link'); ?>
    			</div>
    		</div>
			
		</div>
		<?php endif; ?>	
	</div>
	<div class="secondary">
		<div class="exhibit-text">
			<?php echo exhibit_builder_page_text(1); ?>
		</div>
	</div>
</div>