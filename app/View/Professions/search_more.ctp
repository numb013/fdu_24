<div id="fixedBox" class="nav">
  <div class="col-md-12 text-center" style="padding:0px;">
    <div class="set-btn">
      <a href="services.html">診断する</a>
    </div>
  </div>
</div>
<?php
//echo pr($check_likes);
//exit();
 ?>

<div class="col-md-12 text-center animate-box" style="background-color:#000; padding:0px;">
  <div class="col-md-12 col-sm-12 col-sm-push-0 col-xs-push-0 more-search-bar">
    <div class="good-search">こだわり検索</div>
    <div class="fh5co-services" style="padding:0px;">
      <?php foreach ($check_likes as $key => $data): ?>
          <div class="col-md-4 text-center wrap_search">
            <div class="search-title"><?php echo $like_genre[$key] ;?></div>
            <div class="list_search">
              <ul class="float list_none">
                <li>
                  <?php
                    echo $this->Form->input('Profession.check_likes', array(
                      'type' => 'select',
                      'label' => false,
                      'multiple'=> 'checkbox',
                      'options' => $data,
                    ));
                  ?>
                </li>
              </ul>
            </div>
          </div>
        <?php endforeach; ?>
    </div>
  </div>
  <div class="col-md-12 text-center" style="padding:0px;">
    <div class="set-btn">
      <a href="services.html">診断する</a>
    </div>
  </div>
</div>
</div>


</div>
