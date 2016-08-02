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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');



		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');



		echo $this->Html->css('admin/font-awesome');
		echo $this->Html->css('admin/custom');
		echo $this->Html->css('admin/bootstrap');
		echo $this->Html->css('admin/morris/morris-0.4.3.min');
		echo $this->Html->css('admin/dataTables/dataTables.bootstrap');



		echo $this->Html->script('admin/jquery-1.10.2');
		echo $this->Html->script('admin/bootstrap.min');
		echo $this->Html->script('admin/jquery.metisMenu');
		echo $this->Html->script('admin/morris/raphael-2.1.0.min');
		echo $this->Html->script('admin/morris/morris');
		echo $this->Html->script('admin/dataTables/dataTables.bootstrap');
		echo $this->Html->script('admin/dataTables/jquery.dataTables');
		echo $this->Html->script('admin/custom');



	?>
</head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<body>
	<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand">
						<?php echo $this->Html->link('FDU_24', array('controller' => 'Dashboards', 'action' => 'index', 'class' => "navbar-brand")); ?>
					</div>
			</div>
<div style="color: white;
				padding: 10px 10px 5px 50px;
				float: right;
				font-size: 16px;">
				<?php echo $this->Html->link( 'Logout', array('controller' => 'users', 'action' => 'logout'),array('class'=>'btn btn-danger square-btn-adjust'));?>
</div>

	</nav>
		 <!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
	<div class="sidebar-collapse">
		<ul class="nav" id="main-menu">
			<li class="text-center">
			<?php echo $this->Html->link($this->Html->image('find_user.png'),array('controller'=>'user','action'=>'regist'),array('escape'=>false));?>
			</li>
			<li>
				<?php echo $this->Html->link('管理画面TOP', array('controller' => 'Dashboards', 'action' => 'index')); ?>
			<li>
				<?php echo $this->Html->link('職業一覧', array('controller' => 'Professions', 'action' => 'admin_index')); ?>
			</li>
			<li>
				<?php echo $this->Html->link('性格一覧', array('controller' => 'CheckPersonals', 'action' => 'admin_index')); ?>
			</li>
			<li>
				<?php echo $this->Html->link('趣味一覧', array('controller' => 'CheckLikes', 'action' => 'admin_index')); ?>
			</li>
			<li  >
				<?php echo $this->Html->link('お問い合わせ', array('controller' => 'CheckLikes', 'action' => 'admin_index')); ?>
			</li>
			<li  >
				<?php echo $this->Html->link('管理ユーザー', array('controller' => 'Users', 'action' => 'admin_add')); ?>
			</li>
		</ul>
	</div>
</nav>
	<div id="page-wrapper" >
			<?php echo $this->Flash->render(); ?>
			<?php echo $this->fetch('content'); ?>
	</div>
	<div id="footer">
	</div>

</body>
</html>
