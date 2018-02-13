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

$cakeDescription = __d('cake_dev', 'FDU-24 簡単で当たる！職業診断 -コアでマイナーで珍しい職業-');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
            <?php if (empty($datas)): ?>
                <?php echo $cakeDescription ?>
            <?php else: ?>
                <?php echo $this->fetch('title'); ?> :
                <?php echo $cakeDescription ?>
            <?php endif; ?>       
        </title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('animate');
		//echo $this->Html->css('icomoon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('flexslider');
                echo $this->Html->css('slider-pro');
		echo $this->Html->css('style');
		echo $this->Html->script('jquery.min.js');
		echo $this->Html->script('main');
		echo $this->Html->script('jquery.easing.1.3');
		echo $this->Html->script('jquery.waypoints.min');
		echo $this->Html->script('jquery.flexslider-min');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->script('modernizr-2.6.2.min');
                echo $this->Html->script('jquery.sliderPro.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
<link rel="shortcut icon" href="/img/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="/img/180.png">
<?php if (!empty($datas['Profession'])): ?>
<meta name="description"content="<?php echo preg_replace('/\n|\r|\r\n/', '', $datas['Profession']['job_content']); ?>" />
<?php else: ?>
<meta name="description" content="まだあなたが知らないだけで、この世界には色々な職業が存在します。「FDU-24:簡単で当たる！職業診断」はコアでマイナーで珍しい職業を紹介する職業診断を個性としています、もしかしたらあなたの能力が発揮できる職業が見つかるかもしれません。">
<?php endif; ?>
<meta name="google-site-verification" content="x353_ujDJJV6H__kTHhDVCtuDklhAc5OQ5pHIx23fUI" />
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-9667532213038599",
    enable_page_level_ads: true
  });
</script>

<?php
// echo $_SERVER["REQUEST_URI"];
// echo pr($datas['title']);


 ?>
<meta property="fb:app_id" content="1910038995905929" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://fdu24.com<?php echo $_SERVER["REQUEST_URI"]; ?>" />
<?php if (!empty($datas['title'])): ?>
<meta property="og:title" content="<?php echo $datas['title']; ?>:FDU-24" />
<meta property="og:description" content="<?php echo preg_replace('/\n|\r|\r\n/', '', $datas['Profession']['job_content']); ?>" />
<meta property="og:image" content="http://fdu24.com<?php echo $datas['Image'][0]['Image']['url']; ?>" />
<?php else: ?>
<meta property="og:title" content="FDU-24:簡単で当たる！職業診断" />
<meta property="og:description" content="まだあなたが知らないだけで、この世界には色々な職業が存在します。「FDU-24:簡単で当たる！職業診断」はコアでマイナーで珍しい職業を紹介する職業診断を個性としています、もしかしたらあなたの能力が発揮できる職業が見つかるかもしれません。" />
<meta property="og:image" content="http://fdu24.com/files/updir/20170209010031_0.jpeg" />
<?php endif; ?>
<meta property="og:site_name" content="FDU-24:簡単で当たる！職業診断" />


<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@fdu24com" />
<meta name="twitter:player" content="@fdu24com" />
<meta name="twitter:domain" content="http://fdu24.com" />
<meta name="twitter:url" content="http://fdu24.com<?php echo $_SERVER["REQUEST_URI"]; ?>" />
<?php if (!empty($datas['title'])): ?>
<meta name="twitter:image" content="http://fdu24.com<?php echo $datas['Image'][0]['Image']['url']; ?>" />
<?php else: ?>
<meta property="og:image" content="http://fdu24.com/files/updir/20170209010031_0.jpeg" />
<?php endif; ?>
</head>


<script type="text/javascript"src="//webfonts.sakura.ne.jp/js/sakura.js"></script>
<link href="https://fonts.googleapis.com/css?family=Denk+One" rel="stylesheet">
<meta name="viewport" content="width=device-width; initial-scale=1.0" />
<body>
<script type="text/javascript">
    window._pt_lt = new Date().getTime();
    window._pt_sp_2 = [];
    _pt_sp_2.push('setAccount,50cb4f1c');
    var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    (function() {
        var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
        atag.src = _protocol + 'js.ptengine.jp/pta.js';
        var stag = document.createElement('script'); stag.type = 'text/javascript'; stag.async = true;
        stag.src = _protocol + 'js.ptengine.jp/pts.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(atag, s); s.parentNode.insertBefore(stag, s);
    })();

$(function(){
	 $('#caption').sliderPro();
});

//シンプル


//キャプション付き
	$( document ).ready(function( $ ) {
		$('#caption').sliderPro({
			autoScaleLayers:false,//キャプションの自動変形
			waitForLayers: true,//キャプションのアニメーションが終了してからスライドするか
			width: 600,//横幅
			autoplay:false,//自動再生
			arrows: true,//左右の矢印
			buttons: true,//ナビゲーションボタン
			slideDistance:0,//スライド同士の距離
		});
	});



</script>

	<?php echo $this->element('head'); ?>
	<?php echo $this->Flash->render(); ?>
	<?php echo $this->fetch('content'); ?>
	<?php echo $this->element('foot'); ?>
</body>
</html>
