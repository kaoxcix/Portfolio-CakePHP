<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$siteDescription = "NINEKAO.COM | My Portfolio and Profile";

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $siteDescription ?>:
		<?php //echo $this->fetch('title'); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('materialize');
		echo $this->Html->css('main-portfolio');
		echo $this->Html->script('jquery-1.11.2.js');
		echo $this->Html->script('materialize.js');
		echo $this->Html->script('main-portfolio.js');
		echo $this->Html->script('simple-typing-carousel.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <header>
      <nav class="hide-on-med-and-up">
          <div class="nav-wrapper">
          	<a href="#" class="brand-logo">NINE<strong>KAO</strong></a>
          	<a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
          </div>
      </nav>
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo valign-wrapper">
        	NINE<strong>KAO</strong>
        </li>
        <div class="profile-image hide-on-small-only">
			<?php echo $this->Html->image('profile/avartar.png'); ?>
		</div>
        <li><?php echo $this->html->link("<i class='mdi-action-account-box'></i>PORTFOLIO","",array('escape' => false )); ?></li>
        <li><?php echo $this->html->link("<i class='mdi-action-account-box'></i>CONTACT ME","#contact-me",array('class' => 'modal-trigger', 'escape' => false )); ?></li>
        <li><?php echo $this->html->link("<i class='mdi-action-account-box'></i>ADMIN ZONE","#admin-login",array('class' => 'modal-trigger', 'escape' => false )); ?></li>
      </ul>
    </header> <!-- End main -->
    
    <main>
		<?php echo $this->fetch('content'); ?> 
    </main> <!-- End main -->
    
     <!-- contact-me Modal -->
	<div id="contact-me" class="modal">
		<h4>SAY HELLO</h4>
			<?php 
				echo $this->Form->create('contact');
	            echo "If you need anything send me something";
	        ?>
	        <br><br>
	        <div class="row">
      		<div class="input-field col s4"><?php echo $this->Form->input('name', array('class' => '')); ?></div>
	        <div class="input-field col s4"><?php echo $this->Form->input('subject'); ?></div>
	        <div class="input-field col s4"><?php echo $this->Form->input('email'); ?></div>
	        </div>
	        
	        <div class="row">
      		<div class="input-field col s12"><?php echo $this->Form->input('message',array('rows' => '5')); ?></div>
      		</div>
	        <?php 
	   		 	echo $this->Form->end(array('label' => 'Send', 'class' => 'btn modal-close  blue-grey darken-2 left')); 
	   		 	echo $this->Form->button('Cancel', array('class' => 'btn modal-close  blue-grey darken-2 left'));
   		 	?>
	</div>
    
    <!-- admin-login Modal -->
	<div id="admin-login" class="modal">
		<h4>ADMIN ZONE</h4>
			<?php 
				echo $this->Form->create('login');
	            echo "Please enter your username and password";
	        ?>
	        	<br><br>
	        	
	            <div class="row"><div class="input-field col s6"><?php echo $this->Form->input('username'); ?></div>
	        	<div class="input-field col s6"><?php echo $this->Form->input('password'); ?></div></div>
	       	<?php 
	   		 	echo $this->Form->end(array('label' => 'Login', 'class' => 'btn modal-close  blue-grey darken-2 left')); 
	   		 	echo $this->Form->button('Cancel', array('class' => 'btn modal-close  blue-grey darken-2 left'));
   		 	?>
	</div>
	
	
	
  </body>
</html>
