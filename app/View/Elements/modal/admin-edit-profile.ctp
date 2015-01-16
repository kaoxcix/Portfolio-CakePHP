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
				echo $this->Html->image('profile/avartar.png',array('class' => '')); 
				echo $this->Form->create('Document', array('type' => 'file'));
				echo $this->Form->file('Document.submittedfile',array('class' => '', 'style' => 'height:36px;'));
				echo $this->Form->end(array('label' => 'Upload new picture', 'class' => 'btn modal-close  blue-grey darken-2 left')); 
			?>
			</div>
			<div class="col s12 m8 l8">
			<?php 
				$edit = $this->requestAction('/Portfolios/edit_profile');
				$name = $edit['Profile']['name'];
				$intro = $edit['Profile']['intro'];
				$skill = $edit['Profile']['skill'];
				echo $this->Form->create('Profile', array('url' => array('controller' => 'Portfolios', 'action' => 'edit_profile')));
				echo $this->Form->input('name',array('value' => "$name"));
				echo $this->Form->input('skill',array('value' => "$skill"));
				echo $this->Form->input('intro',array('value' => "$intro"));
				echo $this->Form->end(array('label' => 'Update', 'class' => 'btn blue-grey darken-2 left'));
				echo $this->Form->button('Cancel', array('class' => 'btn modal-close  blue-grey darken-2 left'));
			?>
			</div>
	        <div class="row">
	       		<?php 
	   		 	print_r($posts)
			    ?>
			</div>	
			
			</div>
		</div>
</div>