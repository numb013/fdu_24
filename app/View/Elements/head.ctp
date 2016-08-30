<div id="fh5co-page">
<header id="fh5co-header" role="banner">
  <div class="container">
    <div class="header-inner">
      <h1><a href="/fdu24/">FDU<span>-</span>24</a></h1>
      <?php if(empty($know_flag)): ?>
        <p class="title-small-text">あなたの為の<br>職業診断CHECK</p>
      <?php endif; ?>
    </div>
    <?php if(!empty($back_flag)): ?>
      <div class="history_back">
        <a href="javascript:history.back();">BACK</a>
      </div>
    <?php elseif(!empty($know_flag)): ?>


        <a href="javascript:void(0);" class="know_count" id=":f<?php echo $datas['Profession']['id'];?>">
          この職業知ってた : <?php echo $datas['Profession']['know_count']; ?>
        </a>
    <?php endif; ?>
  </div>
  <input type="button" value="Yahoo!Japanへリンク" onClick="kakunin()">
</header>




<script type="text/javascript">



</script>
