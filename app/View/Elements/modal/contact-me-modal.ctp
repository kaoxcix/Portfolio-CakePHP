<div id="contact-me" class="my-modal">
		<div class="my-modal-dialog">
		<!-- header -->
		<div class="row">
			<div class="col s10"><h4>SAY HELLO</h4>If you need anything send me something</div>
			<div class="col s2 textRight"><h4><?php echo $this->Html->link('<i class="mdi-navigation-close"></i>','#',
					array('class' => 'modal-close blue-grey-text tooltipped', 'data-position' => 'top', 'data-tooltip' => 'Close', 'escape' => false)); ?></h4></div>
		</div>
		<!-- body -->	
			<?php 
				echo $this->Form->create('contact');
	        ?>
	        <div class="row">
      		<div class="col s4"><?php echo $this->Form->input('name'); ?></div>
	        <div class="col s4"><?php echo $this->Form->input('subject'); ?></div>
	        <div class="col s4"><?php echo $this->Form->input('email'); ?></div>
	        </div>
	        
	        <div class="row">
      		<div class="col s12"><?php echo $this->Form->input('message',array('rows' => '5')); ?></div>
      		</div>
      		<div class="row">
	        <?php 
	   		 	echo $this->Form->end(array('label' => 'Send', 'class' => 'btn modal-close  blue-grey darken-2 left')); 
	   		 	echo $this->Form->button('Cancel', array('class' => 'btn modal-close  blue-grey darken-2 left'));
   		 	?>
   		 	</div>
		</div>
	</div>