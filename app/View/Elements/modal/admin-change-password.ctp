<div id="admin-change-password" class="my-modal">
		<div class="my-modal-dialog admin-modal">
		<!-- header -->
		<div class="row">
			<div class="col s10"><h4>ADMIN ZONE</h4>Please change your password carefully</div>
			<div class="col s2 textRight"><h4>
			<?php 
				echo $this->Html->link('<i class="mdi-navigation-close"></i>','#',
				array('class' => 'modal-close blue-grey-text tooltipped', 'data-position' => 'top', 'data-tooltip' => 'Close', 'escape' => false));
			?>
			</h4></div>
		</div>
		<!-- body -->
			<div class="row">
				<div class="col s12">
				<?php 
				echo $this->Form->create('User', array('url' => array('controller' => 'Users', 'action' => 'change_password')));
				echo $this->Form->input('password');
				echo $this->Form->input('password_confirm', array('type'=>'password'));
				echo $this->Form->button('Cancel', array('type' => 'reset', 'class' => 'btn blue-grey darken-2 right'));
				echo $this->Form->end(array('label' => 'Change Password', 'class' => 'btn blue-grey darken-2 right'));
				?>
				</div>
			</div>
		</div>
</div>