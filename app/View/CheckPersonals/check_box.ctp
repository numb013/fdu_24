
<?php if(!empty($flag)): ?>
<aside id="fh5co-hero" clsas="js-fullheight">
  <div class="flexslider js-fullheight">
    <div>
      <div class="col-md-12 text-center js-fullheight" style="padding:0px;">
        <div class="slider-checkbox-inner">
          <div class="checkbox-title">当てはまる項目を3つ以上チェックしてください</div>
          <?php echo $this->Form->create('CheckPersonal', array('type' => 'file', 'url' =>  'check_box')); ?>
          <div class="check-group clearfix ">
            <?php
              echo $this->Form->input('CheckPersonal.CheckPersonal', array(
                  'type' => 'select',
                  'label' => false,
                  'div' => false,
                  'multiple'=> 'checkbox',
                  'options' => $check_personals,
              ));
            ?>
          </div>
        </div>
        <div class="set-btn animated fadeInUp">
          <a href="services.html">診断する</a>
        </div>
        <?php echo $this->Form->hidden('para', array('value' => $para)); ?>
        <?php echo $this->Form->end('検索', array('class' => 'set-btn animated fadeInUp')); ?>
      </div>
    </div>
  </div>
</aside>

<?php elseif(!empty($datas)): ?>


<?php

echo pr($datas);
exit();

 ?>

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
    <div class="job-memu">
      <a href="products.html">
        <div class="photo-cut">
            <img src="images/image_5.jpg" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive-menu">
        </div>
        <p>ウェディングプランナー</p>
        <p>メジャー度★★★★★</p>
      </a>
    </div>
    <div class="job-memu">
      <a href="products.html">
        <div class="photo-cut">
            <img src="images/image_5.jpg" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive-menu">
        </div>
        <p>ウェディングプランナー</p>
        <p>メジャー度★★★★★</p>
      </a>
    </div>
    <div class="job-memu">
      <a href="products.html">
        <div class="photo-cut">
            <img src="images/image_5.jpg" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive-menu">
        </div>
        <p>ウェディングプランナー</p>
        <p>メジャー度★★★★★</p>
      </a>
    </div>
    <div class="job-memu">
      <a href="products.html">
        <div class="photo-cut">
            <img src="images/image_5.jpg" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive-menu">
        </div>
        <p>ウェディングプランナー</p>
        <p>メジャー度★★★★★</p>
      </a>
    </div>
    <div class="job-memu">
      <a href="products.html">
        <div class="photo-cut">
            <img src="images/image_5.jpg" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive-menu">
        </div>
        <p>ウェディングプランナー</p>
        <p>メジャー度★★★★★</p>
      </a>
    </div>
    <div class="job-memu">
      <a href="products.html">
        <div class="photo-cut">
            <img src="images/image_5.jpg" alt="Free Website Template, Free HTML5 Bootstrap Template" class="img-responsive-menu">
        </div>
        <p>ウェディングプランナー</p>
        <p>メジャー度★★★★★</p>
      </a>
    </div>
  </div>

  <div class="col-md-offset-0 text-center fh5co-heading animate-box job-box" style="clear: both; background:#000;">
    <div class="job-count"><p>向いてる職業が2件ヒット</p></div>
    <div class="job-page"><p>1.2.3.4.5.6</p></div>
  </div>
</div>


<?php endif; ?>

</div>
