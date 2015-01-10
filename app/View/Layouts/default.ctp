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
        <li><a href=""><i class="mdi-action-account-box"></i>PORTFOLIO</a></li>
        <li><a href=""><i class="mdi-action-account-box"></i>CONTACT ME</a></li>
      </ul>
    </header> <!-- End main -->
    
    <main>
		<?php echo $this->fetch('content'); ?> 
    </main> <!-- End main -->
  </body>
</html>
