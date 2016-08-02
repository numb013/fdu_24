<div class="col-md-12 text-center animate-box" style="background-color:#000; padding:0px;">

  <div class="col-md-12 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0 col-top-mar" style="padding:0px;">
    <div class="serch-frame">
      <a href="about.html" style="color:#274b28;"><div class="sort-search">知名度順</div></a>
      <a href="about.html" style="color:#274b28;"><div class="more-search">さらに絞り込む▼</div></a>
    </div>
    <div class="col-md-offset-0 text-center fh5co-heading animate-box job-box" style="clear: both;">
      <div class="job-count"><p>向いてる職業が2件ヒット</p></div>
      <div class="job-page"><p>1.2.3.4.5.6</p></div>
    </div>
  </div>



  <div class="col-md-offset-0 text-center fh5co-heading animate-box job-box" style="clear: both;">




<?php foreach ($datas as $key => $data): ?>
  <div class="job-memu">
    <a href="products.html">
      <div class="photo-cut">
          <?php echo $this->Html->image($data['Image'][0]['url'] ,array('calss' => 'img-responsive-menu')); ?>
      </div>
      <p><?php echo $data['Profession']['profession_name']; ?></p>
      <p>メジャー度<?php echo $data['Profession']['core_status']; ?></p>
    </a>
  </div>
<?php endforeach; ?>


  </div>

  <div class="col-md-offset-0 text-center fh5co-heading animate-box job-box" style="clear: both; background:#000;">
    <div class="job-count"><p>向いてる職業が2件ヒット</p></div>
    <div class="job-page"><p>1.2.3.4.5.6</p></div>
  </div>
</div>
