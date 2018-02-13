<div id="fh5co-page">
<header id="fh5co-header" role="banner">
  <div class="container">
    <div class="header-inner">
      <h1 itemprop="name">
<?php if ($_SERVER['DOCUMENT_ROOT'] == '/Applications/MAMP/htdocs' || $_SERVER['DOCUMENT_ROOT'] == 'C:/xampp/htdocs' ): ?>
            <a href="/fdu24/">
          <?php else: ?>
            <a href="/">
          <?php endif; ?>
          FDU<span>-</span>24
        </a>
      </h1>
        <p class="title-small-text">簡単で当たる！<br>職業診断サイト</p>
    </div>
    <?php if(!empty($back_flag)): ?>
<?php if ($_SERVER['DOCUMENT_ROOT'] == '/Applications/MAMP/htdocs' || $_SERVER['DOCUMENT_ROOT'] == 'C:/xampp/htdocs' ): ?>
        <div class="history_back">
          <a href="/fdu24/">BACK</a>
        </div>
      <?php else: ?>
        <div class="history_back">
          <a href="/">BACK</a>
        </div>
      <?php endif; ?>
    <?php elseif(!empty($list_flag)): ?>
      <?php echo $this->Form->create('jobs', array('url' => 'index', 'type' => 'post')); ?>
        <?php foreach ($personalChecks as $key => $value): ?>
          <?php echo $this->Form->hidden('personal_checks.'.$key, array('value' => $value)); ?>
        <?php endforeach; ?>
      <?php echo $this->Form->input('BACK', array('type' => 'submit', 'label' => false, 'div' => false, 'class' => 'history_back', 'name' => 'back')); ?>
      <?php echo $this->Form->end(); ?>
    <?php elseif(!empty($search_flag)): ?>
      <div class="history_back">
        <a href="javascript:history.back();">BACK</a>
      </div>
    <?php elseif(!empty($first)): ?>
      <div class="history_back">
<?php if ($_SERVER['DOCUMENT_ROOT'] == '/Applications/MAMP/htdocs' || $_SERVER['DOCUMENT_ROOT'] == 'C:/xampp/htdocs' ): ?>
          <a href="/fdu24/">
        <?php else: ?>
          <a href="/">
        <?php endif; ?>
        職業診断する
      </a>
      </div>
    <?php elseif(!empty($know_flag)): ?>
      <div class="history_back">
        <a href="javascript:history.back();">BACK</a>
      </div>
    <?php endif; ?>
  </div>
</header>






 <script>
 // アナリティクス トラッキング コード
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87126946-1', 'auto');
  ga('send', 'pageview');

</script>
