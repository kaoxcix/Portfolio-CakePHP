<div id="contact-me" class="my-modal">
		<div class="my-modal-dialog contactme-modal">
		<!-- header -->
		<div class="row">
			<div class="col s10"><h4>SAY HELLO</h4>If you need anything send me something</div>
			<div class="col s2 textRight"><h4><?php echo $this->Html->link('<i class="mdi-navigation-close"></i>','#',
					array('class' => 'modal-close blue-grey-text', 'escape' => false)); ?>
			</h4></div>
		</div>
		<!-- body -->	
		<?php
		$contact_view = $this->requestAction(array('controller' => 'Profiles', 'action' => 'view'));
		$contact_name = $contact_view['Profile']['name'];
		$contact_email = $contact_view['Profile']['email'];
		$contact_mobile = $contact_view['Profile']['mobile'];
		$contact_facebook = $contact_view['Profile']['facebook'];
		?>  

    <div class="row">
    	<div class="col s12 m12 l12 input-field"><i class="mdi-social-person prefix"></i>
    		<?php echo $this->Form->input(null, array('label' => 'Name','div'=>false, 'disabled' => true, 'value' => "$contact_name")); ?>
   		</div>
   		<div class="col s12 m12 l12 input-field"><i class="mdi-social-public prefix"></i>
    		<?php echo $this->Form->input(null, array('label' => 'Facebook','div'=>false, 'disabled' => true, 'value' => "$contact_facebook")); ?>
   		</div>
    	<div class="col s12 m5 l5 input-field"><i class="mdi-hardware-phone-android prefix"></i>
    		<?php echo $this->Form->input(null, array('label' => 'Mobile','div'=>false, 'disabled' => true, 'value' => "$contact_mobile")); ?>
   		</div>
   		<div class="col s12 m7 l7 input-field"><i class="mdi-communication-email prefix"></i>
    		<?php echo $this->Form->input(null, array('label' => 'Email','div'=>false, 'disabled' => true, 'value' => "$contact_email")); ?>
   		</div>
   		

    </div>

		
			  
		</div>
</div>