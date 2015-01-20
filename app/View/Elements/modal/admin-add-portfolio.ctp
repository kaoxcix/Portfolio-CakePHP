<div id="admin-add-portfolio" class="my-modal">
		<div class="my-modal-dialog addport-modal">
		<!-- header -->
		<div class="row">
			<div class="col s10"><h4>ADMIN ZONE</h4>Add your portfolio</div>
			<div class="col s2 textRight"><h4>
			<?php 
				echo $this->Html->link('<i class="mdi-navigation-close"></i>','#',
				array('class' => 'modal-close blue-grey-text', 'escape' => false));
			?>
			</h4></div>
		</div>
		<!-- body -->
			<div class="row">
			<div class="col s12">
			<?php 
				echo $this->Form->create('Portfolio', array('type' => 'file', 'url' => array('controller' => 'Portfolios', 'action' => 'add')));
				echo $this->Form->input('title',array());
				echo $this->Form->input('detail',array('type' => 'textarea', 'class' => 'materialize-textarea'));
				echo $this->Form->input('demo',array('label' => 'Demo link'));
				echo $this->Form->input('image.', array('label' => 'Upload images to gallery (Only JPEG file)','type' => 'file', 'multiple' => true, 'class' => 'upload-image-profile'));
				echo $this->Form->button('Cancel', array('type' => 'reset', 'class' => 'btn blue-grey darken-2 right'));
				echo $this->Form->end(array('label' => 'Add', 'class' => 'btn blue-grey darken-2 right'));
			?>
			</div>
			</div>
		</div>
</div>
</div>