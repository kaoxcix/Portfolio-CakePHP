<div id="admin-edit-profile" class="my-modal">
		<div class="my-modal-dialog">
		<!-- header -->
		<div class="row">
			<div class="col s10"><h4>ADMIN ZONE</h4>Please edit your profile carefully</div>
			<div class="col s2 textRight"><h4>
			<?php 
				echo $this->Html->link('<i class="mdi-navigation-close"></i>','#',
				array('class' => 'modal-close blue-grey-text tooltipped', 'data-position' => 'top', 'data-tooltip' => 'Close', 'escape' => false));
			?>
			</h4></div>
		</div>
		<!-- body -->
		<?php 
			
		?>
			<div class="row">
			<div class="col s12 m4 l4">
			<?php 
				$edit = $this->requestAction('/Portfolios/edit_profile');
				$name = $edit['Profile']['name'];
				$intro = $edit['Profile']['intro'];
				$skill = $edit['Profile']['skill'];
				echo $this->Html->image('profile/avatar.jpg',array('class' => ''));
				echo $this->Form->create('Profile', array('type' => 'file', 'url' => array('controller' => 'Portfolios', 'action' => 'edit_profile')));
				echo $this->Form->input('avatar', array('label' => 'Only 300x300 px JPEG file','type' => 'file', 'class' => 'upload-image-profile'));
			?>
			</div>
			<div class="col s12 m8 l8">
			<?php 
				
				echo $this->Form->input('name',array('label' => 'Your name', 'value' => "$name"));
				echo $this->Form->input('skill',array('label' => 'Your skill', 'type' => 'textarea', 'value' => "$skill", 'class' => 'materialize-textarea'));
				echo $this->Form->input('intro',array('label' => 'Your introduction', 'type' => 'textarea', 'value' => "$intro", 'class' => 'materialize-textarea'));
				echo $this->Form->button('Cancel', array('type' => 'reset', 'class' => 'btn blue-grey darken-2 right'));
				echo $this->Form->end(array('label' => 'Update', 'class' => 'btn blue-grey darken-2 right'));
			?>
			</div>
			</div>
		</div>
</div>