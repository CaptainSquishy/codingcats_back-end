<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "Bouwgroep-B.S.H" ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->css('materialize.min');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery');
		echo $this->Html->script('materialize.min');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?= $this->element('header')?>
	
	<div id="content">
		<div class="container">
			<?php echo $this->Flash->render(); ?>
			  <div class="fixed-action-btn horizontal click-to-toggle">
			    <a class="btn-floating btn-large red">
			      <i class="material-icons">menu</i>
			    </a>
			    <ul>
			      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
			      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
			      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
			      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
			    </ul>
			  </div>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	
	<?= $this->element('footer')?>
</body>
</html>