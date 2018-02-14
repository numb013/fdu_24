<div class="side_1">

  <div class="side_2">
      <ul class="add_img" style="margin-bottom: 10px;">
        <li>
          <a href="https://itunes.apple.com/jp/app/%E3%82%AB%E3%83%A1%E3%83%AC%E3%82%AA%E3%83%B3%E3%83%81%E3%83%A3%E3%83%83%E3%83%88-%E7%9D%80%E3%81%9B%E6%9B%BF%E3%81%88%E8%87%AA%E7%94%B1%E3%81%AA%E3%83%81%E3%83%A3%E3%83%83%E3%83%88%E3%82%A2%E3%83%97%E3%83%AA/id1268384842?mt=8"><?php echo $this->Html->image('/img/kamereon.jpg'); ?></a>
        </li>
        <li>
          <a href="http://www.bizsuma.com/plan/"><?php echo $this->Html->image('/img/k_suma.jpg'); ?></a>
        </li>
        <li>
          <a href="http://www.bizsuma.com/plan/"><?php echo $this->Html->image('/img/k_gara.jpg'); ?></a>
        </li>
      </ul>  
  </div>

  <div class="side_2">
    <ul class="job_list">
      <h3>コア職業ランキング</h3>
      <?php foreach ($core_content as $key => $value): ?>
      <li class="core_list">
        <a href="http://fdu24.shop/professions/detail/<?php echo $value['Profession']['id']; ?>/1">
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
  </div>

  <div class="side_2">
    <ul class="job_list">
    <h3>オススメ職業</h3>
      <?php foreach ($related as $key => $value): ?>
      <li>
        <a href="http://fdu24.shop/professions/detail/<?php echo $value['Profession']['id']; ?>/1">
        <h4><?php echo $value['Profession']['profession_name']; ?></h4>
        <p><?php echo mb_strimwidth($value['Profession']['job_salary'], 0, 33, "..."); ?><p>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>

</div>



