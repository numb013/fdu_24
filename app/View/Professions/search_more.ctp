<div id="fixedBox" class="nav">
  <div class="col-md-12 text-center" style="padding:0px;">
    <div class="set-btn">
      <a href="services.html">診断する</a>
    </div>
  </div>
</div>
<?php
echo pr($check_likes);
echo pr($param);
 ?>

<div class="col-md-12 text-center animate-box" style="background-color:#000; padding:0px;">
  <div class="col-md-12 col-sm-12 col-sm-push-0 col-xs-push-0 more-search-bar">
    <div class="good-search">こだわり検索</div>
    <?php echo $this->Form->create('Profession', array('type' => 'file', 'url' =>  'index')); ?>
    <div class="fh5co-services" style="padding:0px;">

      <?php foreach ($check_likes as $key => $data): ?>
        <div class="col-md-4 text-center wrap_search">
          <div class="search-title"><?php echo $like_genre[$key] ;?></div>
          <div class="list_search">
            <ul class="float list_none">
              <li>
                <?php
                $active = $this->Form->input('Profession.like_checks', array(
                    'type' => 'select',
                    'multiple' => 'checkbox',
                    'legend' => false,
                    'options' => $data,

                    'hiddenField' => false,
                    'label' => false,
                    ));
                echo preg_replace('/<div class="checkbox">(.+)<label[^>]+>(.+)<\/label><\/div>/', '<label class="checkbox">$1$2</label>', $active);
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

  <?php echo $this->Form->hidden('param', array('value' => $param)); ?>

  <?php echo $this->Form->end('検索', array('class' => 'set-btn animated fadeInUp')); ?>
</div>
</div>


</div>
