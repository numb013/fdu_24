<aside id="fh5co-hero" clsas="js-fullheight">
  <div class="flexslider js-fullheight">
    <div>
      <div class="col-md-12 text-center js-fullheight" style="padding:0px;">
        <div class="slider-checkbox-inner">
          <div class="checkbox-title">当てはまる項目を3つ以上チェックしてください</div>
          <?php echo $this->Form->create('CheckPersonals', array('type' => 'file', 'url' => array('controller' => 'Professions', 'action' => 'search'))); ?>
          <div class="check-group clearfix ">
            <?php
              echo $this->Form->input('CheckPersonals.check_personal', array(
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

</div>
