<?php
  $url = 'http://fdu24.com/'. $_SERVER["REQUEST_URI"];
  $line = rawurlencode( "テキスト " . $url );

  if (!empty($datas)) {
    $text = $datas['Profession']['profession_name'].'ってなに？
    気になるお給料から'.$datas['Profession']['profession_name'].'のなり方まで
    知らなかった職業を知れる「FDU-24」';
  } else {
    $text = 'まだあなたが知らないだけで、この世界には色々な職業が存在します。
    「FDU-24:どこよりも簡単な職業診断チェック」はコアでマイナーな職業を紹介する職業診断を個性としています';
  }

  $twitter = rawurlencode($url);
  $text = rawurlencode($text);
?>
<div id="fh5co-blog" class="animate-box sns_box">
  <div class="text-center container detail_container fh5co-heading">
      <h3 style="color:#323232; margin-top:0px; font-size:18px;">友達・知り合いに拡散する</h3>
  <ul class="sns_list">
    <a href="http://www.facebook.com/share.php?u=http://fdu24.com/<?php echo $_SERVER["REQUEST_URI"] ?>" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">
      <li class="sns_button" style="background:#3b5998;">
        <?php echo $this->Html->image('face.png', array('class' => 'sns_button')); ?>シェアする
      </li>
    </a>
    <a target="blank" href="https://twitter.com/share?url=<?php echo $twitter ?>/&text=<?php echo $text ?>" onclick="window.open(this.href, 'tweetwindow', 'width=550, height=450,personalbar=0,toolbar=0,scrollbars=1,resizable=1'); return false;" data-wpel-link="external" rel="external noopener noreferrer">
      <li class="sns_button" style="background:#04a2d6;">
        <?php echo $this->Html->image('twitter.png', array('class' => 'sns_button')); ?>つぶやく
      </li>
    </a>
    <a href="http://line.me/R/msg/text/<?php echo $line ?>" target="_blank" class="header-sns-btn header-sns-btn-line">
      <li class="sns_button" style="background:#00b900;">
        <?php echo $this->Html->image('line.png', array('class' => 'sns_button')); ?>LINEを送る
      </li>
    </a>


  </ul>
  </div>
</div>
<div class="animate-box fh5co-cta">
  <div class="text-center container fh5co-heading">
    <h3 style="color:#323232; margin-top:0px; font-size:18px;">簡単な職業診断チェック!!</h3>
    <a href="/" class="occupation_link">職業診断スタート</a>
  </div>
</div>
