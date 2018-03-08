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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="affordable and professional web design">
	<meta name="keywords" content="web design, affordable web design, professional web design">
	<meta name="author" content="Chris Rowel">
	<title>
		<?php echo 'Peñaranda'; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->Html->css('/plugins/font-awesome/css/font-awesome.min');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery-3.1.0.min');
		echo $this->Html->script('/plugins/scrollreveal/dist/scrollreveal.min');	
	?>
</head>
<body>

	<?= $this->element('header'); ?>
	
	<div class="main-content">
		<?= $this->fetch('content'); ?>
	</div>
	
	<?= $this->element('footer'); ?>

	<?= $this->Html->script('common'); ?>
</body>
</html>
