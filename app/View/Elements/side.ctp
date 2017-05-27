<div class="side_1" style="border-top: 1px solid #ccc">


<?php

//echo pr($core_content);

 ?>

  <h3>コア職業ランキング</h3>
  <ul class="job_list">
    <?php foreach ($core_content as $key => $value): ?>

    <li class="core_list">
      <a href="<?php echo $value['Profession']['id']; ?>">
      <div class="job_list_img">
        <div class = 'photo-cut_1'>
          <?php echo $this->Html->image($value['Image'][0]['url']); ?>
        </div>
      </div>
      <div class="job_list_text">
        <h4><?php echo $value['Profession']['profession_name']; ?></h4>
        <p class="sm_text">
          <?php echo mb_strimwidth($value['Profession']['job_salary'], 0, 29, "..."); ?>
        </p>
        <p class="bg_text">
          <?php echo $value['Profession']['job_salary']; ?>
        </p>
    </div>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>
  <h3>オススメ職業</h3>
  <ul class="job_list">
    <?php foreach ($related as $key => $value): ?>
    <li>
      <a href="<?php echo $value['Profession']['id']; ?>">
      <h4><?php echo $value['Profession']['profession_name']; ?></h4>
      <p><?php echo mb_strimwidth($value['Profession']['job_salary'], 0, 33, "..."); ?><p>
      </a>
    </li>
    <?php endforeach; ?>
  </ul>


<ul class="add_img">
  <li>
    <script language="javascript" src="//ad.jp.ap.valuecommerce.com/servlet/jsbanner?sid=3342556&pid=884673553"></script><noscript><a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3342556&pid=884673553" target="_blank" rel="nofollow"><img src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3342556&pid=884673553" border="0"></a></noscript>
  </li>
  <li>
    <script language="javascript" src="//ad.jp.ap.valuecommerce.com/servlet/jsbanner?sid=3342556&pid=884692761"></script><noscript><a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3342556&pid=884692761" target="_blank" rel="nofollow"><img src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3342556&pid=884692761" border="0"></a></noscript>
  </li>
  <li>
    <script language="javascript" src="//ad.jp.ap.valuecommerce.com/servlet/jsbanner?sid=3342556&pid=884692750"></script><noscript><a href="//ck.jp.ap.valuecommerce.com/servlet/referral?sid=3342556&pid=884692750" target="_blank" rel="nofollow"><img src="//ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3342556&pid=884692750" border="0"></a></noscript>
  </li>
</ul>




<!-- <div class="col-md-12 fh5co-copyright text-center">
    <span class='footer_link'>
    <?php echo $this->Html->link('お問い合わせ', array('controller' => 'Contacts', 'action' => 'index')); ?>
  </span>
</div> -->


  <div style="text-align: center; padding: 30px 0; float: left; width: 100%;">
    <h3 style="color:#323232; margin-top:0px; font-size:17px;">お問い合わせは下のボタンから</h3>
		<?php echo $this->Html->link('お問い合わせ', array('controller' => 'Contacts', 'action' => 'index'), array('class' => 'occupation_link')); ?>
  </div>


</div>
