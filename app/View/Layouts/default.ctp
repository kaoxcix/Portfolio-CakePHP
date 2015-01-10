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
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('materialize');
		echo $this->Html->css('main-portfolio');
		echo $this->Html->script('jquery-1.11.2.js');
		echo $this->Html->script('materialize.js');
		echo $this->Html->script('main-portfolio.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <header>
    	
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo valign-wrapper">
        	<h1>NINE<strong>KAO</strong></h1>
        </li>
        <li ><a href=""><i class="mdi-action-account-box"></i>ABOUT</a></li>
        <li><a href=""><i class="mdi-action-account-box"></i>Menu-2</a></li>
        <li><a href=""><i class="mdi-action-account-box"></i>Menu-3</a></li>
        <li><a href=""><i class="mdi-action-account-box"></i>Menu-4</a></li>
      </ul>
    </header> <!-- End main -->
    
    <main>
    <div class="container">
		<?php echo $this->fetch('content'); ?>
    
    </div> <!-- End container -->
    </main> <!-- End main -->
  </body>
</html>
