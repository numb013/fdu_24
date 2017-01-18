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

$cakeDescription = __d('cake_dev', 'FDU-24');
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

		echo $this->Html->css('animate');
		//echo $this->Html->css('icomoon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('flexslider');
		echo $this->Html->css('style');

		echo $this->Html->script('jquery.min.js');
		echo $this->Html->script('main');
		echo $this->Html->script('jquery.easing.1.3');
		echo $this->Html->script('jquery.waypoints.min');
		echo $this->Html->script('jquery.flexslider-min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('modernizr-2.6.2.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>



<link rel="shortcut icon" href="/img/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="/img/180.png">


  <meta name="description" content="まだあなたが知らないだけで、この世界には色々な職業が存在します。「FDU-24:どこよりも簡単な職業診断チェック」はコアでマイナーな職業を紹介する職業診断を個性としています、もしかしたらあなたの能力が発揮できる職業が見つかるかもしれません。まずはトップ画面の２択のうち1つを選び診断スタートして下さい。
">

</head>
<script type="text/javascript"src="//webfonts.sakura.ne.jp/js/sakura.js"></script>
<link href="https://fonts.googleapis.com/css?family=Denk+One" rel="stylesheet">
<meta name="viewport" content="width=device-width">
<script type="text/javascript">
jQuery(function($) {
var nav = $('#fixedBox'),
		offset = nav.offset();
	$(window).scroll(function () {
		if($(window).scrollTop() > offset.top) {
			nav.addClass('fixed');

			if ($(document).height() < $(window).scrollTop() + $(window).height() + 230) {
				$('.nav').css("display","none");
			} else {
				$('.nav').css("display","block");
			}
		}
	});
});
</script>

<body>
	<?php echo $this->element('head'); ?>
	<?php echo $this->Flash->render(); ?>
	<?php echo $this->fetch('content'); ?>
	<?php echo $this->element('foot'); ?>
</body>
</html>
