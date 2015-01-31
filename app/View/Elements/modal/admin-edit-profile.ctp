<div id="admin-edit-profile" class="my-modal">
		<div class="my-modal-dialog">
		<!-- header -->
		<div class="row">
			<div class="col s10"><h4>ADMIN ZONE</h4>Please edit your profile carefully</div>
			<div class="col s2 textRight"><h4>
			<?php 
				echo $this->Html->link('<i class="mdi-navigation-close"></i>','#',
				array('class' => 'modal-close blue-grey-text', 'escape' => false));
			?>
			</h4></div>
		</div>
		<!-- body -->
			<div class="row">
			<div class="col s12 m4 l4">
			<?php 
				$edit_view = $this->requestAction(array('controller' => 'Profiles', 'action' => 'view'));
				$edit_name = $edit_view['Profile']['name'];
				$edit_intro = $edit_view['Profile']['intro'];
				$edit_skill = $edit_view['Profile']['skill'];
				$edit_email = $edit_view['Profile']['email'];
				$edit_mobile = $edit_view['Profile']['mobile'];
				$edit_facebook = $edit_view['Profile']['facebook'];
				echo $this->Html->image('profile/avatar.jpg?'.time());
				echo $this->Form->create('Profile', array('type' => 'file', 'url' => array('controller' => 'Profiles', 'action' => 'edit')));
				echo $this->Form->input('avatar', array('label' => 'Only 300x300 px JPEG file','type' => 'file', 'class' => 'upload-image-profile'));
			?>
			</div>
			<div class="col s12 m8 l8">
			<?php 
				echo $this->Form->input('name',array('label' => 'Your name', 'value' => "$edit_name"));
				echo $this->Form->input('skill',array('label' => 'Your skill', 'type' => 'textarea', 'value' => "$edit_skill", 'class' => 'materialize-textarea'));
				echo $this->Form->input('intro',array('label' => 'Your introduction', 'type' => 'textarea', 'value' => "$edit_intro", 'class' => 'materialize-textarea'));
			?>
			<div class="col s12 m4 l4 pLeft"><?php echo $this->Form->input('email',array('label' => 'Your email', 'value' => "$edit_email"));?></div>
			<div class="col s12 m4 l4 pLeft"><?php echo $this->Form->input('mobile',array('label' => 'Your mobile', 'value' => "$edit_mobile"));?></div>
			<div class="col s12 m4 l4 pLeft"><?php echo $this->Form->input('facebook',array('label' => 'Your facebook', 'value' => "$edit_facebook"));?></div>
			<?php 	
			echo $this->Form->button('Cancel', array('type' => 'reset', 'class' => 'btn teal darken-3 right'));
			echo $this->Form->end(array('label' => 'Update', 'class' => 'btn teal darken-3 right'));
			?>
			</div>
		</div>
		</div>
</div>